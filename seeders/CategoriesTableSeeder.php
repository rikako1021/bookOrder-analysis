<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Categories')->insert([
            'Kind_id'=>1,
            'category_name'=>'小説'
                ]);
         DB::table('Categories')->insert([
            'Kind_id'=>1,
             'category_name'=>'実用書'
                 ]);
         DB::table('Categories')->insert([
            'Kind_id'=>1,
            'category_name'=>'絵本・児童書'
                 ]);
         DB::table('Categories')->insert([
            'Kind_id'=>1,
             'category_name'=>'参考書・教科書'
                 ]);
         DB::table('Categories')->insert([
            'Kind_id'=>1,
              'category_name'=>'コミック・雑誌'
                ]); 

         DB::table('Categories')->insert([
            'Kind_id'=>2,
            'category_name'=>'J-POP'
                ]);
         DB::table('Categories')->insert([
            'Kind_id'=>2,
             'category_name'=>'アニメ'
                 ]);
         DB::table('Categories')->insert([
            'Kind_id'=>2,
            'category_name'=>'洋楽'
                 ]);
         DB::table('Categories')->insert([
            'Kind_id'=>2,
             'category_name'=>'クラシック'
                 ]);
         DB::table('Categories')->insert([
            'Kind_id'=>2,
              'category_name'=>'ジャズ'
                ]); 

         DB::table('Categories')->insert([
            'Kind_id'=>3,
            'category_name'=>'アニメ'
                ]);
         DB::table('Categories')->insert([
            'Kind_id'=>3,
             'category_name'=>'映画'
                 ]);
         DB::table('Categories')->insert([
            'Kind_id'=>3,
             'category_name'=>'ドラマ'
              ]);
         DB::table('Categories')->insert([
            'Kind_id'=>3,
              'category_name'=>'お笑い'
              ]); 

         DB::table('Categories')->insert([
                'Kind_id'=>4,
                'category_name'=>'アクションゲーム'
                    ]);
         DB::table('Categories')->insert([
                'Kind_id'=>4,
                 'category_name'=>'シューティングゲーム'
                     ]);
         DB::table('Categories')->insert([
                'Kind_id'=>4,
                'category_name'=>'アドベンチャーゲーム'
                     ]);
         DB::table('Categories')->insert([
                'Kind_id'=>4,
                 'category_name'=>'RPG'
                     ]);

  

    }
}
