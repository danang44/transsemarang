<?php

namespace App\Listeners;
use Carbon\Carbon;
use Illuminate\Auth\Events\Login;


class RecordLoginInfo
{
    public function handle(Login $event)
    {
        $event->user->forceFill([
            'last_login_at' => Carbon::now()->toDateTimeString(),
            'last_login_ip' => request()->getClientIp()
        ])->save();
    }

   
    public function tes($event)
    {
        //
    }
}
