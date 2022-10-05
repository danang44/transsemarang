<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Listeners\RecordLoginInfo;
use Illuminate\Auth\Events\Login;


class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Login::class => [
            RecordLoginInfo::class
        ]
    ];

    //
}
