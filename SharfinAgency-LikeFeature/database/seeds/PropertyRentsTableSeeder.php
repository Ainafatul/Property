<?php

use Illuminate\Database\Seeder;

class PropertyRentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('property_rents')->delete();
        
        \DB::table('property_rents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'price' => 35000000.0,
                'minRent' => 1,
                'timeType' => 'tahun',
                'created_at' => '2020-08-14 10:13:20',
                'updated_at' => '2020-08-14 10:13:20',
            ),
            1 => 
            array (
                'id' => 2,
                'price' => 40000000.0,
                'minRent' => 1,
                'timeType' => 'tahun',
                'created_at' => '2020-08-14 10:21:24',
                'updated_at' => '2020-08-14 10:21:24',
            ),
            2 => 
            array (
                'id' => 3,
                'price' => 24000000.0,
                'minRent' => 1,
                'timeType' => 'tahun',
                'created_at' => '2020-08-14 10:23:01',
                'updated_at' => '2020-08-14 10:23:01',
            ),
            3 => 
            array (
                'id' => 4,
                'price' => 50000000.0,
                'minRent' => 1,
                'timeType' => 'tahun',
                'created_at' => '2020-08-14 10:26:00',
                'updated_at' => '2020-08-14 10:26:00',
            ),
            4 => 
            array (
                'id' => 5,
                'price' => 1200000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-08-14 10:27:59',
                'updated_at' => '2020-08-14 10:27:59',
            ),
            5 => 
            array (
                'id' => 6,
                'price' => 600000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-08-14 10:30:12',
                'updated_at' => '2020-08-14 10:30:12',
            ),
            6 => 
            array (
                'id' => 7,
                'price' => 850000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-08-14 10:32:14',
                'updated_at' => '2020-08-14 10:32:14',
            ),
            7 => 
            array (
                'id' => 8,
                'price' => 750000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-08-14 10:33:47',
                'updated_at' => '2020-08-14 10:33:47',
            ),
            8 => 
            array (
                'id' => 9,
                'price' => 28000000.0,
                'minRent' => 1,
                'timeType' => 'tahun',
                'created_at' => '2020-08-14 10:46:29',
                'updated_at' => '2020-08-14 10:46:29',
            ),
            9 => 
            array (
                'id' => 10,
                'price' => 20000000.0,
                'minRent' => 1,
                'timeType' => 'tahun',
                'created_at' => '2020-08-14 10:48:04',
                'updated_at' => '2020-08-14 10:48:04',
            ),
            10 => 
            array (
                'id' => 11,
                'price' => 45000000.0,
                'minRent' => 1,
                'timeType' => 'tahun',
                'created_at' => '2020-08-14 10:49:19',
                'updated_at' => '2020-08-14 10:49:19',
            ),
            11 => 
            array (
                'id' => 12,
                'price' => 60000000.0,
                'minRent' => 1,
                'timeType' => 'tahun',
                'created_at' => '2020-08-14 10:51:39',
                'updated_at' => '2020-08-14 10:51:39',
            ),
            12 => 
            array (
                'id' => 13,
                'price' => 1200000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-08-14 10:54:06',
                'updated_at' => '2020-08-14 10:54:06',
            ),
            13 => 
            array (
                'id' => 14,
                'price' => 2400000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-08-14 11:13:32',
                'updated_at' => '2020-08-14 11:13:32',
            ),
            14 => 
            array (
                'id' => 15,
                'price' => 1500000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-08-14 11:15:39',
                'updated_at' => '2020-08-14 11:15:39',
            ),
            15 => 
            array (
                'id' => 16,
                'price' => 850000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-08-14 11:16:57',
                'updated_at' => '2020-08-14 11:16:57',
            ),
            16 => 
            array (
                'id' => 17,
                'price' => 38000000.0,
                'minRent' => 1,
                'timeType' => 'tahun',
                'created_at' => '2020-08-17 07:38:36',
                'updated_at' => '2020-08-17 07:38:36',
            ),
            17 => 
            array (
                'id' => 18,
                'price' => 48000000.0,
                'minRent' => 1,
                'timeType' => 'tahun',
                'created_at' => '2020-08-17 07:40:21',
                'updated_at' => '2020-08-17 07:40:21',
            ),
            18 => 
            array (
                'id' => 19,
                'price' => 24000000.0,
                'minRent' => 1,
                'timeType' => 'tahun',
                'created_at' => '2020-08-17 07:43:34',
                'updated_at' => '2020-08-17 07:43:34',
            ),
            19 => 
            array (
                'id' => 20,
                'price' => 80000000.0,
                'minRent' => 1,
                'timeType' => 'tahun',
                'created_at' => '2020-08-17 07:45:05',
                'updated_at' => '2020-08-17 07:45:05',
            ),
            20 => 
            array (
                'id' => 21,
                'price' => 1200000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-08-17 07:49:21',
                'updated_at' => '2020-08-17 07:49:21',
            ),
            21 => 
            array (
                'id' => 22,
                'price' => 1500000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-08-17 07:51:35',
                'updated_at' => '2020-08-17 07:51:35',
            ),
            22 => 
            array (
                'id' => 23,
                'price' => 2800000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-08-17 07:52:55',
                'updated_at' => '2020-08-17 07:52:55',
            ),
            23 => 
            array (
                'id' => 24,
                'price' => 2800000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-08-17 07:54:07',
                'updated_at' => '2020-08-17 07:54:07',
            ),
            24 => 
            array (
                'id' => 25,
                'price' => 2800000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-08-17 07:55:20',
                'updated_at' => '2020-08-17 07:55:20',
            ),
            25 => 
            array (
                'id' => 26,
                'price' => 850000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-08-17 07:57:56',
                'updated_at' => '2020-08-17 07:57:56',
            ),
        ));
        
        
    }
}