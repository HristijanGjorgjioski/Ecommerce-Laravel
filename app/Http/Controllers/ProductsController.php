<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $title = 'Hristijan gjorgjioski!!!';
        $description = 'Created by Kiko';
        
        $data = ['p1 -> het', 'p2 -> heq'];

        //DIrectly in view
        return view('products.index', [
            'data' => $data
        ]);
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
