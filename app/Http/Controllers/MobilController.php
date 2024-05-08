<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index(){
        $data = Mobil::all();
        return view('admin.mobil.index', [
            'data' => $data
        ]);
    }

    public function create(){
        return view('admin.mobil.create');
    }

    public function store(Request $request){
        
        Mobil::create([
            'merek' => $request->merek,
            'model' => $request->model,
            'no_plat' => $request->no_plat,
            'tarif_per_hari' => $request->tarif_per_hari,
            'disewa' => false
        ]);
        return redirect('/mobil');
    }
}
