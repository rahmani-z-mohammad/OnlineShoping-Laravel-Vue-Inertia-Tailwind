<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return inertia('Index/Index',[
            'message' => 'Hello Everyone this is the Index page!'
        ]);
    }

    public function about(){
        return inertia('Index/Index',[
            'message' => 'Hello Everyone this is the About page!'
        ]);
    }
}
