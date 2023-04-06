<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;



class ContactController extends Controller
{

    
    public function contact_form_data(Request $request)
    {
        // contact form data insert code
        if($request->name == null || $request->email== null || $request->message == null){
            return redirect()->route('index', '#contact')->withErrors([
                    'name' => 'Please enter your name then try!',
                    'email' => 'Please enter your email then try!',
                    'message' => 'Please enter message then try!',
            ]);
        }
        else{
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'message' => 'required',
            ]);
            Contact::insert([
                'name'=>$request->name,
                'email'=>$request->email,
                'message'=>$request->message,
                'created_at'=>Carbon::now(),
            ]);
            return redirect()->route('index');

        }
    }
    // contact form data store code
    public function contact_data()
    {
        $contact_all_data=Contact::latest()->get();
        $contact_deleted_data=Contact::onlyTrashed()->latest()->get();
        return view('dashboard-folder.contact_form.index',compact('contact_all_data','contact_deleted_data'));
    }
    public function contact_delete(Contact $id)
    {
        $id->delete();
        return back()->with('delete_message','Delete Complated!');
    }

    //restore and force_delete code start here
    public function contact_form_restore($id)
    {
        Contact::onlyTrashed()->find($id)->restore();
        return back();
    }
    public function contact_form_force_delete($id)
    {
        Contact::onlyTrashed()->find($id)->forceDelete();
        return back();
    }
    //restore and force_delete code end here
}
