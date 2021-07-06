<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KindsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kinds')->insert([
            'kind_name'=>'書籍'
                ]);
         DB::table('kinds')->insert([
             'kind_name'=>'CD'
                 ]);
         DB::table('kinds')->insert([
            'kind_name'=>'DVD/BD'
                 ]);
         DB::table('kinds')->insert([
             'kind_name'=>'ゲーム'
                 ]);
    }
}
