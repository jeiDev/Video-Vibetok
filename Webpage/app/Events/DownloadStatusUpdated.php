<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Log;

class DownloadStatusUpdated implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $taskId;
    public $status;
    public $metadata;

    public function __construct($taskId, $status, $metadata = null)
    {
        $this->taskId = $taskId;
        $this->status = $status;
        $this->metadata = $metadata;
    }

    public function broadcastOn(): array
    {   
        return [
            new Channel('download.'. $this->taskId),
        ];
    }

    public function broadcastAs(): string
    {
        return 'status.updated';
    }
}