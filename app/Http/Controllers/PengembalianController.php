<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index()
    {
        $data = Pengembalian::with(['user'])->where('user_id', '=', auth()->user()->id)->get();
        return view('user.pengembalian.index', [
            'data' => $data
        ]);
    }

    public function admin()
    {
        $data = Pengembalian::with(['user'])->get();
        return view('admin.pengembalian.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('user.pengembalian.create');
    }

    public function store(Request $request)
    {

        $mobil = Mobil::where('no_plat', '=', $request->no_plat)->first();
        $existsDataPeminjaman = Peminjaman::with(['mobil', 'user'])->where('mobil_id', '=', $mobil->id)->first();
        $tglMulai = Carbon::parse($existsDataPeminjaman->tanggal_mulai);
        $tglSelesai = Carbon::parse($existsDataPeminjaman->tanggal_selesai);
        $selisih = $tglSelesai->diffInDays($tglMulai);
        if($existsDataPeminjaman != null)
        {
            Pengembalian::create([
                'no_plat' => $request->no_plat,
                'user_id' => auth()->user()->id,
                'total_biaya' => $mobil->tarif_per_hari * $selisih
            ]);
            $mobil->update([
                'disewa' => false
            ]);
            $mobil->save();
        }else{
            return "Error";
        }

        return redirect('/pengembalian');
    }
}
