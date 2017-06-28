<?php

namespace App\Events;

use App\Message;
use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
// Broadcast events in a private way to the frontend [not all users can subscribe]
use Illuminate\Broadcasting\PrivateChannel;
//
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
// Enable this all event broadcasting
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MessagePosted implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Message
     *
     * @var Message
     */
    public $message;

    /**
     * User
     *
     * @var User
     */
    public $user;

    public function __construct(Message $message, User $user)
    {
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PresenceChannel('chatroom');
    }
}

