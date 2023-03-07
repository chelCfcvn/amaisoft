<?php

namespace App\Services;

use App\Models\Staff;
use Illuminate\Support\Composer;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginService
{
    public function login($request)
    {
        // $staffs = Staff::with('position', 'department')->get();
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = auth()->user()->role_id;
            if ($user == 1) {
                return redirect()->route('dashboard');
            } else {
                $staff_id = auth()->user()->staff_id;
                $staff = Staff::find($staff_id);
                if($staff->position_id == '2'){
                    return redirect()->route('manager.show');
                }
                else{
                    return redirect()->route('staff.profile');
                }
            }
        } else {
            dd('Mày có tài khoản chưa thằng ngu kia');
        }
    }
}
