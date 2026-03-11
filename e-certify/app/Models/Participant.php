<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Participant extends Model
{
    /** @use HasFactory<\Database\Factories\ParticipantFactory> */
    use HasFactory;

    protected $fillable = [
        'training_event_id',
        'name',
        'email',
        'uuid',
        'status',
    ];

    /**
     * Get the training event that owns the participant.
     */
    public function trainingEvent(): BelongsTo
    {
        return $this->belongsTo(TrainingEvent::class);
    }
}
