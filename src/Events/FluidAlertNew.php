<?php

namespace akufikri\Fluidalert\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class FluidAlertNew implements ShouldBroadcast
{
      use Dispatchable, InteractsWithSockets, SerializesModels;

      public $data;

      public function __construct(array $data)
      {
            $this->data = $data;
      }

      public function broadcastOn()
      {
            return new Channel('fluidalert');
      }

      public function broadcastAs()
      {
            return 'fluidalert.new';
      }
}