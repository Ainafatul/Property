<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transactions')->delete();
        
        \DB::table('transactions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'property' => 2,
                'agent' => 5,
                'user' => NULL,
                'created_at' => '2020-08-17 13:19:08',
                'updated_at' => '2020-08-17 13:19:08',
            ),
            1 => 
            array (
                'id' => 2,
                'property' => 27,
                'agent' => 20,
                'user' => NULL,
                'created_at' => '2020-08-17 13:19:13',
                'updated_at' => '2020-08-17 13:19:13',
            ),
            2 => 
            array (
                'id' => 3,
                'property' => 41,
                'agent' => 5,
                'user' => NULL,
                'created_at' => '2020-08-17 13:19:16',
                'updated_at' => '2020-08-17 13:19:16',
            ),
            3 => 
            array (
                'id' => 4,
                'property' => 26,
                'agent' => 20,
                'user' => NULL,
                'created_at' => '2020-08-17 13:19:18',
                'updated_at' => '2020-08-17 13:19:18',
            ),
            4 => 
            array (
                'id' => 5,
                'property' => 13,
                'agent' => 16,
                'user' => NULL,
                'created_at' => '2020-08-17 13:19:24',
                'updated_at' => '2020-08-17 13:19:24',
            ),
            5 => 
            array (
                'id' => 6,
                'property' => 46,
                'agent' => 16,
                'user' => NULL,
                'created_at' => '2020-08-17 13:19:28',
                'updated_at' => '2020-08-17 13:19:28',
            ),
            6 => 
            array (
                'id' => 7,
                'property' => 15,
                'agent' => 16,
                'user' => NULL,
                'created_at' => '2020-08-17 13:19:33',
                'updated_at' => '2020-08-17 13:19:33',
            ),
            7 => 
            array (
                'id' => 8,
                'property' => 28,
                'agent' => 20,
                'user' => NULL,
                'created_at' => '2020-08-17 13:19:39',
                'updated_at' => '2020-08-17 13:19:39',
            ),
            8 => 
            array (
                'id' => 9,
                'property' => 25,
                'agent' => 20,
                'user' => NULL,
                'created_at' => '2020-08-17 13:19:41',
                'updated_at' => '2020-08-17 13:19:41',
            ),
            9 => 
            array (
                'id' => 10,
                'property' => 40,
                'agent' => 20,
                'user' => NULL,
                'created_at' => '2020-08-17 13:19:45',
                'updated_at' => '2020-08-17 13:19:45',
            ),
            10 => 
            array (
                'id' => 11,
                'property' => 38,
                'agent' => 20,
                'user' => NULL,
                'created_at' => '2020-08-17 13:19:50',
                'updated_at' => '2020-08-17 13:19:50',
            ),
            11 => 
            array (
                'id' => 12,
                'property' => 16,
                'agent' => 16,
                'user' => NULL,
                'created_at' => '2020-08-17 13:19:54',
                'updated_at' => '2020-08-17 13:19:54',
            ),
            12 => 
            array (
                'id' => 13,
                'property' => 43,
                'agent' => 5,
                'user' => NULL,
                'created_at' => '2020-08-17 13:20:00',
                'updated_at' => '2020-08-17 13:20:00',
            ),
            13 => 
            array (
                'id' => 14,
                'property' => 6,
                'agent' => 5,
                'user' => NULL,
                'created_at' => '2020-08-19 04:38:53',
                'updated_at' => '2020-08-19 04:38:53',
            ),
            14 => 
            array (
                'id' => 15,
                'property' => 19,
                'agent' => 16,
                'user' => NULL,
                'created_at' => '2020-08-19 04:38:57',
                'updated_at' => '2020-08-19 04:38:57',
            ),
            15 => 
            array (
                'id' => 16,
                'property' => 31,
                'agent' => 20,
                'user' => NULL,
                'created_at' => '2020-08-19 04:39:03',
                'updated_at' => '2020-08-19 04:39:03',
            ),
            16 => 
            array (
                'id' => 17,
                'property' => 5,
                'agent' => 5,
                'user' => NULL,
                'created_at' => '2020-08-19 04:39:12',
                'updated_at' => '2020-08-19 04:39:12',
            ),
            17 => 
            array (
                'id' => 18,
                'property' => 11,
                'agent' => 5,
                'user' => NULL,
                'created_at' => '2020-08-19 04:39:16',
                'updated_at' => '2020-08-19 04:39:16',
            ),
            18 => 
            array (
                'id' => 19,
                'property' => 10,
                'agent' => 5,
                'user' => NULL,
                'created_at' => '2020-08-19 04:39:18',
                'updated_at' => '2020-08-19 04:39:18',
            ),
            19 => 
            array (
                'id' => 20,
                'property' => 22,
                'agent' => 16,
                'user' => NULL,
                'created_at' => '2020-08-19 04:39:24',
                'updated_at' => '2020-08-19 04:39:24',
            ),
            20 => 
            array (
                'id' => 21,
                'property' => 20,
                'agent' => 16,
                'user' => NULL,
                'created_at' => '2020-08-19 04:39:27',
                'updated_at' => '2020-08-19 04:39:27',
            ),
            21 => 
            array (
                'id' => 22,
                'property' => 23,
                'agent' => 16,
                'user' => NULL,
                'created_at' => '2020-08-19 04:39:31',
                'updated_at' => '2020-08-19 04:39:31',
            ),
            22 => 
            array (
                'id' => 23,
                'property' => 34,
                'agent' => 20,
                'user' => NULL,
                'created_at' => '2020-08-19 04:39:40',
                'updated_at' => '2020-08-19 04:39:40',
            ),
            23 => 
            array (
                'id' => 24,
                'property' => 37,
                'agent' => 20,
                'user' => NULL,
                'created_at' => '2020-08-19 04:39:44',
                'updated_at' => '2020-08-19 04:39:44',
            ),
            24 => 
            array (
                'id' => 25,
                'property' => 24,
                'agent' => 16,
                'user' => NULL,
                'created_at' => '2020-08-19 04:39:51',
                'updated_at' => '2020-08-19 04:39:51',
            ),
        ));
        
        
    }
}