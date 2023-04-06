<?php

namespace App\Http\Controllers;

use App\Models\About_area;
use Illuminate\Http\Request;

class AboutAreaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function about_update_page(About_area $about_area_id)
    {
        return view('dashboard-folder.about_area.update_page',compact('about_area_id'));
    }
    public function about_update_data(Request $request,About_area $about_area_id)
    {
        $request->validate([
            '*' => 'required',
        ]);
        $about_area_id->simple_text=$request->simple_text;
        $about_area_id->name=$request->name;
        $about_area_id->description=$request->description;
        $about_area_id->experiance_number=$request->experiance_number;
        $about_area_id->month_year=$request->month_year;
        $about_area_id->save();
        return back()->with('update_message','Update Complated!');
    }
}
