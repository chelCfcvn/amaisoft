<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmailJob;
use App\Mail\SendEmailPass;
use App\Models\Staff;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function showCreate()
    {
        return view('users.create');
    }
    public function showEdit(user $user)
    {
        return view('users.edit', compact('user'));
    }
    public function create(Request $request)
    {
        $dataUser = $request->all();
        $dataUser['password'] = bcrypt($dataUser['password']);
        $dataUser['role_id'] = '2';
        $this->userService->create($dataUser);
        $data['email'] = $dataUser['email'];
        dispatch(new SendEmailJob($data));
        return redirect()->route('user');
    }
    public function update(User $user, Request $request)
    {
        $data = $request->all();
        $this->userService->update($user, $data);
        return redirect()->route('user');
    }
    public function delete(User $user)
    {
        $this->userService->delete($user);
        return redirect()->route('user');
    }
    public function confirm(Staff $id, Request $request){
        $user = User::where('staff_id',$id->id)->first();
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/');
    }
}
