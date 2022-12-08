<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendVerQue extends VerifyEmail implements shouldQueue
{
    use Queueable;

}
