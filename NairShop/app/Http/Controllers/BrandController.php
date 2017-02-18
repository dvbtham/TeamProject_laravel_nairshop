<?php

namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function getCreate(){
        return view("admin.pages.brands.create");
    }
     public function postCreate(){
        return view("admin.pages.brands.create");
    }
    public function index(){
        return view("admin.pages.brands.index");
    }
}
