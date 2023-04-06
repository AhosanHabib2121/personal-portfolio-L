<?php

namespace App\Http\Controllers;

use App\Models\Cvdownload;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Response;

class CvdownloadController extends Controller
{
    public function cv_update_page(Cvdownload $cvdownload_id)
    {
        return view('dashboard-folder.cv-part.update_page',compact('cvdownload_id'));
    }
    public function cv_update_data(Request $request,Cvdownload $cvdownload_id)
    {
        $request->validate([
            'cv' =>'mimes:jpeg,png,jpg,webp',
        ]);
        if($request->hasFile('cv')){
            //bg_photo delete from file
             unlink(public_path('upload-photos/cv-download/').$request->old_cv);

            // photo upload code start here
                // step:1->new photo name create
                $new_cv=Str::random(7).'.'.$request->file('cv')->getClientOriginalExtension();
                // step:2->new photo upload
                $save_link=public_path('upload-photos/cv-download/').$new_cv;
                Image::make($request->file('cv'))->resize(992,1403)->save($save_link);
            // photo upload code endt here
            $cvdownload_id->cv=$new_cv;
        }
        $cvdownload_id->save();
        return back()->with('update_message','Update Complated!');
    }
    public function cv_download(Cvdownload $cvdownload_id)
    {
        $cv_filepath = public_path('upload-photos/cv-download/'.$cvdownload_id->cv);
        return Response::download($cv_filepath);
    }
}
