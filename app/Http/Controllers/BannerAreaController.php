<?php

namespace App\Http\Controllers;

use App\Models\Banner_area;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class BannerAreaController extends Controller
{
    // middleware code use start here
    public function __construct()
    {
        $this->middleware('auth');
    }
    // middleware code use end here

    public function update_page(Banner_area $banner_area_id)
    {
        return view('dashboard-folder.banner_area.update_page',compact('banner_area_id'));
    }
    public function update_data(Request $request,Banner_area $banner_area_id)
    {
        $request->validate([
            'background_photo' => 'mimes:jpeg,png,jpg,webp',
            'profile_photo' => 'mimes:jpeg,png,jpg,webp',
            'self_description' => 'required',
            'self_location' => 'required',
        ]);
        if($request->hasFile('background_photo')){
            //background_photo delete from file
                unlink(public_path('upload-photos/banner-background-photo/').$request->old_background_photo);

                // photo upload code start here
                // step:1->new photo name create
                $new_background_photo=Str::random(7).'.'.$request->file('background_photo')->getClientOriginalExtension();
                // step:2->new photo upload
                $save_link=public_path('upload-photos/banner-background-photo/').$new_background_photo;
                Image::make($request->file('background_photo'))->resize(1600,1069)->save($save_link);
            // photo upload code endt here
            $banner_area_id->background_photo=$new_background_photo;
        };
        if($request->hasFile('profile_photo')){
            //profile_photo delete from file
                unlink(public_path('upload-photos/banner-profile-photo/').$request->old_profile_photo);

                // photo upload code start here
                // step:1->new photo name create
                $new_profile_photo=Str::random(7).'.'.$request->file('profile_photo')->getClientOriginalExtension();
                // step:2->new photo upload
                $save_link=public_path('upload-photos/banner-profile-photo/').$new_profile_photo;
                Image::make($request->file('profile_photo'))->resize(163,162)->save($save_link);
            // photo upload code endt here
            $banner_area_id->profile_photo=$new_profile_photo;
        }
        $banner_area_id->self_description=$request->self_description;
        $banner_area_id->self_location=$request->self_location;
        $banner_area_id->save();
        return back()->with('update_message','Update Complated!');
    }
}
