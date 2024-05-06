<?php

namespace Database\Seeders;

use App\Models\Mobil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mobils')->delete();
        Mobil::create(['merek' => 'Toyota', 'model' => 'Avanza', 'no_plat' => 'L 6028 WKW', 'tarif_per_hari' => 500000, 'disewa' => false]);
        Mobil::create(['merek' => 'Daihatsu', 'model' => 'Sigra', 'no_plat' => 'L 9018 AAJ', 'tarif_per_hari' => 200000, 'disewa' => false]);
    }
}
