<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Customers;
class handleRegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getForm(){
        return route('register');
    }
    public function handleRequest(Request $request){
        $validator = Validator::make($request->all(),[
            'user-name' => 'required',
            'email' => 'required|regex:/^.+@.+$/i|unique:users',
            'password' =>'required|min:6',
            're-password' => 'required|same:password',
            'shipping-option' => 'required'
        ],[
            'shipping-option.required' => 'Terms and Conditions need to be checked'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{
            $user = new Customers();
            $user->name = $request->input('user-name');
            $user->user = $request->input('user-name');
            $user->email = $request ->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->phone = $request->input('phone');
            $user->technique = " ";
            $user->add = $request->input('location');
            $user->type = $request->input('user-type');
            $user->bio = $request->input('resume');
            $user->status = 1;
        }
        $user->save();
        return redirect()->route('register-success');
    }
}
