<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Session;
use Image;
use Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $query = \Request::get('search');
         Session::flash('currfilter', $query);
        $prods = Product::where('name', 'LIKE', '%'.$query.'%')->orderBy('name')->paginate(10);
        return View('admin.pages.products.index',['prods'=> $prods]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cates = Category::pluck('name','id');
         return View('admin.pages.products.create',['cates'=>$cates]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
        'name' => 'required|max:250',
        'intro' => 'required|min:2',
        'unit_price' => 'required',
        'price' => 'required',
        'image'=>'sometimes|image']);
          //insert into database
      $product = new Product;
      $product->name = $request->name;
      $product->is_deleted = false;
      $product->actived = true;
      $product->alias = \App\Helpers\Helper::convert_vi_to_en($request->name);
      $product->category_id = $request->category_id;
      $product->user_id = $request->user_id;
      $product->intro = $request->intro;
      $product->unit_price = $request->unit_price;
      $product->price = $request->price;
      $product->discount = $request->discount;
      $product->tags = $request->tags;
      if($request->hasFile('image')){
          $image = $request->file('image');
          $filename= time(). '.'. $image->getClientOriginalExtension();
          $location = public_path('images/'. $filename);
          Image::make($image)->resize(300,200)->save($location);
          $product->image = $filename;
      }
      
      $product->meta_keyword = $request->meta_keyword;
      $product->meta_description = $request->meta_description;
      $product->save();
      Session::flash('success', "Thêm mới sản phẩm thành công.");
      return redirect()->route('products.index');
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
         $prod = Product::find($id);
         $cates = Category::pluck('name','id');
        return View('admin.pages.products.edit',['prod'=>$prod,'cates'=>$cates]);
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
         $product = Product::find($id);
         $this->validate($request, [
        'name' => 'required|max:250',
        'intro' => 'required|min:2',
        'unit_price' => 'required',
        'price' => 'required',
        'image'=>'image']);
          //insert into database
     
      $product->name = $request->name;
      $product->is_deleted = $request->is_deleted;
      $product->actived = true;
      $product->alias = \App\Helpers\Helper::convert_vi_to_en($request->name);
      $product->category_id = $request->category_id;
      $product->user_id = $request->user_id;
      $product->intro = $request->intro;
      $product->unit_price = $request->unit_price;
      $product->price = $request->price;
      $product->discount = $request->discount;
      $product->tags = $request->tags;
      if($request->hasFile('image')){
          $image = $request->file('image');
          $filename= time(). '.'. $image->getClientOriginalExtension();
          $location = public_path('images/'. $filename);
          Image::make($image)->resize(300,200)->save($location);
          $oldFilename = $product->image;

          $product->image = $filename;

          Storage::delete($oldFilename);

      }
      $product->meta_keyword = $request->meta_keyword;
      $product->meta_description = $request->meta_description;
      $product->save();
      Session::flash('success', "Cập nhật sản phẩm thành công.");
      return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $product = Product::where('id',$id);
       Storage::delete($product->image);
        $product->delete();
        Session::flash('success', "Xóa thành công.");
        return redirect()->route('products.index');
    }
}
