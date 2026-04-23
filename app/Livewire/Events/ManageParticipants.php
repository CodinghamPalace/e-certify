<?php

namespace App\Livewire\Events;

use App\Actions\Participants\ImportParticipants;
use App\Actions\Participants\QueueCertificateEmail;
use App\Models\Participant;
use App\Models\TrainingEvent;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Exception;
use Illuminate\Support\Facades\Log;

class ManageParticipants extends Component
{
    use WithPagination, WithFileUploads;

    public TrainingEvent $event;
    public $search = '';
    public $csvFile;
    public $showUploadModal = false;

    // Participant Edit/Delete state
    public $showEditModal = false;
    public $showDeleteModal = false;
    public $selectedParticipantId;
    public $editingName;
    public $editingEmail;
    public $editingStatus;

    // Email Queue state
    public $showBulkSendModal = false;
    public $showSingleSendModal = false;

    protected $paginationTheme = 'bootstrap';

    public function mount(TrainingEvent $event)
    {
        $this->event = $event;
    }

    public function edit($id)
    {
        $participant = Participant::findOrFail($id);
        $this->selectedParticipantId = $id;
        $this->editingName = $participant->name;
        $this->editingEmail = $participant->email;
        $this->editingStatus = $participant->status;
        $this->showEditModal = true;
    }

    public function update()
    {
        $this->validate([
            'editingName' => 'required|string|max:255',
            'editingEmail' => "required|email|max:255|unique:participants,email,{$this->selectedParticipantId},id,training_event_id,{$this->event->id}",
            'editingStatus' => 'required|in:pending,generated,sent',
        ], [
            'editingEmail.unique' => 'This email is already registered for this event.',
        ]);

        $participant = Participant::findOrFail($this->selectedParticipantId);
        $participant->update([
            'name' => $this->editingName,
            'email' => $this->editingEmail,
            'status' => $this->editingStatus,
        ]);

        session()->flash('message', 'Participant updated successfully.');
        $this->showEditModal = false;
    }

    public function confirmDelete($id)
    {
        $this->selectedParticipantId = $id;
        $this->showDeleteModal = true;
    }

    public function delete()
    {
        Participant::destroy($this->selectedParticipantId);
        session()->flash('message', 'Participant removed successfully.');
        $this->showDeleteModal = false;
    }

    public function closeModals()
    {
        $this->showEditModal = false;
        $this->showDeleteModal = false;
        $this->showBulkSendModal = false;
        $this->showSingleSendModal = false;
        $this->resetErrorBag();
    }

    public function openUploadModal()
    {
        $this->resetErrorBag();
        $this->reset('csvFile');
        $this->showUploadModal = true;
    }

    public function closeUploadModal()
    {
        $this->showUploadModal = false;
    }

    public function downloadSample()
    {
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="participants_sample.csv"',
        ];

        $callback = function () {
            $file = fopen('php://output', 'w');
            fputcsv($file, ['Name', 'Email']);
            fputcsv($file, ['John Doe', 'john.doe@example.com']);
            fputcsv($file, ['Jane Smith', 'jane.smith@example.com']);
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function import(ImportParticipants $importer)
    {
        $this->validate([
            'csvFile' => 'required|file|mimes:csv,txt|max:2048',
        ]);

        try {
            $path = $this->csvFile->getRealPath();
            $count = $importer->execute($this->event, $path);

            session()->flash('message', "Successfully imported {$count} participants.");
            $this->closeUploadModal();
            $this->resetPage();
        } catch (Exception $e) {
            $this->addError('csvFile', $e->getMessage());
        }
    }

    /**
     * Prepare for bulk sending of emails.
     */
    public function confirmBulkSend()
    {
        $count = $this->event->participants()->where('status', 'generated')->count();
        if ($count === 0) {
            session()->flash('message', 'There are no participants with "generated" status to send certificates to.');
            return;
        }
        $this->showBulkSendModal = true;
    }

    /**
     * Execute bulk sending.
     */
    public function sendBulk(QueueCertificateEmail $queuer)
    {
        $count = $queuer->executeBulk($this->event);
        $this->showBulkSendModal = false;
        session()->flash('message', "{$count} certificates have been queued for background dispatch.");
    }

    /**
     * Prepare for single email sending.
     */
    public function confirmSingleSend($id)
    {
        $this->selectedParticipantId = $id;
        $participant = Participant::findOrFail($id);
        
        if ($participant->status !== 'generated') {
             session()->flash('message', 'Certificate must be in "generated" status before sending.');
             return;
        }

        $this->showSingleSendModal = true;
    }

    /**
     * Execute single sending.
     */
    public function sendSingle(QueueCertificateEmail $queuer)
    {
        $participant = Participant::findOrFail($this->selectedParticipantId);
        $queuer->execute($participant);
        $this->showSingleSendModal = false;
        session()->flash('message', "The certificate for {$participant->name} has been queued.");
    }

    public function render()
    {
        $participants = $this->event->participants()
            ->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%')
                    ->orWhere('uuid', 'like', '%' . $this->search . '%');
            })
            ->latest()
            ->paginate(10);

        return view('livewire.events.manage-participants', [
            'participants' => $participants,
            'pendingCount' => $this->event->participants()->where('status', 'generated')->count()
        ])->layout('layouts.admin');
    }
}
