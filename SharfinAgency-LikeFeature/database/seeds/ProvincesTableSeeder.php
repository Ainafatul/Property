<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Aceh',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Sumatera Utara',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Sumatera Barat',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Riau',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Jambi',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Sumatera Selatan',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Bengkulu',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Lampung',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Kepulauan Bangka Belitung',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Kepulauan Riau',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Dki Jakarta',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Jawa Barat',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Jawa Tengah',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Di Yogyakarta',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Jawa Timur',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Banten',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Bali',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Nusa Tenggara Barat',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Nusa Tenggara Timur',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Kalimantan Barat',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Kalimantan Tengah',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Kalimantan Selatan',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Kalimantan Timur',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Kalimantan Utara',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Sulawesi Utara',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Sulawesi Tengah',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Sulawesi Selatan',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Sulawesi Tenggara',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Gorontalo',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Sulawesi Barat',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Maluku',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Maluku Utara',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Papua Barat',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Papua',
            ),
        ));
        
        
    }
}