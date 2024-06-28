<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(){
        $products =[
            [
                'name'=>'Samsung Galaxy S20',
                'id'=>'1000',
            ],
            [
                'name'=>'Samsung Galaxy S20 ultra',
                'id'=>'1001',
            ]
        ];

        return view('list-product')->with([
            'products'=>$products
        ]);
    }

    public function getProduct($id){
        echo $id;
        // echo 'achooooi';
    }

    public function updateProduct(Request $request){
        echo $request ->id;
        echo $request->name;
    }

}
