<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $top_prd = Product::select('*')
            ->orderBy('product_id')
            ->limit(8)
            ->get();

        $new_prd = Product::select('*')
            ->orderBy(DB::raw('RAND()'))
            ->limit(5)
            ->get();
        return view('index',compact(['new_prd','top_prd']));
    }
}
