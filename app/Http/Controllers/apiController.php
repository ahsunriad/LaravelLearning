<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class apiController extends Controller
{
    public function view()
    {
        return redirect()->route('getApiData');
    }
    public function apiData(){
        $collection = Http::get("https://reqres.in/api/users?page=1");
        $collections = $collection['data'];
        //dd($collections);
        //return view('apiData', ['collection' =>$collection['data']]);
        return view('apiData', compact('collections'));
    }
}
