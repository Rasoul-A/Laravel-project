<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController2 extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $blogs=[
            [
                'title'=>'Title 1',
                'body'=> 'Body for title 1',
                'status' => 1
            ],
            [
                'title'=>'Title 2',
                'body'=> 'Body for title 2',
                'status'=> 0
            ],
            [
                'title'=>'Title 3',
                'body'=> 'Body for title 3',
                'status'=> 0
            ]
        ];
        return view('home',compact('blogs'));
    }
}
