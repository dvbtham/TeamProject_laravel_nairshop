<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class UserController extends Controller
{
     public function index()
    {
        $query = \Request::get('search');
         Session::flash('currfilter', $query);
        $users = User::where('name', 'LIKE', '%'.$query.'%')->orderBy('name')->paginate(10);
        return View('admin.pages.users.index',['users'=> $users]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return View('admin.pages.users.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
      $this->validate($request, [
        'name' => 'required|max:250',
        'email' => 'required',
        'password' => 'required|min:6|max:168',
        'password_again' => 'required|min:6|max:168|same:password']);
          //insert into database
      $user = new User;
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = md5($request->password);
      $user->is_deleted = false;
      $user->save();
      Session::flash('success', "Thêm mới người thành công.");
      return redirect()->route('users.index');
  }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return View('admin.pages.users.show')->withUser($user);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return View('admin.pages.users.edit')->withUser($user);
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
        //
      $user = User::find($id);
      
        $this->validate($request, [
        'name' => 'required|max:250',
        'email' => 'required',
        'password' => 'required|min:6|max:168']);
       
       $user = User::find($id);
       $user->name = $request->name;
       $user->email = $request->email;
       $user->is_deleted = $request->is_deleted;
       $user->password = $request->password;
       $user->save();
   
       Session::flash('success', "Cập nhật người dùng thành công.");
       return redirect()->route('users.index');
   }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id',$id);
        $user->delete();
        Session::flash('success', "Xóa người dùng thành công.");
        return redirect()->route('users.index');
    }
}
