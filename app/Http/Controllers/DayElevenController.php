<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Printer;
use Illuminate\Http\Request;

class DayElevenController extends Controller
{
    public function index(){

        $colors = Color::get();
        $printers = Printer::with('color')->orderBy('created_at', 'desc')->paginate(10);
        $merekList = Printer::select('merek')->orderBy('merek')->get();
        
        return view('day11.index', [
            'colors' => $colors,
            'printers' => $printers,
            'merekList' => $merekList,
        ]);
    }

    public function store(Request $request){

        $this->validate($request, [
            
            'merek' => ['required','max:100','string'],
            'warna' => ['required','digits_between:1,3'],
            'jumlah' => ['required','digits_between:1,3'],
            
        ]);

        $insert = Printer::create([
            'merek' => $request->merek,
            'color_id' => $request->warna,
            'jumlah' => $request->jumlah,
        ]);

        if (!$insert) {
            return back()->with('error', 'Ada yang salah, entah apa');
        }

        return back()->with('success', 'Berhasil ditambahkan');

    }

    public function update(Printer $printer,Request $request){

        $this->validate($request, [
            
            'merek' => ['required','max:100','string'],
            'warna' => ['required','digits_between:1,3'],
            'jumlah' => ['required','digits_between:1,3'],
            
        ]);

        $update = $printer->update([
            'merek' => $request->merek,
            'color_id' => $request->warna,
            'jumlah' => $request->jumlah,
        ]);

        if (!$update) {
            return back()->with('error', 'Ada yang salah, entah apa');
        }

        return back()->with('success', 'Berhasil diperbarui');

    }

    public function destroy(Printer $printer){

        $delete = $printer->delete();

        if (!$delete) {
            return back()->with('error', 'Ada yang salah, entah apa');
        }

        return back()->with('success', 'Berhasil dihapus');
    }
}
