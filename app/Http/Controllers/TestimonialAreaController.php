<?php

namespace App\Http\Controllers;

use App\Models\Testimonial_area;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class TestimonialAreaController extends Controller
{
    // middleware code use start here
    public function __construct()
    {
        $this->middleware('auth');
    }
    // middleware code use end here

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial_data_all=Testimonial_area::latest()->get();
        $testimonial_deleted_data=Testimonial_area::onlyTrashed()->latest()->get();
        return view('dashboard-folder.testimonial_area.index',compact('testimonial_data_all','testimonial_deleted_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard-folder.testimonial_area.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            '*' => 'required',
            'photo' => 'required|mimes:jpeg,png,jpg,webp',
        ]);
        if($request->hasFile('photo'))
        {
            // photo upload code start here
                // step:1->new photo name create
                $new_photo=Str::random(7).'.'.$request->file('photo')->getClientOriginalExtension();
                // step:2->new photo upload
                $save_link=public_path('upload-photos/tastimonial_photo/').$new_photo;
                Image::make($request->file('photo'))->resize(65,65)->save($save_link);
            // photo upload code endt here
        }
        Testimonial_area::insert([
            'name'=>$request->name,
            'title'=>$request->title,
            'photo'=>$new_photo,
            'short_description'=>$request->short_description,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success_message','Added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial_area  $testimonial_area
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial_area $testimonial_area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial_area  $testimonial_area
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial_edit_data=Testimonial_area::where('id',$id)->first();
        return view('dashboard-folder.testimonial_area.edit',compact('testimonial_edit_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial_area  $testimonial_area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $testimonial_data=Testimonial_area::where('id',$id)->first();
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'short_description' => 'required',
            'photo' => 'mimes:jpeg,png,jpg,webp',
        ]);
        if($request->hasFile('photo')){
            //photo delete from file
                unlink(public_path('upload-photos/tastimonial_photo/').$request->old_photo);

            // photo upload code start here
                // step:1->new photo name create
                $new_update_photo=Str::random(7).'.'.$request->file('photo')->getClientOriginalExtension();
                // step:2->new photo upload
                $save_link=public_path('upload-photos/tastimonial_photo/').$new_update_photo;
                Image::make($request->file('photo'))->resize(65,65)->save($save_link);
            // photo upload code endt here
            $testimonial_data->photo=$new_update_photo;
        };
        $testimonial_data->name=$request->name;
        $testimonial_data->title=$request->title;
        $testimonial_data->short_description=$request->short_description;
        $testimonial_data->save();
        return back()->with('update_message','Update Complated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial_area  $testimonial_area
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimonial_area::where('id',$id)->delete();
        return back()->with('delete_message','Delete Complated!');
    }
    //restore and force_delete code start here
    public function testimonial_restore($id)
    {
        Testimonial_area::onlyTrashed()->find($id)->restore();
        return back();
    }
    public function testimonial_force_delete($id)
    {
        Testimonial_area::onlyTrashed()->find($id)->forceDelete();
        return back();
    }
    //restore and force_delete code end here
}
