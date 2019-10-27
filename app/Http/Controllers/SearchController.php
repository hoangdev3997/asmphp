<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class SearchController extends Controller
{
    public function index()
    {
        $search = request()->search;

        $ctgs = Product::where('product_name', 'LIKE', "%$search%")->paginate(6);
        return view('page.shop',compact(['ctgs']));
    }
}
