<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Product::all();
      
        return view('products.show')->with('list',$list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'quantity'=>'required'
        ]);
            
        Product::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'quantity'=>$request->quantity
        ]);
        

      return redirect()->route('products.index');
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
        $list = Product::where('id',$id)->get();

        // dd($list);
    
        return view('products.edit')->with('list',$list);
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
        DB::table('products')->update([  
            'name'=>$request['name'],
            'description'=>$request['description'],
            'price'=>$request['price'],
            'quantity'=>$request['quantity']]); 
    
            $list =  Product::all();
            // $Inventory->update($request->all());
            return view('products.show')->with('list',$list);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         
        Product::destroy($id);
      
     
        return redirect()->route('products.index');
    }
}
