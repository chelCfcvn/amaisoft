<?php

namespace App\Services;

use App\Models\Staff;
use App\Jobs\SendEmailJob;

class SendMailService 
{
    function sendMail ($data) {
        dispatch(new App\Jobs\SendEmailJob($data));
    }
}
