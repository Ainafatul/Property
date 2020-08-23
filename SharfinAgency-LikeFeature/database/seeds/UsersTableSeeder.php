<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 17,
                'name' => 'Ainafatul Nur Muslikah',
                'birth_date' => '1996-12-30',
                'gender' => 0,
                'address' => 'Malang',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1594978877.jpeg',
                'created_at' => '2020-07-17 09:41:17',
                'updated_at' => '2020-07-17 09:41:17',
            ),
            1 => 
            array (
                'id' => 19,
                'name' => 'Caca',
                'birth_date' => '1995-01-31',
                'gender' => 0,
                'address' => 'Gwneng',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595056847.jpeg',
                'created_at' => '2020-07-18 07:20:47',
                'updated_at' => '2020-07-18 07:20:47',
            ),
            2 => 
            array (
                'id' => 23,
                'name' => 'User1',
                'birth_date' => '1995-01-31',
                'gender' => 1,
                'address' => 'Malang',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595587635.jpeg',
                'created_at' => '2020-07-24 10:47:15',
                'updated_at' => '2020-07-24 10:47:15',
            ),
            3 => 
            array (
                'id' => 24,
                'name' => 'user2',
                'birth_date' => '1996-11-14',
                'gender' => 1,
                'address' => 'Malang',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595587698.jpeg',
                'created_at' => '2020-07-24 10:48:18',
                'updated_at' => '2020-07-24 10:48:18',
            ),
            4 => 
            array (
                'id' => 25,
                'name' => 'User3',
                'birth_date' => '1997-02-04',
                'gender' => 1,
                'address' => 'Malang',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595587755.jpeg',
                'created_at' => '2020-07-24 10:49:15',
                'updated_at' => '2020-07-24 10:49:15',
            ),
            5 => 
            array (
                'id' => 33,
                'name' => 'Thoriq Romi',
                'birth_date' => '1999-07-07',
                'gender' => 1,
                'address' => 'Malang',
                'phone' => '085712312312',
                'picture' => 'storage/image/users/1597655992.webp',
                'created_at' => '2020-08-17 09:19:52',
                'updated_at' => '2020-08-17 09:19:52',
            ),
        ));
        
        
    }
}