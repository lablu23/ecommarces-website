<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Brand::all();
        return view('admin.brand.index',compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('status','active')->get();

        return view('admin.brand.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        
        $models = new Brand;
        $models->brand_name  = $request->brand_name;
        $models->status = $request->status;
        $models->category_id = $request->category_id;
        $models->slug = strtolower(str_replace(' ','-',$request->subcategory_name));

        $image =$request->file('photo');
        $img_name=hexdec(uniqid()). '.'. $image->getClientOriginalExtension();
        $request->photo->move(public_path('upload'),$img_name);
        $img_url = 'upload/' . $img_name;
        $models->photo = $img_url; 
        $models->save();

        return redirect()->route('admin.brand.index');
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
        $brand = Brand::findOrFail($id);
        return view('admin.brand.edit',compact('brand','category'));
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
        $models = Brand::findOrFail($id)->get();
        $models->brand_name  = $request->brand_name;
        $models->status = $request->status;
        $models->category_id = $request->category_id;
        $models->slug = strtolower(str_replace(' ','-',$request->subcategory_name));

        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $id=$request->id;
        $image =$request->file('photo');
        $img_name=hexdec(uniqid()). '.'. $image->getClientOriginalExtension();
        $request->photo->move(public_path('upload'),$img_name);
        $img_url = 'upload/' . $img_name;
        
        Brand::findOrFail($id)->update([
            'photo' => $img_url,

        ]);
        $models->photo ;
        $models->save();

        return redirect()->route('admin.brand.index');


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
