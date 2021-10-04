<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerulanganController extends Controller
{
    public function index()
    {
        $jumlah = 0;

        return view('perulangan', compact('jumlah'));
    }

    public function store(Request $request){

        $this->validate($request, [
            'bilangan' => 'required|numeric',
        ]);

        $jumlah = $request->bilangan;
        $kelipatan3 = ' Pasar 20';
        $kelipatan5 = ' Belanja pangan';
        $kelipatan3dan5 = ' Pasar 20 Belanja Pangan';

        $ubahkelipatan3 = ' Belanja pangan';
        $ubahkelipatan5 = ' Pasar 20';

        return view('perulangan',
            compact(
                'jumlah',
                'kelipatan3',
                'kelipatan5',
                'kelipatan3dan5',
                'ubahkelipatan3',
                'ubahkelipatan5',
            ));
    }
}
