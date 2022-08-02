<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chenloaisp extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("loaisp")->insert([
            ['ten_hh' => 'Ao Polo','urlHinh'=>'dat.jpg'],       
        ]);
    }
}
