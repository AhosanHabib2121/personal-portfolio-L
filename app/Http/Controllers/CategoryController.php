<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $category_data_all=Category::latest()->get();
        $category_deleted_data=Category::onlyTrashed()->latest()->get();
        return view('dashboard-folder.category.index',compact('category_data_all','category_deleted_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard-folder.category.create');
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
        Category::insert($request->except('_token')+[
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success_message','Added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard-folder.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            '*' => 'required',
        ]);
        $category->category_name=$request->category_name;
        $category->save();
        return back()->with('update_message','Update Complated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('delete_message','Delete Complated!');
    }
    //restore and force_delete code start here
    public function category_restore($id)
    {
        Category::onlyTrashed()->find($id)->restore();
        return back();
    }
    public function category_force_delete($id)
    {
        Category::onlyTrashed()->find($id)->forceDelete();
        return back();
    }
    //restore and force_delete code end here
}
