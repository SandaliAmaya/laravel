<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Validator;


class ProductController extends Controller {


    public function index(){

        //get all the products
        $products = Product::all();

        //load the view and pass the products
        return view::make('products.index')->with('products',$products);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|max:255',
        ]);
    }

    protected function create(Request $request)
    {
       Product::create($request->all());

       return \view('home');
    }

}
