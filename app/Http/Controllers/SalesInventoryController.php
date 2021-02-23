<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use DB;

class SalesInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Inventory::all();
      
        return view('sales.show')->with('list',$list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales.create');
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
            'sales_name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'quantity'=>'required'
        ]);
            
        Inventory::create([
            'sales_name'=>$request->sales_name,
            'description'=>$request->description,
            'price'=>$request->price,
            'quantity'=>$request->quantity
        ]);
        

      return redirect()->route('sales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $list = Inventory::where('id',$id)->get();

        // dd($list);
    
        return view('sales.edit')->with('list',$list);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

          
        // Inventory::update([
        //     'sales_name'=>$request->sales_name,
        //     'description'=>$request->description,
        //     'price'=>$request->price,
        //     'quantity'=>$request->quantity
        // ]);


        DB::table('sales')->update([  
        'sales_name'=>$request['sales_name'],
        'description'=>$request['description'],
        'price'=>$request['price'],
        'quantity'=>$request['quantity']]); 

        $list =  Inventory::all();
        // $Inventory->update($request->all());
        return view('sales.show')->with('list',$list);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // return 123;
        Inventory::destroy($id);
        // $item = Inventory::find($id);
        // $item->delete();

        return redirect()->route('sales.index');
    }
}
