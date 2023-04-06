<?php

namespace App\Http\Controllers;

use App\Models\Logo_and_favicon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class LogoAndFaviconController extends Controller
{
    // middleware code use start here
    public function __construct()
    {
        $this->middleware('auth');
    }
    // middleware code use end here

    public function logo_favicon_update_page(Logo_and_favicon $logo_favicon__id)
    {
        return view('dashboard-folder.logo_and_favicon.update_page',compact('logo_favicon__id'));
    }
    public function logo_faviocn_update_data(Request $request,Logo_and_favicon $logo_favicon__id)
    {
        $request->validate([
            'logo_image' => 'mimes:png',
            'favicon' => 'mimes:png',
        ]);
        if($request->hasFile('logo_image')){
            //logo_image delete from file
                unlink(public_path('upload-photos/logo/').$request->old_logo_image);

                // photo upload code start here
                // step:1->new photo name create
                $new_logo_image=Str::random(7).'.'.$request->file('logo_image')->getClientOriginalExtension();
                // step:2->new photo upload
                $save_link=public_path('upload-photos/logo/').$new_logo_image;
                Image::make($request->file('logo_image'))->resize(119,40)->save($save_link);
            // photo upload code endt here
            $logo_favicon__id->logo_image=$new_logo_image;
        };
        if($request->hasFile('favicon')){
            //favicon delete from file
                unlink(public_path('upload-photos/favicon/').$request->old_favicon);

                // photo upload code start here
                // step:1->new photo name create
                $new_favicon=Str::random(7).'.'.$request->file('favicon')->getClientOriginalExtension();
                // step:2->new photo upload
                $save_link=public_path('upload-photos/favicon/').$new_favicon;
                Image::make($request->file('favicon'))->resize(16,16)->save($save_link);
            // photo upload code endt here
            $logo_favicon__id->favicon=$new_favicon;
        }
        $logo_favicon__id->save();
        return back()->with('update_message','Update Complated!');
    }
}
