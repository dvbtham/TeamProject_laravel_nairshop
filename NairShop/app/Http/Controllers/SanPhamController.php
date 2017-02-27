<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SanPhamController extends Controller
{
    public function details($id){
        $prod = Product::find($id);
        return view('pages.single')->withProd($prod);
    }
    public function list(){
        $prods = Product::paginate(10);
        return view('pages.listProducts')->withProds($prods);
    }
    public function prodsByCateId($id){
        $prods = Product::where('category_id',$id)->paginate(10);
        return view('pages.listProducts')->withProds($prods);
    }
}
