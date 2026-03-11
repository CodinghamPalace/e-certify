<?php

namespace App\Livewire\Events;

use App\Actions\Participants\ImportParticipants;
use App\Models\Participant;
use App\Models\TrainingEvent;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Exception;

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
            'participants' => $participants
        ])->layout('layouts.admin');
    }
}
