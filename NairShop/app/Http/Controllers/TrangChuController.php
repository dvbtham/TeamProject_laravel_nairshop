<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class TrangChuController extends Controller
{
    public function getProductsHome()
    {
        $prods = Product::paginate(10);
        return View('pages.home',['prods'=> $prods]);
    }
}
