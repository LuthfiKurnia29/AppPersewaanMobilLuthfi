<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index(){
        $data = Mobil::all();
        return view('mobil.index', [
            'data' => $data
        ]);
    }

    public function create(){
        return view('mobil.create');
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'merek' => 'required',
            'model' => 'required',
            'no_plat' => 'required | unique',
            'tarif_per_hari' => 'required',
            'disewa' => 'required'
        ]);

        Mobil::create($validatedData);
        return redirect('/mobil');
    }
}
