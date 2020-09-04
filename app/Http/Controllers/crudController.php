<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class crudController extends Controller
{
    /**
     * Display a listing of the resource. php artisan route:list
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view('welcome', compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;

        $product -> nameProduct=$request->nameProduct;
        $product -> price = $request->price;
        date_default_timezone_set('America/Mexico_city');
        $date = date('d-m-Y h:i:s', time());
        $product -> created_at = $date;
        $product -> updated_at = null;

        $product->save();

        /*$redireccion = $this->index();
        return $redireccion;*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id',$id)->get();
        return view('show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('edit', compact('product'));
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
        //validar
        $this->validate($request,
                ['nameRequest'=>'required',
                 'price'=>'required|numeric|min:0']
                );

        $product = Product::findOrFail($id);
        $product-> update($request->all());
        
        return redirect('/crud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {
        return view('delete');
    }
}
