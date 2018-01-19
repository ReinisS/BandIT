<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class LogEvent extends Event
{
    use SerializesModels;

    public $subject;
    public $description;
    public $user;

    public function __construct($user, $subject, $description)
    {
        $this->user = $user;
        $this->subject = $subject;
        $this->description = $description;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('user.'.$this->user->id);
    }
}
