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
        //
        DB::table('categories')->insert([
            ['name' => 'clothing', 'parent_id' => null],
            ['name' => "men's clothing", 'parent_id' => 1],
            ['name' => "women's clothing", 'parent_id' => 1],
            ['name' => 'accessories', 'parent_id' => 1],
            ['name' => 'bag', 'parent_id' => 1]
        ]);
    }
}
