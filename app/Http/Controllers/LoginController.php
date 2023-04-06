<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
//    public function handleLogin(Request $request){
public function handleLogin(LoginRequest $request){
//        dd($request);
//        dd($request->all());
//        $request->validate([
//            'name'=>['required','alpha','min:6','max:10'],
//            'email'=>['required','email'],
//            'password'=>['required']
//        ],[
//            'name.required'=>'This is a changed text for required validation rule' //for changing default text of validation rule.
//            ,'email.email' =>'I changed email error text',
//            'email.required'=>'فیلد ایمیل مورد نیاز است.'
//        ]);
        return $request;
    }
}
