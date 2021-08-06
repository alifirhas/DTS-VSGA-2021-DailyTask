<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaySixController extends Controller
{
    public function index(){
        return view('day6.index');
    }

    public function view(Request $request){

        $this->validate($request, [
            'nama' => ['required', 'max:100', 'string', 'regex:/^[\pL\s\-]+$/u'],
            'alamat' => ['required', 'max:1024'],
            'tempat' => ['required', 'max:100', 'string', 'regex:/^[\pL\s\-]+$/u'],
            'jkl' => ['required', 'max:100', 'string', 'regex:/^[\pL\s\-]+$/u'],
            'usia' => ['required', 'max:100', 'integer'],
        ]);

        $data = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tempat' => $request->tempat,
            'jkl' => $request->jkl,
            'usia' => $request->usia,
        ];

        // $data = collect($data)->all();

        // return $data->nama;

        // return collect($data);
        // return response()->json($data);

        return view('day6.view', [
            'data' => $data,
        ]);
    }
}
