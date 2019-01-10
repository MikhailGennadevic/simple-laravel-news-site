<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Спорт'
        ]);

        DB::table('categories')->insert([
            'name' => 'Политика'
        ]);

        DB::table('categories')->insert([
            'name' => 'Экономика'
        ]);

        DB::table('categories')->insert([
            'name' => 'Культура'
        ]);
    }
}
