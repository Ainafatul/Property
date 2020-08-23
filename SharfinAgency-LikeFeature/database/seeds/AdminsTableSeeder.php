<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 6,
                'name' => 'Thoriq Romi',
                'picture' => 'storage/image/users/wiratama.jpg',
                'created_at' => '2020-06-28 18:24:30',
                'updated_at' => '2020-06-28 18:24:30',
            ),
            1 => 
            array (
                'id' => 7,
                'name' => 'Ainafatul Nur Muslikah',
                'picture' => 'storage/image/users/nafa.png',
                'created_at' => '2020-06-28 18:25:07',
                'updated_at' => '2020-06-28 18:25:07',
            ),
        ));
        
        
    }
}