<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio_area;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class PortfolioAreaController extends Controller
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
        $portfolio_data_all=Portfolio_area::latest()->get();
        $portfolio_deleted_data=Portfolio_area::onlyTrashed()->latest()->get();
        return view('dashboard-folder.portfolio_area.index',compact('portfolio_data_all','portfolio_deleted_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_all_data=Category::all();
        return view('dashboard-folder.portfolio_area.create',compact('category_all_data'));
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
            'thumbnail_photo' => 'required|mimes:jpeg,png,jpg,webp',
        ]);
        if($request->hasFile('thumbnail_photo'))
        {
            // photo upload code start here
                // step:1->new photo name create
                $new_thumbnail_photo=Str::random(7).'.'.$request->file('thumbnail_photo')->getClientOriginalExtension();
                // step:2->new photo upload
                $save_link=public_path('upload-photos/portfolio_photo/').$new_thumbnail_photo;
                Image::make($request->file('thumbnail_photo'))->resize(356,381)->save($save_link);
            // photo upload code endt here
        }
        Portfolio_area::insert([
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'icon'=>$request->icon,
            'thumbnail_photo'=>$new_thumbnail_photo,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success_message','Added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio_area  $portfolio_area
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio_area $portfolio_area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio_area  $portfolio_area
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $porfolio_edit_data=Portfolio_area::where('id',$id)->first();
        $category_all_data=Category::all();
        return view('dashboard-folder.portfolio_area.edit',compact('porfolio_edit_data','category_all_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio_area  $portfolio_area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $porfolio_data=Portfolio_area::where('id',$id)->first();
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'icon' => 'required',
            'thumbnail_photo' => 'mimes:jpeg,png,jpg,webp',
        ]);
        if($request->hasFile('thumbnail_photo')){
            //photo delete from file
                unlink(public_path('upload-photos/portfolio_photo/').$request->old_thumbnail_photo);

            // photo upload code start here
                // step:1->new photo name create
                $new_thumbnail_photo=Str::random(7).'.'.$request->file('thumbnail_photo')->getClientOriginalExtension();
                // step:2->new photo upload
                $save_link=public_path('upload-photos/portfolio_photo/').$new_thumbnail_photo;
                Image::make($request->file('thumbnail_photo'))->resize(356,381)->save($save_link);
            // photo upload code endt here
            $porfolio_data->thumbnail_photo=$new_thumbnail_photo;
        };
        $porfolio_data->category_id=$request->category_id;
        $porfolio_data->title=$request->title;
        $porfolio_data->subtitle=$request->subtitle;
        $porfolio_data->icon=$request->icon;
        $porfolio_data->save();
        return back()->with('update_message','Update Complated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio_area  $portfolio_area
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Portfolio_area::where('id',$id)->delete();
        return back()->with('delete_message','Delete Complated!');
    }
    //restore and force_delete code start here
    public function portfolio_restore($id)
    {
        Portfolio_area::onlyTrashed()->find($id)->restore();
        return back();
    }
    public function portfolio_force_delete($id)
    {
        Portfolio_area::onlyTrashed()->find($id)->forceDelete();
        return back();
    }
    //restore and force_delete code end here
}
