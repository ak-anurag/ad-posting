<?php

namespace App\Http\Controllers;

use App\Models\PostAd;
use Illuminate\Http\Request;

class AdListController extends Controller
{
    public function show(){
        $post = PostAd::get();
        return view('pages.adlist_page')->with('posts', $post);
    }

    //show filtered ad
    public function showFiltered(Request $request){
        $request->validate([
            'search_term' => ['nullable', 'string'],
            'city' => ['nullable', 'string'],
            'category' => ['nullable', 'string'],
        ]);

        $post = PostAd::where('city', $request->city)
                      ->orWhere('category', $request->category)
                      ->get();

        return view('pages.adlist_page')->with('posts', $post);
    }
}
