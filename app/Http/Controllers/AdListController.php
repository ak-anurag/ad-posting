<?php

namespace App\Http\Controllers;

use App\Models\PostAd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            'category' => ['required', 'string'],
        ]);

        $city = $request->city;
        $searchTerm = $request->search_term;
        $post = PostAd::where('category', $request->category)
                      ->where(function($query) use ($city, $searchTerm){
                            if($city != '' && $searchTerm != ''){
                                $query->where(['city' => $city, 'search_term' => $searchTerm]);
                            }
                            else if($city != ''){
                                $query->where('city', $city);
                            }
                            else if($searchTerm != ''){
                                $query->where('title', $searchTerm);
                            }
                      })
                      ->get();
        // return $post;
        return view('pages.adlist_page')->with('posts', $post);
    }

    //show ad category wise
    public function showCategoryWise(Request $request){
        $request->validate([
            'category' => ['required', 'string'],
        ]);

        $post = PostAd::where('category', $request->category)->get();
        return view('pages.adlist_page')->with('posts', $post);
    }

    //show ad details
    public function showAdDetail(Request $request){
        // return var_dump($request->post_id);
        // $request->validate([
        //     'post_id' => ['required'],
        //     'category' => ['required'],
        //     'slug' => ['required'],
        // ]);

        $validator = Validator::make(
            [
                'post_id' => $request->post_id,
                'category' => $request->category,
                'slug' => $request->slug,
            ],
            [
                'post_id' => ['required', 'numeric'],
                'category' => ['required'],
                'slug' => ['required'],
            ]
        );

        if($validator->fails()){
            $validator->validate();
        }


        try{
            $post = PostAd::find($request->post_id);
        }
        catch(\Exception $e){
            $request->session()->flash('fail', 'Invalid Post');
        }

        return view('pages.ad_detail')->with('post', $post);
    }
}
