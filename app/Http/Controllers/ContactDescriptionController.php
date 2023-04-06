<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact_description;

class ContactDescriptionController extends Controller
{
    // middleware code use start here
    public function __construct()
    {
        $this->middleware('auth');
    }
    // middleware code use end here
    
    public function contact_desc_update_page(Contact_description $contact_descri_area_id)
    {
        return view('dashboard-folder.contact_descri_area.update_page',compact('contact_descri_area_id'));
    }
    public function contact_descr_update_data(Request $request,Contact_description $contact_descri_area_id)
    {
        $request->validate([
            'short_description' => 'required',
        ]);
        $contact_descri_area_id->short_description=$request->short_description;
        $contact_descri_area_id->save();
        return back()->with('update_message','Update Complated!');
    }
}
