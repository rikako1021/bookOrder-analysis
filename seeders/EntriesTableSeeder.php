<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('entries')->insert([
         'title'=>'entry01',
         'content'=>'hello',
         'created_at'=>date('Y-m-d H:i:s'),
         'Updated_at'=>date('Y-m-d H:i:s')
     ]);
     DB::table('entries')->insert([
        'title'=>'entry02',
        'content'=>'Goodd morning',
        'created_at'=>date('Y-m-d H:i:s'),
        'Updated_at'=>date('Y-m-d H:i:s')
    ]);
    DB::table('entries')->insert([
        'title'=>'entry03',
        'content'=>'Good evening',
        'created_at'=>date('Y-m-d H:i:s'),
        'Updated_at'=>date('Y-m-d H:i:s')
    ]);
    }
}
