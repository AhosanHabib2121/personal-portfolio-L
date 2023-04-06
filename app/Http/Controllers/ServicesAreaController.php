<?php

namespace App\Http\Controllers;

use App\Models\Services_area;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServicesAreaController extends Controller
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
        $services_all_data=Services_area::latest()->get();
        $services_deleted_data=Services_area::onlyTrashed()->latest()->get();
        return view('dashboard-folder.services_area.index',compact('services_all_data','services_deleted_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard-folder.services_area.create');
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
            'icon'=>"required|unique:services_areas,icon",
            'title'=>"required",
            'short_description'=>"required",
        ]);

        Services_area::insert($request->except('_token')+ [
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success_message','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services_area  $services_area
     * @return \Illuminate\Http\Response
     */
    public function show(Services_area $services_area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services_area  $services_area
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services_edit_data=Services_area::where('id',$id)->first();
        return view('dashboard-folder.services_area.edit',compact('services_edit_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services_area  $services_area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $services_data=Services_area::where('id',$id)->first();
        $request->validate([
            '*' => 'required',
        ]);
        $services_data->icon=$request->icon;
        $services_data->title=$request->title;
        $services_data->short_description=$request->short_description;
        $services_data->save();
        return back()->with('update_message','Update Complated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services_area  $services_area
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Services_area::where('id',$id)->delete();
        return back()->with('delete_message','Delete Complated!');
    }
    //restore and force_delete code start here
    public function services_restore($id)
    {
        Services_area::onlyTrashed()->find($id)->restore();
        return back();
    }
    public function services_force_delete($id)
    {
       Services_area::onlyTrashed()->find($id)->forceDelete();
        return back();
    }
    //restore and force_delete code end here
}
