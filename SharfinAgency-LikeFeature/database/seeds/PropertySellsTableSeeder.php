<?php

use Illuminate\Database\Seeder;

class PropertySellsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('property_sells')->delete();
        
        \DB::table('property_sells')->insert(array (
            0 => 
            array (
                'id' => 1,
                'price' => 850000000.0,
                'created_at' => '2020-08-14 10:03:23',
                'updated_at' => '2020-08-14 10:03:23',
            ),
            1 => 
            array (
                'id' => 2,
                'price' => 1200000000.0,
                'created_at' => '2020-08-14 10:06:32',
                'updated_at' => '2020-08-14 10:06:32',
            ),
            2 => 
            array (
                'id' => 3,
                'price' => 9000000000.0,
                'created_at' => '2020-08-14 10:09:35',
                'updated_at' => '2020-08-14 10:09:35',
            ),
            3 => 
            array (
                'id' => 4,
                'price' => 1500000000.0,
                'created_at' => '2020-08-14 10:11:54',
                'updated_at' => '2020-08-14 10:11:54',
            ),
            4 => 
            array (
                'id' => 5,
                'price' => 15000000000.0,
                'created_at' => '2020-08-14 10:39:21',
                'updated_at' => '2020-08-14 10:39:21',
            ),
            5 => 
            array (
                'id' => 6,
                'price' => 8000000000.0,
                'created_at' => '2020-08-14 10:40:45',
                'updated_at' => '2020-08-14 10:40:45',
            ),
            6 => 
            array (
                'id' => 7,
                'price' => 850000000.0,
                'created_at' => '2020-08-14 10:41:57',
                'updated_at' => '2020-08-14 10:41:57',
            ),
            7 => 
            array (
                'id' => 8,
                'price' => 1200000000.0,
                'created_at' => '2020-08-14 10:43:24',
                'updated_at' => '2020-08-14 10:43:24',
            ),
            8 => 
            array (
                'id' => 9,
                'price' => 8000000000.0,
                'created_at' => '2020-08-17 07:24:51',
                'updated_at' => '2020-08-17 07:24:51',
            ),
            9 => 
            array (
                'id' => 10,
                'price' => 5200000000.0,
                'created_at' => '2020-08-17 07:26:31',
                'updated_at' => '2020-08-17 07:26:31',
            ),
            10 => 
            array (
                'id' => 11,
                'price' => 12000000000.0,
                'created_at' => '2020-08-17 07:27:59',
                'updated_at' => '2020-08-17 07:27:59',
            ),
            11 => 
            array (
                'id' => 12,
                'price' => 2400000000.0,
                'created_at' => '2020-08-17 07:29:32',
                'updated_at' => '2020-08-17 07:29:32',
            ),
            12 => 
            array (
                'id' => 13,
                'price' => 980000000.0,
                'created_at' => '2020-08-17 07:31:08',
                'updated_at' => '2020-08-17 07:31:08',
            ),
            13 => 
            array (
                'id' => 14,
                'price' => 980000000.0,
                'created_at' => '2020-08-17 08:03:42',
                'updated_at' => '2020-08-17 08:03:42',
            ),
            14 => 
            array (
                'id' => 15,
                'price' => 656000000.0,
                'created_at' => '2020-08-17 08:07:55',
                'updated_at' => '2020-08-17 08:07:55',
            ),
            15 => 
            array (
                'id' => 16,
                'price' => 7200000000.0,
                'created_at' => '2020-08-17 08:09:17',
                'updated_at' => '2020-08-17 08:09:17',
            ),
            16 => 
            array (
                'id' => 17,
                'price' => 6200000000.0,
                'created_at' => '2020-08-17 08:10:30',
                'updated_at' => '2020-08-17 08:10:30',
            ),
            17 => 
            array (
                'id' => 18,
                'price' => 5000000000.0,
                'created_at' => '2020-08-17 08:15:16',
                'updated_at' => '2020-08-17 08:15:16',
            ),
            18 => 
            array (
                'id' => 19,
                'price' => 856000000.0,
                'created_at' => '2020-08-17 08:16:31',
                'updated_at' => '2020-08-17 08:16:31',
            ),
            19 => 
            array (
                'id' => 20,
                'price' => 7200000000.0,
                'created_at' => '2020-08-17 08:18:40',
                'updated_at' => '2020-08-17 08:18:40',
            ),
            20 => 
            array (
                'id' => 21,
                'price' => 924000000.0,
                'created_at' => '2020-08-17 08:20:12',
                'updated_at' => '2020-08-17 08:20:12',
            ),
            21 => 
            array (
                'id' => 22,
                'price' => 720000000.0,
                'created_at' => '2020-08-17 08:30:18',
                'updated_at' => '2020-08-17 08:30:18',
            ),
            22 => 
            array (
                'id' => 23,
                'price' => 820000000.0,
                'created_at' => '2020-08-17 08:31:58',
                'updated_at' => '2020-08-17 08:31:58',
            ),
        ));
        
        
    }
}