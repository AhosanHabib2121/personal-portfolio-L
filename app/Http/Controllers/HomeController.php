<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Testimonial_area;
use Illuminate\Support\Str;
use Image;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return $testimonial_data_all=Testimonial_area::count();
        return view('dashboard-folder.home',[
            'testimonial_data_all'=>Testimonial_area::count(),
        ]);
    }
    // -----------------------profile data code start here---------------------------------------------------
    public function admin_profile_page()
    {
        return view('dashboard-folder.admin_profile.index');
    }
    public function admin_profile_update(Request $request,User $admin_id)
    {
        $request->validate([
            'name'=>'required',
            'phone_number'=>'nullable',
            'address'=>'required',
            'profile_photo' =>'mimes:jpeg,png,jpg,webp',
        ],[
            'name.required'=>'Please enter the name then try!',
            'address.required'=>'Please enter the address then try!',
        ]);
        if($request->hasFile('profile_photo')){
            // old profile photo delete from file
            if(auth()->user()->profile_photo !='default_profile_photo.jpg'){
                unlink(public_path('upload-photos/admin-profile-photo/').auth()->user()->profile_photo);
            }
            // photo upload code start here
                // step:1->new photo name create
                $new_name=Str::random(7).'.'.$request->file('profile_photo')->getClientOriginalExtension();
                // step:2->new photo upload
                $save_link=public_path('upload-photos/admin-profile-photo/').$new_name;
                Image::make($request->file('profile_photo'))->resize(300,300)->save($save_link);
            // photo upload code endt here
            $admin_id->profile_photo=$new_name;
        }
        $admin_id->name=$request->name;
        $admin_id->phone_number=$request->phone_number;
        $admin_id->address=$request->address;
        $admin_id->save();
        return back()->with('success_message','Update Successfully!');

    }
    public function change_password(Request $request)
    {
        $request->validate([
            'current_password'=>'required',
            'password'=>'required|confirmed|alpha_num|min:8',
            'password_confirmation'=>'required'
        ]);
        if($request->current_password == $request->password){
            return back()->withErrors(['error_password'=>'Your new password can not same as current password!']);
        }
        if(Hash::check($request->current_password,auth()->user()->password)){
            User::find(auth()->id())->update([
                'password'=>bcrypt($request->password)
            ]);
            return back()->with('password_success','Password Change successfully!');
        }
        else{
            return back()->withErrors(['error_password'=>'current password is wrong!']);
        }
    }
    // -----------------------profile data code end here---------------------------------------------------
}
