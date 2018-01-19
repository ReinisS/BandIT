<?php

namespace App\Listeners;

use App\Events\LogEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Spatie\Activitylog\Models\Activity;

class LogEvent
{

    public function __construct() {}

    public function handle(LogEvent $event)
    {
        
        activity($event->subject)
            ->by($event->user)
            ->log($event->description);
        
    }
}