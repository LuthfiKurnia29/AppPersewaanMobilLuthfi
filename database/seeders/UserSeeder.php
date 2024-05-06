<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();
        User::create(['nama' => 'admin', 'email' => 'admin@gmail.com', 'password' => 'admin123', 'alamat' => 'Surabaya', 'no_telepon' => '08192819283', 'no_SIM' => 87719200, 'role' => 'admin']);
        User::create(['nama' => 'cust', 'email' => 'cust@gmail.com', 'password' => 'cust1234', 'alamat' => 'Surabaya', 'no_telepon' => '081029398880', 'no_SIM' => 11013849, 'role' => 'user']);
    }
}
