<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface NotificationServiceInterface 
{
    public function sendEmail(Collection $subscribers);
}