<?php

namespace App\Http\Controllers;

use App\Models\Hire_text;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class HireTextController extends Controller
{
    // middleware code use start here
    public function __construct()
    {
        $this->middleware('auth');
    }
    // middleware code use end here

    public function hire_update_page(Hire_text $hire_text_id)
    {
        return view('dashboard-folder.hire_text_area.update_page',compact('hire_text_id'));
    }
    public function hire_update_data(Request $request,Hire_text $hire_text_id)
    {
        $request->validate([
            'hire_text' => 'required',
            'bg_photo' =>'mimes:jpeg,png,jpg,webp',
        ]);
        if($request->hasFile('bg_photo')){
            //bg_photo delete from file
                unlink(public_path('upload-photos/hire-background-photo/').$request->old_bg_photo);

                // photo upload code start here
                // step:1->new photo name create
                $new_bg_photo=Str::random(7).'.'.$request->file('bg_photo')->getClientOriginalExtension();
                // step:2->new photo upload
                $save_link=public_path('upload-photos/hire-background-photo/').$new_bg_photo;
                Image::make($request->file('bg_photo'))->resize(1600,1066)->save($save_link);
            // photo upload code endt here
            $hire_text_id->bg_photo=$new_bg_photo;
        }
        $hire_text_id->hire_text=$request->hire_text;
        $hire_text_id->save();
        return back()->with('update_message','Update Complated!');
    }
}
