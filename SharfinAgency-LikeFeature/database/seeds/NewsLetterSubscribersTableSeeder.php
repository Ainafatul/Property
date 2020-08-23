<?php

use Illuminate\Database\Seeder;

class NewsLetterSubscribersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('news_letter_subscribers')->delete();
        
        \DB::table('news_letter_subscribers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'ainafatuldghever@yahoo.id',
                'created_at' => '2020-08-14 08:15:54',
                'updated_at' => '2020-08-14 08:15:54',
            ),
        ));
        
        
    }
}