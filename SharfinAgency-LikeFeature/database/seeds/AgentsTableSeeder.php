<?php

use Illuminate\Database\Seeder;

class AgentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('agents')->delete();
        
        \DB::table('agents')->insert(array (
            0 => 
            array (
                'id' => 5,
                'agency' => 'Berdua Bahagia',
                'job' => 'Manajer',
                'name' => 'Yeheskiel Kevin Octavianus',
                'birth_date' => '1999-09-29',
                'gender' => 1,
                'address' => 'Geneng, Kabupaten Ngawi, Jawa Timur 63271',
                'phone' => '089123123123',
                'picture' => 'storage/image/users/kevin.png',
                'approve' => '2020-01-02',
                'created_at' => '2020-06-28 18:22:05',
                'updated_at' => '2020-06-28 19:32:31',
            ),
            1 => 
            array (
                'id' => 16,
                'agency' => 'Semen Paron',
                'job' => 'Marketing',
                'name' => 'Erysa Nimastuti',
                'birth_date' => '1413-12-14',
                'gender' => 0,
                'address' => 'SEMEN',
                'phone' => '123412345612',
                'picture' => 'storage/image/users/erysa.png',
                'approve' => '2020-02-10',
                'created_at' => '2020-06-28 21:30:51',
                'updated_at' => '2020-06-28 21:35:14',
            ),
            2 => 
            array (
                'id' => 20,
                'agency' => 'Sharfin Agency',
                'job' => 'Manajer',
                'name' => 'Agent2',
                'birth_date' => '1997-02-27',
                'gender' => 1,
                'address' => 'Malang',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595582720.jpeg',
                'approve' => '2020-03-09',
                'created_at' => '2020-07-24 09:25:20',
                'updated_at' => '2020-07-24 09:25:20',
            ),
            3 => 
            array (
                'id' => 21,
                'agency' => 'Sharfin Agency',
                'job' => 'Sales',
                'name' => 'Agent3',
                'birth_date' => '1994-07-06',
                'gender' => 1,
                'address' => 'Malang',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595582775.jpeg',
                'approve' => '2020-04-08',
                'created_at' => '2020-07-24 09:26:15',
                'updated_at' => '2020-07-24 09:26:15',
            ),
            4 => 
            array (
                'id' => 22,
                'agency' => 'Sharfin Agency',
                'job' => 'Manajer',
                'name' => 'Agent4',
                'birth_date' => '1993-07-07',
                'gender' => 0,
                'address' => 'Malang',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595582910.jpeg',
                'approve' => '2020-05-06',
                'created_at' => '2020-07-24 09:28:30',
                'updated_at' => '2020-07-24 09:28:30',
            ),
            5 => 
            array (
                'id' => 26,
                'agency' => 'Sharfin Agency',
                'job' => 'Manajer',
                'name' => 'Agent5',
                'birth_date' => '1998-11-25',
                'gender' => 0,
                'address' => 'Malang',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595656913.png',
                'approve' => '2020-06-17',
                'created_at' => '2020-07-25 06:01:53',
                'updated_at' => '2020-07-25 06:01:53',
            ),
            6 => 
            array (
                'id' => 27,
                'agency' => 'Sharfin Agency',
                'job' => 'Manajer',
                'name' => 'Agent7',
                'birth_date' => '1999-02-09',
                'gender' => 1,
                'address' => 'Malang',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595657000.jpeg',
                'approve' => '2020-07-15',
                'created_at' => '2020-07-25 06:03:20',
                'updated_at' => '2020-07-25 06:03:20',
            ),
            7 => 
            array (
                'id' => 28,
                'agency' => 'Sharfin Agency',
                'job' => 'Manajer',
                'name' => 'Agent8',
                'birth_date' => '1996-11-06',
                'gender' => 0,
                'address' => 'Malang',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595657077.jpeg',
                'approve' => '2020-08-12',
                'created_at' => '2020-07-25 06:04:37',
                'updated_at' => '2020-07-25 06:04:37',
            ),
            8 => 
            array (
                'id' => 29,
                'agency' => 'Sharfin Agency',
                'job' => 'Manajer',
                'name' => 'Agent9',
                'birth_date' => '1999-11-24',
                'gender' => 1,
                'address' => 'Malang',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595657168.jpeg',
                'approve' => '2020-09-17',
                'created_at' => '2020-07-25 06:06:08',
                'updated_at' => '2020-07-25 06:06:08',
            ),
            9 => 
            array (
                'id' => 30,
                'agency' => 'Sharfin Agency',
                'job' => 'Manajer',
                'name' => 'Agent10',
                'birth_date' => '1997-02-27',
                'gender' => 1,
                'address' => 'Malang',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595657241.jpeg',
                'approve' => '2020-10-12',
                'created_at' => '2020-07-25 06:07:21',
                'updated_at' => '2020-07-25 06:07:21',
            ),
            10 => 
            array (
                'id' => 31,
                'agency' => 'Sharfin Agency',
                'job' => 'Manajer',
                'name' => 'Agent11',
                'birth_date' => '1990-07-11',
                'gender' => 1,
                'address' => 'Malang',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595657439.jpeg',
                'approve' => '2020-11-20',
                'created_at' => '2020-07-25 06:10:39',
                'updated_at' => '2020-07-25 06:10:39',
            ),
            11 => 
            array (
                'id' => 32,
                'agency' => 'Sharfin Agency',
                'job' => 'Manajer',
                'name' => 'Agent12',
                'birth_date' => '1999-02-02',
                'gender' => 1,
                'address' => 'Malang',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595657518.jpeg',
                'approve' => '2020-12-02',
                'created_at' => '2020-07-25 06:11:58',
                'updated_at' => '2020-07-25 06:11:58',
            ),
        ));
        
        
    }
}