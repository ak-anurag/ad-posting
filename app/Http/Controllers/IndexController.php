<?php

namespace App\Http\Controllers;

use App\Models\PostAd;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //show index file
    public function index(){
        $post = PostAd::get();
        return view('index')->with('posts', $post);
    }
}
