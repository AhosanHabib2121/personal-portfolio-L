<?php

namespace App\Http\Controllers;

use App\Models\Social_icons;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SocialIconsController extends Controller
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
        $social_icon=Social_icons::all();
        $social_icon_deleted_data=Social_icons::onlyTrashed()->get();
        return view('dashboard-folder.social_icon_area.index',compact('social_icon','social_icon_deleted_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard-folder.social_icon_area.create');
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
            'social_icon'=>"required|unique:Social_icons,social_icon",
            'social_link'=>"required|unique:Social_icons,social_link",
        ]);

        Social_icons::insert($request->except('_token')+ [
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success_message','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Social_icons  $social_icons
     * @return \Illuminate\Http\Response
     */
    public function show(Social_icons $social_icons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Social_icons  $social_icons
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $social_icon_edit=Social_icons::where('id',$id)->first();
        return view('dashboard-folder.social_icon_area.edit',compact('social_icon_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Social_icons  $social_icons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $social_icon_data=Social_icons::where('id',$id)->first();
        $request->validate([
            '*'=>'required',
        ]);
        $social_icon_data->social_icon=$request->social_icon;
        $social_icon_data->social_link=$request->social_link;
        $social_icon_data->save();
        return back()->with('update_message','Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Social_icons  $social_icons
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Social_icons::where('id',$id)->delete();
        return back()->with('delete_message','Delete Complated!');
    }
    //restore and force_delete code start here
    public function social_icon_restore($id)
    {
        Social_icons::onlyTrashed()->find($id)->restore();
        return back();
    }
    public function social_icon_force_delete($id)
    {
        Social_icons::onlyTrashed()->find($id)->forceDelete();
        return back();
    }
    //restore and force_delete code end here
}
