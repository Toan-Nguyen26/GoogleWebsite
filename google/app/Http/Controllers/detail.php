<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class detail extends Controller
{
    public function Detail(){
        $key = session('key');
        $url = "http://localhost:9200/my_google3/_search";
        $param = array(
        "from" => 0,
        "size" => 20,
        "_source" => array(
            "includes" => array("title" , "description", "url")
        ),
         "query" => array(
                "multi_match" => array(
                    "query" => $key,
                    "fields" => array("title" , "description", "detail", "keyword")
                      )
             )
        );
        $header = array(
             'Content-Type: application/json'
        );

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($param,true));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($ch);

        $res = json_decode($res);
        return redirect()->route('main')->with('res', $res);
    }
}
