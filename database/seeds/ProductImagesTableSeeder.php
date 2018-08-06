<?php

use Illuminate\Database\Seeder;

class ProductImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1; $i<=200; $i++) {
            $counter = 1;
            for($j = 1; $j<=3; $j++) {
                factory(\App\Models\ProductImage::class)->create([
                    'product_id' => $i
                ]);
            }
        }
    }
}
