<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Admin\SubCategory;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= Category::where('status','active')->get();
        $brand= Brand::where('status','active')->get();

        return view('admin.product.create',compact('category','brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $models = new Product;
        $models->product_name  = $request->product_name  ;
        $models->category_id  = $request->category_id  ;
        $models->subcategory_id  = $request->subcategory_id  ;
        $models->brand_id  = $request->brand_id  ;
        $models->shart_des  = $request->shart_des  ;
        $models->long_des  = $request->long_des  ;

        $models->price  = $request->price  ;
        $models->discount_type  = $request->discount_type  ;
        $models->discount  = $request->discount  ;
        $models->stock  = $request->stock  ;
        $models->meta_title  = $request->product_name  ;
        $models->meta_des  = $request->shart_des  ;
        $models->status  = $request->status  ;
        $models->slug = strtolower(str_replace(' ','-',$request->product_name));  ;
      
        $image =$request->file('photo');
        $img_name=hexdec(uniqid()). '.'. $image->getClientOriginalExtension();
        $request->photo->move(public_path('upload'),$img_name);
        $img_url = 'upload/' . $img_name;
        $models->photo = $img_url; 
        $models->meta_photo = $img_url; 
        $models->save();

        return redirect()->route('admin.product.index');
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
        $product = Product::findOrFail($id);
        $category= Category::where('status','active')->get();
        $brand= Brand::where('status','active')->get();
        $subcategory =SubCategory::where('category_id',$product->category_id)->where('status','active')->get();
       
        return view('admin.product.edit',compact('product','category','brand','subcategory'));
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
     
  
        $models = Product::findOrFail($id);
        $models->product_name  = $request->product_name  ;
        $models->category_id  = $request->category_id  ;
        $models->subcategory_id  = $request->subcategory_id  ;
        $models->brand_id  = $request->brand_id  ;
        $models->shart_des  = $request->shart_des  ;
        $models->long_des  = $request->long_des  ;

        $models->price  = $request->price  ;
        $models->discount_type  = $request->discount_type  ;
        $models->discount  = $request->discount  ;
        $models->stock  = $request->stock  ;
        $models->meta_title  = $request->product_name  ;
        $models->meta_des  = $request->shart_des  ;
        $models->status  = $request->status  ;
        $models->slug = strtolower(str_replace(' ','-',$request->product_name));  ;
       
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $id=$request->id;
        $image =$request->file('photo');
        $img_name=hexdec(uniqid()). '.'. $image->getClientOriginalExtension();
        $request->photo->move(public_path('upload'),$img_name);
        $img_url = 'upload/' . $img_name;
        
        Product::findOrFail($id)->update([
            'photo' => $img_url,

        ]);
        $models->photo ;
     $models->save();
     return redirect()->route('admin.product.index');
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
