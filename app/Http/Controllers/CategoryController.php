<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->category) {
            if (request()->sort=='L_H') {
                $ctgs = DB::table('products')->where('product_type_id','=', request()->category)->orderBy('product_price','asc');
            }elseif(request()->sort=='H_L') {
                $ctgs = DB::table('products')->where('product_type_id','=', request()->category)->orderBy('product_price','desc');
            }elseif(request()->name=='A_Z') {
                $ctgs = DB::table('products')->where('product_type_id','=', request()->category)->orderBy('product_name','asc');
            }elseif(request()->name=='Z_A') {
                $ctgs = DB::table('products')->where('product_type_id','=', request()->category)->orderBy('product_name','desc');
            }else{
            $ctgs = DB::table('products')->where('product_type_id','=', request()->category);
            }
        }
        else
        {
            if (request()->sort=='L_H') {
                $ctgs = DB::table('products')->orderBy('product_price','asc');
            }elseif(request()->sort=='H_L') {
                $ctgs = DB::table('products')->orderBy('product_price','desc');
            }elseif(request()->name=='A_Z') {
                $ctgs = DB::table('products')->orderBy('product_name','asc');
            }elseif(request()->name=='Z_A') {
                $ctgs = DB::table('products')->orderBy('product_name','desc');
            }else{
                $ctgs = DB::table('products');
            }
        }
        
       $ctgs=$ctgs->paginate(6);
        return view('page.shop',['ctgs'=>$ctgs]);
        //

    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
