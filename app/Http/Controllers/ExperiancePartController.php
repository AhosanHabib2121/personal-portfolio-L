<?php

namespace App\Http\Controllers;

use App\Models\Experiance_part;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExperiancePartController extends Controller
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
        $experiance_data_all=Experiance_part::latest()->get();
        $experiance_deleted_data=Experiance_part::onlyTrashed()->latest()->get();
        return view('dashboard-folder.experiance_part.index',compact('experiance_data_all','experiance_deleted_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard-folder.experiance_part.create');
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
        Experiance_part::insert($request->except('_token')+[
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success_message','Added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experiance_part  $experiance_part
     * @return \Illuminate\Http\Response
     */
    public function show(Experiance_part $experiance_part)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experiance_part  $experiance_part
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $experiance_edit_data=Experiance_part::where('id',$id)->first();
        return view('dashboard-folder.experiance_part.edit',compact('experiance_edit_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experiance_part  $experiance_part
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $experiance_edit_data=Experiance_part::where('id',$id)->first();
        $request->validate([
            '*' => 'required',
        ]);
        $experiance_edit_data->designation=$request->designation;
        $experiance_edit_data->company_name=$request->company_name;
        $experiance_edit_data->duration=$request->duration;
        $experiance_edit_data->short_description=$request->short_description;
        $experiance_edit_data->save();
        return back()->with('update_message','Update Complated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experiance_part  $experiance_part
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Experiance_part::where('id',$id)->delete();
        return back()->with('delete_message','Delete Complated!');
    }
    //restore and force_delete code start here
    public function experiance_restore($id)
    {
        Experiance_part::onlyTrashed()->find($id)->restore();
        return back();
    }
    public function experiance_force_delete($id)
    {
        Experiance_part::onlyTrashed()->find($id)->forceDelete();
        return back();
    }
    //restore and force_delete code end here
}
