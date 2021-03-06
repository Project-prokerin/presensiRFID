<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'username' => 'admin',
            'idtelegram' => '794749920',
            'nama' => 'dio selvinus silalebit',
            'foto' => 'photos/default/no-avatar.png',
            'password' => Hash::make('admin')
        ]);
    }
}
