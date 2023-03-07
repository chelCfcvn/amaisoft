<?php

namespace App\Services;

use App\Models\Staff;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminService
{
    public function listStaff($request)
    {
        return Staff::all();
    }
}
