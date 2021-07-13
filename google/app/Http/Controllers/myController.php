<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class myController extends Controller
{
    public function Check(Request $request){
        $key = $request->data;
        if (strlen($key) >0){
            return redirect()->route('detail')->with('key', $key);
        }else{
            return redirect()->route('index');
        }
    }

    public function Return(){
        return redirect()->route('index');
    }
}
