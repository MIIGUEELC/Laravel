<?php

namespace App\Services;

use App\Mail\BookingMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class BookingNotifier
{
    public function notify($booking)
    {
        Mail::to('test@recipient.com')->send(new BookingMail());
    }
}
