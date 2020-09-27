<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Show the form to create a new blog post.
     *
     * @return Response
     */
    public function create()
    {
        return view('signin');
    }
    public function checkUser(Request $request) {
        if($request->user()) {
            //return view('navigation-dropdown');
            //dd($request->user());
            return view('homePageUser',['user' => $request->user()->name]);
;        }
        else {
            return view('register');
        }
    }

    /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|unique:users|max:255|email',
            'password' => 'required',
            'pseudo' => 'required|max:255'
        ]);
        //$validator = Validator::make([$value]);
        //return view('signin');

    }

}
