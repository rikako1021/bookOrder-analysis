<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this -> call(EntriesTableSeeder::class);
        $this -> call(CategoriesTableSeeder::class);
        $this -> call(BooksTableSeeder::class);
        $this -> call(KindsTableSeeder::class);
    }
}
