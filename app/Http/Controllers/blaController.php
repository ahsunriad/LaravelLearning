<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class blaController extends Controller
{
    public function store()
    {
        //dd(\request('name'));

    }
    public function view()
    {
        return view("check");
    }
    public function loginCheck(Request $request)
    {
        $data = $request->input();
        $request->session()->put('bla', $data['name']);
        //echo session('bla');
        return redirect('blabla');
    }
    public function uploadCheck(Request $request){
        $image = $request->file('randomPic');
        $imageName = null;
        if($image){
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $data = $image->move(public_path('uploads/'), $imageName);
            dd ($data);
        }

    }

}
