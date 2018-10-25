<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('suppliers')->insert([
            'company_name' => 'Alibaba',
            'first_name' => 'Jack',
            'last_name' => 'Ma',
            'contact_title' => 'Mr.',
            'address_1' => 'China',
            'address_2' => 'Shezen',
            'state' => 'Quandong',
            'postal_code' => '12331',
            'country' => 'China',
            'phone' => '234834342',
            'email' => 'supplier@alibaba.com',
            'payment_method' => 'Visa',
        ]);
    }
}
