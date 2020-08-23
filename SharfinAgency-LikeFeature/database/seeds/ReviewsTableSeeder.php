<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ainafatul',
                'job' => 'Programmer',
                'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => 'storage/image/review/1597672419.jpeg',
                'created_at' => '2020-08-17 13:53:39',
                'updated_at' => '2020-08-17 13:53:39',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Thoriq Romi',
                'job' => 'Programmer',
                'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => 'storage/image/review/1597672445.jpeg',
                'created_at' => '2020-08-17 13:54:05',
                'updated_at' => '2020-08-17 13:54:05',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Kevin',
                'job' => 'Manajer',
                'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => 'storage/image/review/1597672527.jpeg',
                'created_at' => '2020-08-17 13:55:27',
                'updated_at' => '2020-08-17 13:55:27',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Beltsa',
                'job' => 'HRD',
                'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => 'storage/image/review/1597672551.jpeg',
                'created_at' => '2020-08-17 13:55:51',
                'updated_at' => '2020-08-17 13:55:51',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Farizatul',
                'job' => 'Sales',
                'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => 'storage/image/review/1597672565.jpeg',
                'created_at' => '2020-08-17 13:56:05',
                'updated_at' => '2020-08-17 13:56:05',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Ammar',
                'job' => 'Manajer',
                'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => 'storage/image/review/1597672596.jpeg',
                'created_at' => '2020-08-17 13:56:36',
                'updated_at' => '2020-08-17 13:56:36',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Fauziah',
                'job' => 'Sales',
                'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => 'storage/image/review/1597672617.jpeg',
                'created_at' => '2020-08-17 13:56:57',
                'updated_at' => '2020-08-17 13:56:57',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Ica',
                'job' => 'Perawat',
                'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => 'storage/image/review/1597672644.jpeg',
                'created_at' => '2020-08-17 13:57:24',
                'updated_at' => '2020-08-17 13:57:24',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Diana',
                'job' => 'Ibu Rumah Tangga',
                'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => 'storage/image/review/1597672672.webp',
                'created_at' => '2020-08-17 13:57:52',
                'updated_at' => '2020-08-17 13:57:52',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Dafa',
                'job' => 'Programmer',
                'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => 'storage/image/review/1597672700.jpeg',
                'created_at' => '2020-08-17 13:58:20',
                'updated_at' => '2020-08-17 13:58:20',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Agus',
                'job' => 'Pengusaha',
                'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => 'storage/image/review/1597672725.jpeg',
                'created_at' => '2020-08-17 13:58:45',
                'updated_at' => '2020-08-17 13:58:45',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Ina',
                'job' => 'Dokter',
                'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => 'storage/image/review/1597672747.jpeg',
                'created_at' => '2020-08-17 13:59:07',
                'updated_at' => '2020-08-17 13:59:07',
            ),
        ));
        
        
    }
}