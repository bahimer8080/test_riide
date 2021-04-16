<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use TCG\Voyager\Models\Category;


class StoreController extends Controller
{
    public function index(){
        return view("dashboard.store.index");
    }

    public function franchiseStore(Request $request){

        $image = null;
        $bg_image = null;

        if( $request->file('image') ){
            $profileImage = $request->file('image');
            $profileImageSaveAsName = "image-" . uniqid() . "." . $profileImage->getClientOriginalExtension();

            $upload_path = 'img/';
            $profile_image_url = "/img/". $profileImageSaveAsName;
            $image = $profile_image_url;
            $success = $profileImage->move($upload_path, $profileImageSaveAsName);
        }
        if( $request->file('bg_image') ){
            $profileImage = $request->file('bg_image');
            $profileImageSaveAsName = "bg-" . uniqid() . "." . $profileImage->getClientOriginalExtension();

            $upload_path = 'img/';
            $profile_image_url = "/img/". $profileImageSaveAsName;
            $bg_image = $profile_image_url;
            $success = $profileImage->move($upload_path, $profileImageSaveAsName);
        }

        $user = User::find(\Auth::user()->id );
        $user->franchise = $request->input("franchise");
        if( $image != null ){
            $user->image = $image;
        }
        if( $bg_image != null ){
            $user->bg_image = $bg_image;
        }
        $user->save();
        return redirect("/dashboard/store");
    }

    public function franchiseCreate(){
        $categories = Category::all();
        return view("dashboard.store.create",compact("categories"));
    }

}
