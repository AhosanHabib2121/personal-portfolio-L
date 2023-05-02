<?php

namespace App\Http\Controllers;

use App\Models\Someprojectlink;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SomeprojectlinkController extends Controller
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
        $some_project_data=Someprojectlink::all();
        $some_project_data_deleted_data=Someprojectlink::onlyTrashed()->get();
        return view('dashboard-folder.some_project_link.index',compact('some_project_data','some_project_data_deleted_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard-folder.some_project_link.create');
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
            'project_name'=>"required|unique:someprojectlinks,project_name",
            'project_link'=>"required|unique:someprojectlinks,project_link",
        ]);

        Someprojectlink::insert($request->except('_token')+ [
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success_message','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Someprojectlink  $someprojectlink
     * @return \Illuminate\Http\Response
     */
    public function show(Someprojectlink $someprojectlink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Someprojectlink  $someprojectlink
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $some_project_edit=Someprojectlink::where('id',$id)->first();
        return view('dashboard-folder.some_project_link.edit',compact('some_project_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Someprojectlink  $someprojectlink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $some_project_data=Someprojectlink::where('id',$id)->first();
        $request->validate([
            '*'=>'required',
        ]);
        $some_project_data->project_name=$request->project_name;
        $some_project_data->project_link=$request->project_link;
        $some_project_data->save();
        return back()->with('update_message','Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Someprojectlink  $someprojectlink
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Someprojectlink::where('id',$id)->delete();
        return back()->with('delete_message','Delete Complated!');
    }

     //restore and force_delete code start here
     public function project_some_data_restore($id)
     {
        Someprojectlink::onlyTrashed()->find($id)->restore();
        return back();
     }
     public function project_some_data_force_delete($id)
     {
        Someprojectlink::onlyTrashed()->find($id)->forceDelete();
        return back();
     }
     //restore and force_delete code end here
}
