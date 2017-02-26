<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Helpers;

use Session;

class CateController extends Controller
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
        $cates = Category::where('name', 'LIKE', '%'.$query.'%')->orderBy('name')->paginate(10);
        return View('admin.pages.cates.index',['cates'=> $cates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.pages.cates.create');
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
        'description' => 'required|min:6|max:500']);
          //insert into database
      $cate = new Category;
      $cate->name = $request->name;
      $cate->is_deleted = false;
      $cate->actived = true;
      $cate->alias = \App\Helpers\Helper::convert_vi_to_en($request->name);
      $cate->parent_id = $request->parent_id == "" ? 0: $request->parent_id;
      $cate->description = $request->description;
      $cate->save();
      Session::flash('success', "Thêm mới danh mục thành công.");
      return redirect()->route('cates.index');
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
        $cate = Category::find($id);
        return View('admin.pages.cates.edit')->withCate($cate);
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
        $cate = Category::find($id);
        $this->validate($request, [
        'name' => 'required|max:250',
        'description' => 'required|min:6|max:500']);
          //insert into database
      
      $cate->name = $request->name;
      $cate->is_deleted = $request->is_deleted;
      $cate->actived = true;
      $cate->alias = $request->alias;
      $cate->parent_id = $request->parent_id == "" ? 0: $request->parent_id;
      $cate->description = $request->description;
      $cate->save();
      Session::flash('success', "Cập nhật danh mục thành công.");
      return redirect()->route('cates.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cate = Category::where('id',$id);
        $cate->delete();
        Session::flash('success', "Xóa danh mục thành công.");
        return redirect()->route('cates.index');
    }
}
