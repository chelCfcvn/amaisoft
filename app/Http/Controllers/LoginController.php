<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Staff;
use App\Models\User;
use App\Services\LoginService;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    protected $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }
    public function login(Request $request)
    {
        return ($this->loginService->login($request));
    }
    public function manager()
    {
        // $staffs = $this->loginService->passStaff();
        return view('manager.staffs');
    }
}
