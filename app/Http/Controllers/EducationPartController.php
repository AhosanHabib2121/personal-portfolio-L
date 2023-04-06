<?php

namespace App\Http\Controllers;

use App\Models\Education_part;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EducationPartController extends Controller
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
        $education_data_all=Education_part::latest()->get();
        $education_deleted_data=Education_part::onlyTrashed()->latest()->get();
        return view('dashboard-folder.education_part.index',compact('education_data_all','education_deleted_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard-folder.education_part.create');
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
        ]);
        Education_part::insert($request->except('_token')+[
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success_message','Added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education_part  $education_part
     * @return \Illuminate\Http\Response
     */
    public function show(Education_part $education_part)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education_part  $education_part
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $education_edit_data=Education_part::where('id',$id)->first();
        return view('dashboard-folder.education_part.edit',compact('education_edit_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education_part  $education_part
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $education_data=Education_part::where('id',$id)->first();
        $request->validate([
            '*' => 'required',
        ]);
        $education_data->name_of_degree=$request->name_of_degree;
        $education_data->collage_university_name=$request->collage_university_name;
        $education_data->duration=$request->duration;
        $education_data->short_description=$request->short_description;
        $education_data->save();
        return back()->with('update_message','Update Complated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education_part  $education_part
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Education_part::where('id',$id)->delete();
        return back()->with('delete_message','Delete Complated!');
    }
    //restore and force_delete code start here
    public function education_restore($id)
    {
        Education_part::onlyTrashed()->find($id)->restore();
        return back();
    }
    public function education_force_delete($id)
    {
        Education_part::onlyTrashed()->find($id)->forceDelete();
        return back();
    }
    //restore and force_delete code end here
}
