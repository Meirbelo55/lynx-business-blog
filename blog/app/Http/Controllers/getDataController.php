<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class getDataController  extends Controller  {
    public $content;
    public $name;
    public $id_users;

    public function sendData(Request $request)
    {
        //$newpost = new getDataController();
        //$newpost->content = $request->
        dd($request->post());

        //dd($request->user());
    }
}


