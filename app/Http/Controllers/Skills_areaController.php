<?php

namespace App\Http\Controllers;

use App\Models\Design_skills;
use App\Models\Develop_skills;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Skills_areaController extends Controller
{
    // middleware code use start here
    public function __construct()
    {
        $this->middleware('auth');
    }
    // middleware code use end here

    public function skills_index()
    {
        return view('dashboard-folder.skills_area.skill_index',[
            'design_skills_all_data'=>Design_skills::all(),
            'design_skills_deleted_data'=>Design_skills::onlyTrashed()->get(),
            'develop_skills_all_data'=>Develop_skills::all(),
            'develop_skills_deleted_data'=>Develop_skills::onlyTrashed()->get(),
        ]);
    }
    public function skills_create()
    {
        return view('dashboard-folder.skills_area.skill_create');
    }
    // -------------------------------- design skill code here-----------------------------------------
    public function design_skills_store(Request $request)
    {
        $request->validate([
            '*'=>"required",
        ]);

        Design_skills::insert($request->except('_token')+ [
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success_design_s_message','Added Successfully!');
    }
    public function design_skills_edit($id)
    {
        $design_skills_edit_data=Design_skills::where('id',$id)->first();
        return view('dashboard-folder.skills_area.design_skill_edit',compact('design_skills_edit_data'));
    }
    public function design_skills_update(Request $request,$id)
    {
        $design_skills_data=Design_skills::where('id',$id)->first();
        $request->validate([
            '*' => 'required',
        ]);
        $design_skills_data->skill_name=$request->skill_name;
        $design_skills_data->skill_percentage=$request->skill_percentage;
        $design_skills_data->save();
        return back()->with('update_message','Update Complated!');
    }
    public function design_skills_delete($id)
    {
        Design_skills::where('id',$id)->delete();
        return back()->with('delete_design_skill_message','Delete Complated!');
    }
    //restore and force_delete code start here
    public function design_skill_restore($id)
    {
        Design_skills::onlyTrashed()->find($id)->restore();
        return back();
    }
    public function design_skill_force_delete($id)
    {
    Design_skills::onlyTrashed()->find($id)->forceDelete();
        return back();
    }
    //restore and force_delete code end here

    // -------------------------------- develop skill code here-----------------------------------------
    public function develop_skills_store(Request $request)
    {
        $request->validate([
            '*'=>"required",
        ]);

        Develop_skills::insert($request->except('_token')+ [
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success_develop_s_message','Added Successfully!');
    }
    public function develop_skills_edit($id)
    {
        $develop_skills_edit_data=Develop_skills::where('id',$id)->first();
        return view('dashboard-folder.skills_area.develop_skill_edit',compact('develop_skills_edit_data'));
    }
    public function develop_skills_update(Request $request,$id)
    {
        $develop_skills_data=Develop_skills::where('id',$id)->first();
        $request->validate([
            '*' => 'required',
        ]);
        $develop_skills_data->skill_name=$request->skill_name;
        $develop_skills_data->skill_percentage=$request->skill_percentage;
        $develop_skills_data->save();
        return back()->with('update_message','Update Complated!');
    }

    public function develop_skills_delete($id)
    {
        Develop_skills::where('id',$id)->delete();
        return back()->with('delete_develop_skill_message','Delete Complated!');
    }
    //restore and force_delete code start here
    public function develop_skill_restore($id)
    {
        Develop_skills::onlyTrashed()->find($id)->restore();
        return back();
    }
    public function develop_skill_force_delete($id)
    {
        Develop_skills::onlyTrashed()->find($id)->forceDelete();
        return back();
    }
    //restore and force_delete code end here


}
