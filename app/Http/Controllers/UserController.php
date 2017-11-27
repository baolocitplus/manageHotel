<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
class UserController extends Controller


{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    //
    public function master()
    {
        return view('admin');
    }

    // login
   public function getlogin()
   {
        return view('auth.login');
   }

   public function postLogin(Request $request) 
   {    
        
        $rules = [
        'email' =>'required|email',
        'password' => 'required|min:8'
        ];

        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } 
        else 
        {
            $email = $request->input('email');
            $password = $request->input('password');

            if( Auth::attempt(['username' => $email, 'password' =>$password])) {
                return redirect()->intended('/accounts/admin');
            } else {
                $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    }

    // logout
    public function getLogout() 
    {
        Auth::logout();
        return redirect()->intended('/accounts/admin/login');
     }



}
