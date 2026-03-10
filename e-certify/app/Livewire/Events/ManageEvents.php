<?php

namespace App\Livewire\Events;

use App\Actions\Events\CreateTrainingEvent;
use App\Actions\Events\UpdateTrainingEvent;
use App\Models\TrainingEvent;
use Livewire\Component;
use Livewire\WithPagination;

class ManageEvents extends Component
{
    use WithPagination;

    public $search = '';

    // Modal state
    public $showModal = false;
    public $isEditing = false;
    public $eventId = null;

    // Form data
    public $title = '';
    public $description = '';
    public $date = '';
    public $location = '';
    public $uuid_prefix = '';

    /**
     * The attributes that should be used for pagination styling.
     */
    protected $paginationTheme = 'bootstrap';

    /**
     * Mount the component.
     */
    public function mount()
    {
        if (request()->query('create')) {
            $this->create();
        }
    }

    /**
     * Reset pagination when search changes.
     */
    public function updatedSearch()
    {
        $this->resetPage();
    }

    /**
     * Open the modal for creating a new event.
     */
    public function create()
    {
        $this->resetForm();
        $this->isEditing = false;
        $this->showModal = true;
    }

    /**
     * Open the modal for editing an existing event.
     */
    public function edit($id)
    {
        $this->resetForm();
        $event = TrainingEvent::findOrFail($id);
        
        $this->eventId = $event->id;
        $this->title = $event->title;
        $this->description = $event->description;
        $this->date = $event->date->format('Y-m-d');
        $this->location = $event->location;
        $this->uuid_prefix = $event->uuid_prefix;

        $this->isEditing = true;
        $this->showModal = true;
    }

    /**
     * Save the event (create or update).
     */
    public function save(CreateTrainingEvent $createAction, UpdateTrainingEvent $updateAction)
    {
        $input = [
            'title' => $this->title,
            'description' => $this->description,
            'date' => $this->date,
            'location' => $this->location,
            'uuid_prefix' => $this->uuid_prefix,
        ];

        if ($this->isEditing) {
            $event = TrainingEvent::findOrFail($this->eventId);
            $updateAction->update($event, $input);
            session()->flash('message', 'Event updated successfully.');
        } else {
            $createAction->create($input);
            session()->flash('message', 'Event created successfully.');
        }

        $this->closeModal();
    }

    /**
     * Delete an event.
     */
    public function delete($id)
    {
        $event = TrainingEvent::findOrFail($id);
        $event->delete();
        session()->flash('message', 'Event deleted successfully.');
    }

    /**
     * Close the modal and reset state.
     */
    public function closeModal()
    {
        $this->showModal = false;
        $this->resetForm();
    }

    /**
     * Reset the form fields.
     */
    protected function resetForm()
    {
        $this->eventId = null;
        $this->title = '';
        $this->description = '';
        $this->date = '';
        $this->location = '';
        $this->uuid_prefix = '';
        $this->resetErrorBag();
    }

    /**
     * Render the component.
     */
    public function render()
    {
        $events = TrainingEvent::query()
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('location', 'like', '%' . $this->search . '%')
                    ->orWhere('uuid_prefix', 'like', '%' . $this->search . '%');
            })
            ->latest()
            ->paginate(10);

        return view('livewire.events.manage-events', [
            'events' => $events,
        ])->layout('layouts.admin', ['title' => 'Manage Events']);
    }
}
