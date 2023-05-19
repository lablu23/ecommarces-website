<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = SubCategory::all();
        return view('admin.subcategory.index',compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('status','active')->get();

        return view('admin.subcategory.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $models = new SubCategory;
        $models->subcategory_name  = $request->subcategory_name;
        $models->status = $request->status;
        $models->category_id = $request->category_id;
        $models->slug = strtolower(str_replace(' ','-',$request->subcategory_name));
        $models->save();

        return redirect()->route('admin.subcategory.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('status','active')->get();
        $subcategory = SubCategory::findOrFail($id);
        return view('admin.subcategory.edit',compact('subcategory','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $models = SubCategory::findOrFail($id);
        $models->subcategory_name  = $request->subcategory_name;
        $models->status = $request->status;
        $models->category_id = $request->category_id;
        $models->slug = strtolower(str_replace(' ','-',$request->subcategory_name));
        $models->save();

        return redirect()->route('admin.subcategory.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
