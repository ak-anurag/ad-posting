<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Images;
use App\Models\PostAd;
use Illuminate\Http\Request;

class PostAdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //show post ad page
    public function showPage(){
        $cities = City::select('name')->get();
        $cityList = array();
        foreach($cities as $item){
            array_push($cityList, $item->name);
        }

        sort($cityList);
        return view('pages.post_ad')->with('cities', $cityList);
    }

    // store ad details 
    public function store(Request $request){
        // return $request->all();
        $request->validate([
                    'category' => ['required', 'string', 'max:180'],
                    'city'     => ['required', 'string', 'max:180'],
                    'address'  => ['nullable', 'string', 'max:180'],
                    'pincode'  => ['nullable', 'digits:6'],
                    'district' => ['nullable', 'string', 'max:180'],
                    'age'      => ['required', 'integer', 'min:18', 'max:100'],
                    'ad_title' => ['required', 'string', 'min:5', 'max:180'],
                    'ad_description' => ['required', 'string', 'min:20', 'max:1000'],
                    'contacted_type' => ['required', 'string', 'max:180'],
                    'email'    => ['required', 'email', 'string', 'max:180'],
                    'phone'    => ['required', 'digits:10'],
                    'whatsapp' => ['nullable'],
                ]);

        $post = new PostAd();
        $post->user_id = auth()->user()->id;
        $post->category = $request->category;
        $post->city = $request->city;
        $post->address = $request->address;
        $post->pincode = $request->pincode;
        $post->district = $request->district;
        $post->age = $request->age;
        $post->title = $request->ad_title;
        $post->description = $request->ad_description;
        $post->email = $request->email;
        $post->phone = $request->phone;

        $con_type = 2;
        switch($request->contacted_type){
            case 'phone' :
                $con_type = 1;
            
            case 'email' :
                $con_type = 2;

            case 'both' :
                $con_type = 3;
        }

        $post->contact_type = $con_type;
        $post->do_whatsapp = isset($request->whatsapp) ? 1 : 0;
        $result = $post->save();
        if($result == 1){

            $post_id = PostAd::where('user_id', auth()->user()->id)->latest()->first()->id;
            return redirect()->route('post.image', ['post_id' => \Crypt::encrypt($post_id)]);
        }
        else{
            $request->session()->flash('fail', 'Something went wrong!');
        }

        return redirect()->back();
    }

    //show image upload page
    public function showImagePage(){
        return view('pages.image_upload');
    }

    //store image to db
    public function storeImage(Request $request){
        $request->validate([
                    'image.*' => ['required', 'image', 'max:1000'],
                    'post_id' => ['required', 'numeric'],
                ]);

        $files = $request->file('image');
        $image_path = array();
        foreach($files as $file){
            $path = $file->store('ad_images');
            array_push($image_path, array('image' => $path, 'post_id' => $request->post_id, 'created_at' => now(), 'updated_at' => now()));
        }

        $result = Images::insert($image_path);
        if($result == 1){
            return redirect()->route('home');
        }
        else{
            $request->session()->flash('fail', 'Something went wrong!');
        }

        return redirect()->back();
    }
}
