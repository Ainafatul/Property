<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('accounts')->delete();
        
        \DB::table('accounts')->insert(array (
            0 => 
            array (
                'id' => 5,
                'email' => 'KevinOctavianus@agent.com',
                'role' => 'Agent',
                'email_verified_at' => NULL,
                'password' => '$2y$10$91hrKWMmqMl6Ft4Y8VWNZ.GgdGmwLF4/k/nNmd5vx9LLKf/v6rByi',
                'remember_token' => NULL,
                'created_at' => '2020-06-28 18:22:05',
                'updated_at' => '2020-06-28 18:22:05',
            ),
            1 => 
            array (
                'id' => 7,
                'email' => 'ainafatul@admin.com',
                'role' => 'Admin',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UCnbDXCSyCOhmI6HtJpFFuRJRod9EYs3ftlK6HwpIOp6V/jqsR9w6',
                'remember_token' => NULL,
                'created_at' => '2020-06-28 18:25:07',
                'updated_at' => '2020-06-28 18:25:07',
            ),
            2 => 
            array (
                'id' => 16,
                'email' => 'Erysa@agent.com',
                'role' => 'Agent',
                'email_verified_at' => NULL,
                'password' => '$2y$10$e2/LuuuUH2CBSKspeE7vGOCtbsJu.GoG.wYC2Z5uBzyeS3rmKh9Um',
                'remember_token' => NULL,
                'created_at' => '2020-06-28 21:30:51',
                'updated_at' => '2020-06-28 21:30:51',
            ),
            3 => 
            array (
                'id' => 17,
                'email' => 'ainafatul20@gmail.com',
                'role' => 'User',
                'email_verified_at' => NULL,
                'password' => '$2y$10$K1yBiEd54HliNLdaytkjGuc7at178TNYjg0RuNXc0JtJI1HbedlMa',
                'remember_token' => NULL,
                'created_at' => '2020-07-17 09:41:17',
                'updated_at' => '2020-07-17 09:41:17',
            ),
            4 => 
            array (
                'id' => 18,
                'email' => 'thoriqromi@admin.com',
                'role' => 'User',
                'email_verified_at' => NULL,
                'password' => '$2y$10$XwXM1DBS5QJHD7RLYLmLi.M.jHpFS4LAIFd81DPHFpWxByiEVZhIq',
                'remember_token' => NULL,
                'created_at' => '2020-07-18 05:53:12',
                'updated_at' => '2020-07-18 05:53:12',
            ),
            5 => 
            array (
                'id' => 19,
                'email' => 'caca@gmail.com',
                'role' => 'User',
                'email_verified_at' => NULL,
                'password' => '$2y$10$eJLURuz4uJpek3vYOjFTJ.YmKrZ8uulnHD0BwmqHUsAro/N4e/n86',
                'remember_token' => NULL,
                'created_at' => '2020-07-18 07:20:47',
                'updated_at' => '2020-07-18 07:20:47',
            ),
            6 => 
            array (
                'id' => 20,
                'email' => 'agent2@gmail.com',
                'role' => 'Agent',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HgqVU7qN3Y.rqq4OzuG3huVL8mYnPeZpy3iislMWRk8RRHVZ2Wk6W',
                'remember_token' => NULL,
                'created_at' => '2020-07-24 09:25:20',
                'updated_at' => '2020-07-24 09:25:20',
            ),
            7 => 
            array (
                'id' => 21,
                'email' => 'agent3@gmail.com',
                'role' => 'Agent',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8N1ClNWLgN80tY8Fm03PaOoz5i2M1GNf5vYgDfw2o7LTPotQzON0K',
                'remember_token' => NULL,
                'created_at' => '2020-07-24 09:26:15',
                'updated_at' => '2020-07-24 09:26:15',
            ),
            8 => 
            array (
                'id' => 22,
                'email' => 'agent4@gmail.com',
                'role' => 'Agent',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SKiwts97EVYyitzZQt/qW.t7gJRMTqvBzA7pTegk2.ebh341kgcPa',
                'remember_token' => NULL,
                'created_at' => '2020-07-24 09:28:30',
                'updated_at' => '2020-07-24 09:28:30',
            ),
            9 => 
            array (
                'id' => 23,
                'email' => 'user1@gmail.com',
                'role' => 'User',
                'email_verified_at' => NULL,
                'password' => '$2y$10$epFs1NdhUoyjynSMcC22rubbKqF9HWfqiEcJuVy3cDfa3aztpX09C',
                'remember_token' => NULL,
                'created_at' => '2020-07-24 10:47:15',
                'updated_at' => '2020-07-24 10:47:15',
            ),
            10 => 
            array (
                'id' => 24,
                'email' => 'user2@gmail.com',
                'role' => 'User',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mhov7gD9zk30MJN1XkczOOHM2s4ItyChrEyzsfTOVFiYwwDDaMv0W',
                'remember_token' => NULL,
                'created_at' => '2020-07-24 10:48:18',
                'updated_at' => '2020-07-24 10:48:18',
            ),
            11 => 
            array (
                'id' => 25,
                'email' => 'user3@gmail.com',
                'role' => 'User',
                'email_verified_at' => NULL,
                'password' => '$2y$10$aJPosltRUXLxceRZ9AGgruCyOFuT4IEkAAx.TzxKG/ZVCpuGDM1LG',
                'remember_token' => NULL,
                'created_at' => '2020-07-24 10:49:15',
                'updated_at' => '2020-07-24 10:49:15',
            ),
            12 => 
            array (
                'id' => 26,
                'email' => 'agent5@gmail.com',
                'role' => 'Agent',
                'email_verified_at' => NULL,
                'password' => '$2y$10$u5MAzcDuBGjkq/NezgQNtuLuICpfHWwu3EzKBZtswuChKuU2Ts3Ku',
                'remember_token' => NULL,
                'created_at' => '2020-07-25 06:01:53',
                'updated_at' => '2020-07-25 06:01:53',
            ),
            13 => 
            array (
                'id' => 27,
                'email' => 'agent7@gmail.com',
                'role' => 'Agent',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xlt3HU5Kdm3ZKw5dfVTTUu6N.PWjIRn87N1Heaz1CXfnUgW.I8GsG',
                'remember_token' => NULL,
                'created_at' => '2020-07-25 06:03:19',
                'updated_at' => '2020-07-25 06:03:19',
            ),
            14 => 
            array (
                'id' => 28,
                'email' => 'agent8@gmail.com',
                'role' => 'Agent',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YoDqPRctnhde9F8W.OaoROU/okhpnp.hFeeKXYspaeyQdZCN5cytq',
                'remember_token' => NULL,
                'created_at' => '2020-07-25 06:04:37',
                'updated_at' => '2020-07-25 06:04:37',
            ),
            15 => 
            array (
                'id' => 29,
                'email' => 'agent9@gmail.com',
                'role' => 'Agent',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jb2WPcMIfCjJaSfaqMuH0O7uvoued.pzek5sr1tYHGUGTRiKLEZRu',
                'remember_token' => NULL,
                'created_at' => '2020-07-25 06:06:08',
                'updated_at' => '2020-07-25 06:06:08',
            ),
            16 => 
            array (
                'id' => 30,
                'email' => 'agent10@gmail.com',
                'role' => 'Agent',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YpSdMvtQl.ZLsGn4aGtp/e/ofdAVPT0ec.mGdc75jeXXrLkiVPISy',
                'remember_token' => NULL,
                'created_at' => '2020-07-25 06:07:21',
                'updated_at' => '2020-07-25 06:07:21',
            ),
            17 => 
            array (
                'id' => 31,
                'email' => 'agent11@gmail.com',
                'role' => 'Agent',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BeZ8RA.kSNLHDM6BNJpBpen6fCLDGbVF956zf7zFxqjeNUxKfvFWu',
                'remember_token' => NULL,
                'created_at' => '2020-07-25 06:10:39',
                'updated_at' => '2020-07-25 06:10:39',
            ),
            18 => 
            array (
                'id' => 32,
                'email' => 'agent12@gmail.com',
                'role' => 'Agent',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YA9KCF1qIoqDPhi3lRStpu6kwGl.8a1YJvRF6fUenGGpOkGQy5kF.',
                'remember_token' => NULL,
                'created_at' => '2020-07-25 06:11:58',
                'updated_at' => '2020-07-25 06:11:58',
            ),
            19 => 
            array (
                'id' => 33,
                'email' => 'thoriqromi@gmail.com',
                'role' => 'User',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HoFAy7ICOYDsBF8JB9X97uCJDa.LkA5jXKyIK9P0rZPQQ/DtthvgS',
                'remember_token' => NULL,
                'created_at' => '2020-08-17 09:19:52',
                'updated_at' => '2020-08-17 09:19:52',
            ),
        ));
        
        
    }
}