<?php

namespace App\Http\Controllers;

use App\Models\PostAd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.profile');
    }

    //delete ad
    public function deleteAd(int $post_id){
       $validator = Validator::make(['post_id' => $post_id], ['post_id' => ['required', 'numeric']]);
       if($validator->fails()){
           $validator->validate();
       }

        $result = PostAd::where('id', $post_id)->delete();
        if($result == 1){
            Session::flash('success', 'Successfully deleted ad');
        }
        else{
            Session::flash('fail', 'Failed to delete ad');
        }

        return redirect()->back();
    }
}
