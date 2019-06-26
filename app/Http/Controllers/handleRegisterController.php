<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
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
            'name' => 'required',
            'email' => 'required|regex:/^.+@.+$/i|unique:users',
            'password' =>'required|min:6',
            're-password' => 'required|same:password'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{
            return $request->all();
        }
    }
}
