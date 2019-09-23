<?php

namespace App\Http\Controllers\Index;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Model\GoodsModel;

class Index extends Controller
{
    /**
     * 前台首页
     */
    public function index()
    {
        $data = GoodsModel::get();
        //dd($data);

        return view('index.index',compact('data'));
    }


}
