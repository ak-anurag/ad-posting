<?php

namespace App\Http\Controllers;

use App\Models\PostAd;
use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Laravel\Ui\Presets\React;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'adminpermission']);
    }

    //show index or dashboard
    public function index(){
        $users = User::where('role', '<>', 1)->get();
        $posts = PostAd::count();
        return view('admin.index')->with([
                                            'users' => $users,
                                            'posts' => $posts
                                        ]);
    }

    //block users
    public function blockUser(Request $request){
        try {
            $decryptedValue = Crypt::decrypt($request->user_id);
        } catch (DecryptException $e) {
            return "Something went wrong ! <br>". $e;
        }

        $validator = Validator::make([
                                        'user_id' => $decryptedValue,
                                    ],
                                    [
                                        'user_id' => ['required', 'numeric'],
                                    ]);

        $validator->validate();

        $res = User::where('id', $decryptedValue)->update(['is_blocked' => 1]);
        if($res == 1){
            $request->session()->flash('success', 'User Blocked Successfully');
        }
        else{
            $request->session()->flash('fail', 'User not blocked');
        }

        return redirect()->back();
    }

    //unblock user
    public function unblockUser(Request $request){
        try {
            $decryptedValue = Crypt::decrypt($request->user_id);
        } catch (DecryptException $e) {
            return "Something went wrong ! <br>". $e;
        }

        $validator = Validator::make([
                                        'user_id' => $decryptedValue,
                                    ],
                                    [
                                        'user_id' => ['required', 'numeric'],
                                    ]);

        $validator->validate();

        $res = User::where('id', $decryptedValue)->update(['is_blocked' => 0]);
        if($res == 1){
            $request->session()->flash('success', 'User Unblocked Successfully');
        }
        else{
            $request->session()->flash('fail', 'User not Unblocked');
        }

        return redirect()->back();
    }

    //get post list
    public function getPostList(){
        $posts = PostAd::where('is_blocked', 0)->get();
        return view('admin.post_list')->with(['posts' => $posts]);
    }

    //block post
    public function blockPost(Request $request){
        try {
            $decryptedValue = Crypt::decrypt($request->post_id);
        } catch (DecryptException $e) {
            return "Something went wrong ! <br>". $e;
        }

        $validator = Validator::make([
                                        'post_id' => $decryptedValue,
                                    ],
                                    [
                                        'post_id' => ['required', 'numeric'],
                                    ]);

        $validator->validate();

        $res = PostAd::where('id', $decryptedValue)->update(['is_blocked' => 1]);
        if($res == 1){
            $request->session()->flash('success', 'Post Blocked Successfully');
        }
        else{
            $request->session()->flash('fail', 'Post not Blocked');
        }

        return redirect()->back();
    }
}
