<?php

namespace App\Services;

use App\Interfaces\NotificationServiceInterface;
use App\Mail\PriceLimitMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Collection;

class NotificationService implements NotificationServiceInterface
{
    public function sendEmail(Collection $subscribers)
    {
        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new PriceLimitMail($subscriber));
        }            
    }
}