<?php

namespace App\Livewire;

use App\Models\Participant;
use App\Models\TrainingEvent;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    /**
     * Get the dynamic stats for the dashboard summary cards.
     *
     * @return array
     */
    public function getStatsProperty()
    {
        $totalEvents = TrainingEvent::count();
        $eventsThisMonth = TrainingEvent::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();

        $totalGenerated = Participant::whereNotNull('uuid')->count();
        $generatedToday = Participant::whereNotNull('uuid')
            ->whereDate('created_at', now())
            ->count();

        $totalSent = Participant::where('status', 'sent')->count();
        $sentToday = Participant::where('status', 'sent')
            ->whereDate('updated_at', now())
            ->count();

        $totalPending = Participant::where('status', 'pending')->count();
        
        // Calculate delivery rate
        $deliveryRate = $totalGenerated > 0 
            ? round(($totalSent / $totalGenerated) * 100, 1) 
            : 0;

        return [
            'total_events' => [
                'value' => number_format($totalEvents),
                'trend' => $eventsThisMonth . ' this month',
            ],
            'certificates_generated' => [
                'value' => number_format($totalGenerated),
                'trend' => $generatedToday . ' today',
            ],
            'emails_sent' => [
                'value' => number_format($totalSent),
                'trend' => $deliveryRate . '% delivery',
            ],
            'pending_emails' => [
                'value' => number_format($totalPending),
                'trend' => 'Waiting for dispatch',
            ],
        ];
    }

    /**
     * Get the latest 5 training events.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getRecentEventsProperty()
    {
        return TrainingEvent::query()
            ->withCount([
                'participants',
                'participants as generated_count' => function ($query) {
                    $query->whereNotNull('uuid');
                }
            ])
            ->orderBy('date', 'desc')
            ->take(5)
            ->get();
    }

    /**
     * Render the dashboard component.
     */
    public function render()
    {
        return view('livewire.dashboard', [
            'stats' => $this->stats,
            'recentEvents' => $this->recentEvents,
        ])->layout('layouts.admin', ['title' => 'Dashboard']);
    }
}
