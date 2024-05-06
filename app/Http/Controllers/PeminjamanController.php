<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $data = Peminjaman::with(['mobil', 'user'])->where('user_id', '===', auth()->user()->id)->get();
        return view('user.peminjaman.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        $dataMobils = Mobil::where('disewa', '===', false)->get();
        return view('user.peminjaman.create', [
            'mobils' => $dataMobils
        ]);
    }

    public function store(Request $request)
    {

        $hargaPerHari = Mobil::where('id', '===', $request->mobil_id)->first();
        Peminjaman::create([
            'user_id' => auth()->user()->id,
           'mobil_id' => $request->mobil_id,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'disetujui' => false,
            'biaya_sewa' => $hargaPerHari
        ]);

        return redirect('/peminjaman');
    }
}
