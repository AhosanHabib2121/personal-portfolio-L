<?php

namespace App\Http\Controllers;

use App\Models\Self_information;
use Illuminate\Http\Request;

class SelfInformationController extends Controller
{
    // middleware code use start here
    public function __construct()
    {
        $this->middleware('auth');
    }
    // middleware code use end here
    
    public function self_info_update_page(Self_information $self_info_area_id)
    {
        return view('dashboard-folder.Self_information_area.update_page',compact('self_info_area_id'));
    }
    public function self_info_update_data(Request $request,Self_information $self_info_area_id)
    {
        $request->validate([
            '*' => 'required',
            'phone_number' => 'required|digits:11',
        ]);
        $self_info_area_id->name=$request->name;
        $self_info_area_id->date_of_birth=$request->date_of_birth;
        $self_info_area_id->email=$request->email;
        $self_info_area_id->email_link=$request->email_link;
        $self_info_area_id->address=$request->address;
        $self_info_area_id->phone_number=$request->phone_number;
        $self_info_area_id->save();
        return back()->with('update_message','Update Complated!');
    }
}
