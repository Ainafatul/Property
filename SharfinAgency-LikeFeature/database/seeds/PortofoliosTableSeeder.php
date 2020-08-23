<?php

use Illuminate\Database\Seeder;

class PortofoliosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portofolios')->delete();
        
        \DB::table('portofolios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sold' => 999.0,
                'leased' => 888.0,
                'consult' => 555.0,
                'agent' => 322.0,
                'created_at' => '2020-07-09 07:36:58',
                'updated_at' => '2020-07-09 07:37:18',
            ),
        ));
        
        
    }
}