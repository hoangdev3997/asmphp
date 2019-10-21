<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;
use Cart;

class CartController extends Controller
{
    public function add(Request $request)
    {
        Cart::add($request->id,$request->name,$request->amount,$request->price,['img'=>$request->img]);
       return back();
    }
    public function cart()
    {
        $continue_shopping = Product::select('*')
        ->orderBy(DB::raw('RAND()'))
        ->limit(5)
        ->get();

        return view('page.cart',compact(['continue_shopping']));
    }
    public function remove($id)
    {
        Cart::remove($id);
        return back();
    }
    public function update(Request $request)
    {
        
    }
}