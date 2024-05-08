<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PeminjamanController extends Controller
{
    public function index()
    {
        $data = Peminjaman::with(['mobil', 'user'])->where('user_id', '=', auth()->user()->id)->get();
        return view('user.peminjaman.index', [
            'data' => $data
        ]);
    }

    public function admin()
    {
        $data = Peminjaman::with(['mobil', 'user'])->get();
        return view('admin.peminjaman.index', [
            'data' => $data
        ]);
        
    }

    public function create()
    {
        $dataMobils = Mobil::where('disewa', '=', false)->get();
        return view('user.peminjaman.create', [
            'mobils' => $dataMobils
        ]);
    }

    public function store(Request $request)
    {

        $hargaPerHari = Mobil::where('id', '=', $request->mobil_id)->first();
        // $tglMulai = Carbon::parse($request->tanggal_mulai);
        // $tglSelesai = Carbon::parse($request->tanggal_selesai);
        // $selisih = $tglSelesai->diffInDays($tglMulai);
        Peminjaman::create([
            'user_id' => auth()->user()->id,
            'mobil_id' => $request->mobil_id,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
        ]);

        $hargaPerHari->update([
            'disewa' => true
        ]);

        $hargaPerHari->save();

        return redirect('/peminjaman');
    }
}
