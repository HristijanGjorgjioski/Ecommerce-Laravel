<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {

        print_r(route('products'));

        //DIrectly in view
        return view('products.index');
    }

    public function about() {
        return 'about index page';
    }

    public function show($name) {
        $data = ['p1' => 'pc', 'p2' => 'mobile'];

        return view('products.index', [
            'products' => $data[$name] ?? 'Product ' . $name . ' does not exsist'
        ]);
    }
}
