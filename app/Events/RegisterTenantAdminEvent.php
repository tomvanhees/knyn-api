<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Hash;

class RegisterTenantAdminEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $tenant, $email, $name, $password;

    /**
     * Create a new event instance.
     *
     * @param array $request
     */
    public function __construct(array $request)
    {
        $this->tenant = $request["tenant"];
        $this->email = $request["email"];
        $this->name = $request["name"];
        $this->password = Hash::make($request["password"]);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
