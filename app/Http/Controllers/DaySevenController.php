<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaySevenController extends Controller
{
    public function index(){

        $items = collect([
            [
                'id' => 0,
                'title' => 'ikan goreng',
                'harga' => 10000,
            ],
            [
                'id' => 0,
                'title' => 'ikan bakar',
                'harga' => 20000,
            ],
            [
                'id' => 0,
                'title' => 'ikan gulai',
                'harga' => 410000,
            ],
            [
                'id' => 0,
                'title' => 'ikan kari',
                'harga' => 105000,
            ],
            [
                'id' => 0,
                'title' => 'ikan ayam',
                'harga' => 100200,
            ],
            [
                'id' => 0,
                'title' => 'ikan gurami',
                'harga' => 100090,
            ],
            [
                'id' => 0,
                'title' => 'ikan panggang',
                'harga' => 101000,
            ],
        ]);


        return view('day7.orderForm', [
            'items' => $items,
        ]);
    }
}
