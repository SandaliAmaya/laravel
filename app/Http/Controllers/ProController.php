<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Validator;

use Symfony\Component\HttpFoundation\Session\Session;

class ProController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pros=Product::all();

        return view::make('products.index')->with('products',$pros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //Product::create($request->all());

        return View('products.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name'       => 'required',
            'description'   => 'required',
            'price' => 'required'
        );

        //$validator = Validator::make(Input::all(),$rules);

        $pro = new Product;
        $pro->name = Input::get('name');
        $pro->description = Input::get('description');
        $pro->price = Input::get('price');
        $pro->save();

        //Session::flash('message','Successfully added the product');
        return Redirect::to('pros');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get the product
        $pro = Product::find($id);

        \Log::info($pro);

        // show the view and pass the product to it
        return View::make('products.show')
            ->with('pro', $pro);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // get the product
        $pro = Product::find($id);

        // show the edit form and pass the product
//        return View::make('products.edit')
//            ->with('pro', $pro);
        return view('products.edit',compact('pro','id'));
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
        $pro = Product::find($id);
        $pro->name = $request->get('name');
        $pro->description = $request->get('description');
        $pro->price = $request->get('price');
        $pro->save();
        return redirect('/pros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // delete
        $pro = Product::find($id);
        $pro->delete();

        // redirect
        //Session::flash('message', 'Successfully deleted the product!');
        //return Redirect::to('pros');
        return redirect('/pros');
    }

}
