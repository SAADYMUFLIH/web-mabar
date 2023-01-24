<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pemains')->insert([
            'foto'=>'Muflih',
            'name'=>'Saady Muflih',
            'username'=>'Saady_',
            'keterangan'=>'Saya bermain game sejak 2018',
        ]);
    }
}
