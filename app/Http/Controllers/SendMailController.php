<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Models\Staff;
use App\Models\User;
use App\Services\SendMailService;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    /*
    Gửi mail khi đã đăng nhập vào trang cá nhân rồi
    */
    public function sendMail(Staff $profile)
    {
        $data['email'] = User::where('staff_id',$profile->id)->first()->email;
        $data['id']= $profile->id;
        dispatch(new SendEmailJob($data));
        return 'Đã gửi mail thành công';
    }
    /*
    Gửi mail hàng loạt
    */
    public function sendMails(Request $request)
    {
        foreach($request->list as $email){
            $data['email'] = $email;
            $data['id']= User::where('email',$email)->first()->staff_id;
            dispatch(new SendEmailJob($data));
        }
        
        return 'Đã gửi mail thành công';
    }
}
