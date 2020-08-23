<?php

use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('likes')->delete();
        
        \DB::table('likes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'property' => 1,
                'user' => 17,
                'created_at' => '2020-08-17 10:11:09',
                'updated_at' => '2020-08-17 10:11:09',
            ),
            1 => 
            array (
                'id' => 2,
                'property' => 13,
                'user' => 17,
                'created_at' => '2020-08-17 10:11:12',
                'updated_at' => '2020-08-17 10:11:12',
            ),
            2 => 
            array (
                'id' => 3,
                'property' => 15,
                'user' => 17,
                'created_at' => '2020-08-17 10:11:15',
                'updated_at' => '2020-08-17 10:11:15',
            ),
            3 => 
            array (
                'id' => 4,
                'property' => 5,
                'user' => 17,
                'created_at' => '2020-08-17 10:11:38',
                'updated_at' => '2020-08-17 10:11:38',
            ),
            4 => 
            array (
                'id' => 5,
                'property' => 12,
                'user' => 17,
                'created_at' => '2020-08-17 10:11:48',
                'updated_at' => '2020-08-17 10:11:48',
            ),
            5 => 
            array (
                'id' => 6,
                'property' => 19,
                'user' => 17,
                'created_at' => '2020-08-17 10:11:51',
                'updated_at' => '2020-08-17 10:11:51',
            ),
            6 => 
            array (
                'id' => 7,
                'property' => 23,
                'user' => 17,
                'created_at' => '2020-08-17 10:11:56',
                'updated_at' => '2020-08-17 10:11:56',
            ),
            7 => 
            array (
                'id' => 8,
                'property' => 33,
                'user' => 17,
                'created_at' => '2020-08-17 10:18:49',
                'updated_at' => '2020-08-17 10:18:49',
            ),
            8 => 
            array (
                'id' => 9,
                'property' => 40,
                'user' => 17,
                'created_at' => '2020-08-17 10:19:03',
                'updated_at' => '2020-08-17 10:19:03',
            ),
            9 => 
            array (
                'id' => 10,
                'property' => 29,
                'user' => 17,
                'created_at' => '2020-08-17 10:20:39',
                'updated_at' => '2020-08-17 10:20:39',
            ),
            10 => 
            array (
                'id' => 11,
                'property' => 1,
                'user' => 19,
                'created_at' => '2020-08-17 10:29:09',
                'updated_at' => '2020-08-17 10:29:09',
            ),
            11 => 
            array (
                'id' => 12,
                'property' => 14,
                'user' => 19,
                'created_at' => '2020-08-17 10:29:14',
                'updated_at' => '2020-08-17 10:29:14',
            ),
            12 => 
            array (
                'id' => 13,
                'property' => 29,
                'user' => 19,
                'created_at' => '2020-08-17 10:29:18',
                'updated_at' => '2020-08-17 10:29:18',
            ),
            13 => 
            array (
                'id' => 14,
                'property' => 5,
                'user' => 19,
                'created_at' => '2020-08-17 10:29:22',
                'updated_at' => '2020-08-17 10:29:22',
            ),
            14 => 
            array (
                'id' => 15,
                'property' => 21,
                'user' => 19,
                'created_at' => '2020-08-17 10:29:28',
                'updated_at' => '2020-08-17 10:29:28',
            ),
            15 => 
            array (
                'id' => 16,
                'property' => 37,
                'user' => 19,
                'created_at' => '2020-08-17 10:29:34',
                'updated_at' => '2020-08-17 10:29:34',
            ),
            16 => 
            array (
                'id' => 17,
                'property' => 1,
                'user' => 23,
                'created_at' => '2020-08-17 10:30:47',
                'updated_at' => '2020-08-17 10:30:47',
            ),
            17 => 
            array (
                'id' => 18,
                'property' => 15,
                'user' => 23,
                'created_at' => '2020-08-17 10:30:50',
                'updated_at' => '2020-08-17 10:30:50',
            ),
            18 => 
            array (
                'id' => 19,
                'property' => 38,
                'user' => 23,
                'created_at' => '2020-08-17 10:30:55',
                'updated_at' => '2020-08-17 10:30:55',
            ),
            19 => 
            array (
                'id' => 20,
                'property' => 9,
                'user' => 23,
                'created_at' => '2020-08-17 10:31:05',
                'updated_at' => '2020-08-17 10:31:05',
            ),
            20 => 
            array (
                'id' => 21,
                'property' => 18,
                'user' => 23,
                'created_at' => '2020-08-17 10:31:08',
                'updated_at' => '2020-08-17 10:31:08',
            ),
            21 => 
            array (
                'id' => 22,
                'property' => 33,
                'user' => 23,
                'created_at' => '2020-08-17 10:31:13',
                'updated_at' => '2020-08-17 10:31:13',
            ),
            22 => 
            array (
                'id' => 23,
                'property' => 1,
                'user' => 24,
                'created_at' => '2020-08-17 11:28:30',
                'updated_at' => '2020-08-17 11:28:30',
            ),
            23 => 
            array (
                'id' => 24,
                'property' => 15,
                'user' => 24,
                'created_at' => '2020-08-17 11:28:34',
                'updated_at' => '2020-08-17 11:28:34',
            ),
            24 => 
            array (
                'id' => 25,
                'property' => 27,
                'user' => 24,
                'created_at' => '2020-08-17 11:28:38',
                'updated_at' => '2020-08-17 11:28:38',
            ),
            25 => 
            array (
                'id' => 26,
                'property' => 5,
                'user' => 24,
                'created_at' => '2020-08-17 11:28:43',
                'updated_at' => '2020-08-17 11:28:43',
            ),
            26 => 
            array (
                'id' => 27,
                'property' => 18,
                'user' => 24,
                'created_at' => '2020-08-17 11:28:48',
                'updated_at' => '2020-08-17 11:28:48',
            ),
            27 => 
            array (
                'id' => 28,
                'property' => 33,
                'user' => 24,
                'created_at' => '2020-08-17 11:28:52',
                'updated_at' => '2020-08-17 11:28:52',
            ),
            28 => 
            array (
                'id' => 29,
                'property' => 1,
                'user' => 25,
                'created_at' => '2020-08-17 11:48:10',
                'updated_at' => '2020-08-17 11:48:10',
            ),
            29 => 
            array (
                'id' => 30,
                'property' => 40,
                'user' => 25,
                'created_at' => '2020-08-17 11:48:29',
                'updated_at' => '2020-08-17 11:48:29',
            ),
            30 => 
            array (
                'id' => 31,
                'property' => 5,
                'user' => 25,
                'created_at' => '2020-08-17 11:48:45',
                'updated_at' => '2020-08-17 11:48:45',
            ),
            31 => 
            array (
                'id' => 32,
                'property' => 1,
                'user' => 33,
                'created_at' => '2020-08-17 11:58:32',
                'updated_at' => '2020-08-17 11:58:32',
            ),
            32 => 
            array (
                'id' => 33,
                'property' => 14,
                'user' => 33,
                'created_at' => '2020-08-17 11:58:38',
                'updated_at' => '2020-08-17 11:58:38',
            ),
            33 => 
            array (
                'id' => 34,
                'property' => 39,
                'user' => 33,
                'created_at' => '2020-08-17 11:58:44',
                'updated_at' => '2020-08-17 11:58:44',
            ),
            34 => 
            array (
                'id' => 35,
                'property' => 5,
                'user' => 33,
                'created_at' => '2020-08-17 12:01:21',
                'updated_at' => '2020-08-17 12:01:21',
            ),
            35 => 
            array (
                'id' => 36,
                'property' => 11,
                'user' => 33,
                'created_at' => '2020-08-17 12:01:25',
                'updated_at' => '2020-08-17 12:01:25',
            ),
            36 => 
            array (
                'id' => 37,
                'property' => 33,
                'user' => 33,
                'created_at' => '2020-08-17 12:01:31',
                'updated_at' => '2020-08-17 12:01:31',
            ),
        ));
        
        
    }
}