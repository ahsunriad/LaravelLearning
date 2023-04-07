<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuth extends Controller
{
    public function view(){
        return view('login');
    }
    public function userCheck(Request $request)
    {
        //echo "I'm about to learn PHP!<br>";
        //$request->input();
        $data = $request->input();
        $request->session()->put('user', $data['username']);
        //echo session('session');
        return redirect('home');
    }
}
