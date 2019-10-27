<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;
use Cart;
use App\Order;
use App\OrderItem;

class CartController extends Controller
{
    public function add(Request $request)
    {
        Cart::add($request->id,$request->name,$request->amount,$request->price,['img'=>$request->img]);
       return back();
    }
    public function checkout()
    {
        if (Cart::content()->count()==0) {
            return redirect('/');
        }
        else {
        $continue_shopping = Product::select('*')
        ->orderBy(DB::raw('RAND()'))
        ->limit(5)
        ->get();
        return view('page.checkout',compact(['continue_shopping']));
        } 
    }
    public function remove()
    {
        Cart::remove(request()->id);
        return back();
    }
    public function update(Request $request)
    {
        Cart::update(request()->id, $request->amount);
        return back();
    }
    public function cartsubmit(Request $request)
    {
            $order = Order::create([
                'user_id'=> auth()->user()->id,
                'name' => $request->name,
                'address_1'=> $request->address,
                'address_2' => $request->address_2,
                'city'=> $request->city,
                'zipcode' => $request->zip,
                'phone'=> $request->phone,
                'total' =>Cart::total(0),
            ]);
            foreach(Cart::content() as $item){
                OrderItem::create([
                    'order_id'=> $order->id,
                    'product_id' => $item->id,
                    'qty'=> $item->qty,
                ]);
                $qty = Product::find($item->id);
                $qty->amount =- $item->qty;
                $qty->save();
            }

            Cart::destroy();
        return redirect('/shop')->with('success','Order Complete!');
        
    }
}   