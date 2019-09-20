<?php

namespace App\Http\Controllers\Index;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\

class Index extends Controller
{
    /**
     * 前台首页
     */
    public function index()
    {
        
        return view('index.index');
    }
}
