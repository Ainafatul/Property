<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'province_id' => 1,
                'name' => 'Kab. Simeulue',
            ),
            1 => 
            array (
                'id' => 2,
                'province_id' => 1,
                'name' => 'Kab. Aceh Singkil',
            ),
            2 => 
            array (
                'id' => 3,
                'province_id' => 1,
                'name' => 'Kab. Aceh Selatan',
            ),
            3 => 
            array (
                'id' => 4,
                'province_id' => 1,
                'name' => 'Kab. Aceh Tenggara',
            ),
            4 => 
            array (
                'id' => 5,
                'province_id' => 1,
                'name' => 'Kab. Aceh Timur',
            ),
            5 => 
            array (
                'id' => 6,
                'province_id' => 1,
                'name' => 'Kab. Aceh Tengah',
            ),
            6 => 
            array (
                'id' => 7,
                'province_id' => 1,
                'name' => 'Kab. Aceh Barat',
            ),
            7 => 
            array (
                'id' => 8,
                'province_id' => 1,
                'name' => 'Kab. Aceh Besar',
            ),
            8 => 
            array (
                'id' => 9,
                'province_id' => 1,
                'name' => 'Kab. Pidie',
            ),
            9 => 
            array (
                'id' => 10,
                'province_id' => 1,
                'name' => 'Kab. Bireuen',
            ),
            10 => 
            array (
                'id' => 11,
                'province_id' => 1,
                'name' => 'Kab. Aceh Utara',
            ),
            11 => 
            array (
                'id' => 12,
                'province_id' => 1,
                'name' => 'Kab. Aceh Barat Daya',
            ),
            12 => 
            array (
                'id' => 13,
                'province_id' => 1,
                'name' => 'Kab. Gayo Lues',
            ),
            13 => 
            array (
                'id' => 14,
                'province_id' => 1,
                'name' => 'Kab. Aceh Tamiang',
            ),
            14 => 
            array (
                'id' => 15,
                'province_id' => 1,
                'name' => 'Kab. Nagan Raya',
            ),
            15 => 
            array (
                'id' => 16,
                'province_id' => 1,
                'name' => 'Kab. Aceh Jaya',
            ),
            16 => 
            array (
                'id' => 17,
                'province_id' => 1,
                'name' => 'Kab. Bener Meriah',
            ),
            17 => 
            array (
                'id' => 18,
                'province_id' => 1,
                'name' => 'Kab. Pidie Jaya',
            ),
            18 => 
            array (
                'id' => 19,
                'province_id' => 1,
                'name' => 'Kota Banda Aceh',
            ),
            19 => 
            array (
                'id' => 20,
                'province_id' => 1,
                'name' => 'Kota Sabang',
            ),
            20 => 
            array (
                'id' => 21,
                'province_id' => 1,
                'name' => 'Kota Langsa',
            ),
            21 => 
            array (
                'id' => 22,
                'province_id' => 1,
                'name' => 'Kota Lhokseumawe',
            ),
            22 => 
            array (
                'id' => 23,
                'province_id' => 1,
                'name' => 'Kota Subulussalam',
            ),
            23 => 
            array (
                'id' => 24,
                'province_id' => 2,
                'name' => 'Kab. Nias',
            ),
            24 => 
            array (
                'id' => 25,
                'province_id' => 2,
                'name' => 'Kab. Mandailing Natal',
            ),
            25 => 
            array (
                'id' => 26,
                'province_id' => 2,
                'name' => 'Kab. Tapanuli Selatan',
            ),
            26 => 
            array (
                'id' => 27,
                'province_id' => 2,
                'name' => 'Kab. Tapanuli Tengah',
            ),
            27 => 
            array (
                'id' => 28,
                'province_id' => 2,
                'name' => 'Kab. Tapanuli Utara',
            ),
            28 => 
            array (
                'id' => 29,
                'province_id' => 2,
                'name' => 'Kab. Toba Samosir',
            ),
            29 => 
            array (
                'id' => 30,
                'province_id' => 2,
                'name' => 'Kab. Labuhan Batu',
            ),
            30 => 
            array (
                'id' => 31,
                'province_id' => 2,
                'name' => 'Kab. Asahan',
            ),
            31 => 
            array (
                'id' => 32,
                'province_id' => 2,
                'name' => 'Kab. Simalungun',
            ),
            32 => 
            array (
                'id' => 33,
                'province_id' => 2,
                'name' => 'Kab. Dairi',
            ),
            33 => 
            array (
                'id' => 34,
                'province_id' => 2,
                'name' => 'Kab. Karo',
            ),
            34 => 
            array (
                'id' => 35,
                'province_id' => 2,
                'name' => 'Kab. Deli Serdang',
            ),
            35 => 
            array (
                'id' => 36,
                'province_id' => 2,
                'name' => 'Kab. Langkat',
            ),
            36 => 
            array (
                'id' => 37,
                'province_id' => 2,
                'name' => 'Kab. Nias Selatan',
            ),
            37 => 
            array (
                'id' => 38,
                'province_id' => 2,
                'name' => 'Kab. Humbang Hasundutan',
            ),
            38 => 
            array (
                'id' => 39,
                'province_id' => 2,
                'name' => 'Kab. Pakpak Bharat',
            ),
            39 => 
            array (
                'id' => 40,
                'province_id' => 2,
                'name' => 'Kab. Samosir',
            ),
            40 => 
            array (
                'id' => 41,
                'province_id' => 2,
                'name' => 'Kab. Serdang Bedagai',
            ),
            41 => 
            array (
                'id' => 42,
                'province_id' => 2,
                'name' => 'Kab. Batu Bara',
            ),
            42 => 
            array (
                'id' => 43,
                'province_id' => 2,
                'name' => 'Kab. Padang Lawas Utara',
            ),
            43 => 
            array (
                'id' => 44,
                'province_id' => 2,
                'name' => 'Kab. Padang Lawas',
            ),
            44 => 
            array (
                'id' => 45,
                'province_id' => 2,
                'name' => 'Kab. Labuhan Batu Selatan',
            ),
            45 => 
            array (
                'id' => 46,
                'province_id' => 2,
                'name' => 'Kab. Labuhan Batu Utara',
            ),
            46 => 
            array (
                'id' => 47,
                'province_id' => 2,
                'name' => 'Kab. Nias Utara',
            ),
            47 => 
            array (
                'id' => 48,
                'province_id' => 2,
                'name' => 'Kab. Nias Barat',
            ),
            48 => 
            array (
                'id' => 49,
                'province_id' => 2,
                'name' => 'Kota Sibolga',
            ),
            49 => 
            array (
                'id' => 50,
                'province_id' => 2,
                'name' => 'Kota Tanjung Balai',
            ),
            50 => 
            array (
                'id' => 51,
                'province_id' => 2,
                'name' => 'Kota Pematang Siantar',
            ),
            51 => 
            array (
                'id' => 52,
                'province_id' => 2,
                'name' => 'Kota Tebing Tinggi',
            ),
            52 => 
            array (
                'id' => 53,
                'province_id' => 2,
                'name' => 'Kota Medan',
            ),
            53 => 
            array (
                'id' => 54,
                'province_id' => 2,
                'name' => 'Kota Binjai',
            ),
            54 => 
            array (
                'id' => 55,
                'province_id' => 2,
                'name' => 'Kota Padangsidimpuan',
            ),
            55 => 
            array (
                'id' => 56,
                'province_id' => 2,
                'name' => 'Kota Gunungsitoli',
            ),
            56 => 
            array (
                'id' => 57,
                'province_id' => 3,
                'name' => 'Kab. Kepulauan Mentawai',
            ),
            57 => 
            array (
                'id' => 58,
                'province_id' => 3,
                'name' => 'Kab. Pesisir Selatan',
            ),
            58 => 
            array (
                'id' => 59,
                'province_id' => 3,
                'name' => 'Kab. Solok',
            ),
            59 => 
            array (
                'id' => 60,
                'province_id' => 3,
                'name' => 'Kab. Sijunjung',
            ),
            60 => 
            array (
                'id' => 61,
                'province_id' => 3,
                'name' => 'Kab. Tanah Datar',
            ),
            61 => 
            array (
                'id' => 62,
                'province_id' => 3,
                'name' => 'Kab. Padang Pariaman',
            ),
            62 => 
            array (
                'id' => 63,
                'province_id' => 3,
                'name' => 'Kab. Agam',
            ),
            63 => 
            array (
                'id' => 64,
                'province_id' => 3,
                'name' => 'Kab. Lima Puluh Kota',
            ),
            64 => 
            array (
                'id' => 65,
                'province_id' => 3,
                'name' => 'Kab. Pasaman',
            ),
            65 => 
            array (
                'id' => 66,
                'province_id' => 3,
                'name' => 'Kab. Solok Selatan',
            ),
            66 => 
            array (
                'id' => 67,
                'province_id' => 3,
                'name' => 'Kab. Dharmasraya',
            ),
            67 => 
            array (
                'id' => 68,
                'province_id' => 3,
                'name' => 'Kab. Pasaman Barat',
            ),
            68 => 
            array (
                'id' => 69,
                'province_id' => 3,
                'name' => 'Kota Padang',
            ),
            69 => 
            array (
                'id' => 70,
                'province_id' => 3,
                'name' => 'Kota Solok',
            ),
            70 => 
            array (
                'id' => 71,
                'province_id' => 3,
                'name' => 'Kota Sawah Lunto',
            ),
            71 => 
            array (
                'id' => 72,
                'province_id' => 3,
                'name' => 'Kota Padang Panjang',
            ),
            72 => 
            array (
                'id' => 73,
                'province_id' => 3,
                'name' => 'Kota Bukittinggi',
            ),
            73 => 
            array (
                'id' => 74,
                'province_id' => 3,
                'name' => 'Kota Payakumbuh',
            ),
            74 => 
            array (
                'id' => 75,
                'province_id' => 3,
                'name' => 'Kota Pariaman',
            ),
            75 => 
            array (
                'id' => 76,
                'province_id' => 4,
                'name' => 'Kab. Kuantan Singingi',
            ),
            76 => 
            array (
                'id' => 77,
                'province_id' => 4,
                'name' => 'Kab. Indragiri Hulu',
            ),
            77 => 
            array (
                'id' => 78,
                'province_id' => 4,
                'name' => 'Kab. Indragiri Hilir',
            ),
            78 => 
            array (
                'id' => 79,
                'province_id' => 4,
                'name' => 'Kab. Pelalawan',
            ),
            79 => 
            array (
                'id' => 80,
                'province_id' => 4,
                'name' => 'Kab. S I A K',
            ),
            80 => 
            array (
                'id' => 81,
                'province_id' => 4,
                'name' => 'Kab. Kampar',
            ),
            81 => 
            array (
                'id' => 82,
                'province_id' => 4,
                'name' => 'Kab. Rokan Hulu',
            ),
            82 => 
            array (
                'id' => 83,
                'province_id' => 4,
                'name' => 'Kab. Bengkalis',
            ),
            83 => 
            array (
                'id' => 84,
                'province_id' => 4,
                'name' => 'Kab. Rokan Hilir',
            ),
            84 => 
            array (
                'id' => 85,
                'province_id' => 4,
                'name' => 'Kab. Kepulauan Meranti',
            ),
            85 => 
            array (
                'id' => 86,
                'province_id' => 4,
                'name' => 'Kota Pekanbaru',
            ),
            86 => 
            array (
                'id' => 87,
                'province_id' => 4,
                'name' => 'Kota D U M A I',
            ),
            87 => 
            array (
                'id' => 88,
                'province_id' => 5,
                'name' => 'Kab. Kerinci',
            ),
            88 => 
            array (
                'id' => 89,
                'province_id' => 5,
                'name' => 'Kab. Merangin',
            ),
            89 => 
            array (
                'id' => 90,
                'province_id' => 5,
                'name' => 'Kab. Sarolangun',
            ),
            90 => 
            array (
                'id' => 91,
                'province_id' => 5,
                'name' => 'Kab. Batang Hari',
            ),
            91 => 
            array (
                'id' => 92,
                'province_id' => 5,
                'name' => 'Kab. Muaro Jambi',
            ),
            92 => 
            array (
                'id' => 93,
                'province_id' => 5,
                'name' => 'Kab. Tanjung Jabung Timur',
            ),
            93 => 
            array (
                'id' => 94,
                'province_id' => 5,
                'name' => 'Kab. Tanjung Jabung Barat',
            ),
            94 => 
            array (
                'id' => 95,
                'province_id' => 5,
                'name' => 'Kab. Tebo',
            ),
            95 => 
            array (
                'id' => 96,
                'province_id' => 5,
                'name' => 'Kab. Bungo',
            ),
            96 => 
            array (
                'id' => 97,
                'province_id' => 5,
                'name' => 'Kota Jambi',
            ),
            97 => 
            array (
                'id' => 98,
                'province_id' => 5,
                'name' => 'Kota Sungai Penuh',
            ),
            98 => 
            array (
                'id' => 99,
                'province_id' => 6,
                'name' => 'Kab. Ogan Komering Ulu',
            ),
            99 => 
            array (
                'id' => 100,
                'province_id' => 6,
                'name' => 'Kab. Ogan Komering Ilir',
            ),
            100 => 
            array (
                'id' => 101,
                'province_id' => 6,
                'name' => 'Kab. Muara Enim',
            ),
            101 => 
            array (
                'id' => 102,
                'province_id' => 6,
                'name' => 'Kab. Lahat',
            ),
            102 => 
            array (
                'id' => 103,
                'province_id' => 6,
                'name' => 'Kab. Musi Rawas',
            ),
            103 => 
            array (
                'id' => 104,
                'province_id' => 6,
                'name' => 'Kab. Musi Banyuasin',
            ),
            104 => 
            array (
                'id' => 105,
                'province_id' => 6,
                'name' => 'Kab. Banyu Asin',
            ),
            105 => 
            array (
                'id' => 106,
                'province_id' => 6,
                'name' => 'Kab. Ogan Komering Ulu Selatan',
            ),
            106 => 
            array (
                'id' => 107,
                'province_id' => 6,
                'name' => 'Kab. Ogan Komering Ulu Timur',
            ),
            107 => 
            array (
                'id' => 108,
                'province_id' => 6,
                'name' => 'Kab. Ogan Ilir',
            ),
            108 => 
            array (
                'id' => 109,
                'province_id' => 6,
                'name' => 'Kab. Empat Lawang',
            ),
            109 => 
            array (
                'id' => 110,
                'province_id' => 6,
                'name' => 'Kota Palembang',
            ),
            110 => 
            array (
                'id' => 111,
                'province_id' => 6,
                'name' => 'Kota Prabumulih',
            ),
            111 => 
            array (
                'id' => 112,
                'province_id' => 6,
                'name' => 'Kota Pagar Alam',
            ),
            112 => 
            array (
                'id' => 113,
                'province_id' => 6,
                'name' => 'Kota Lubuklinggau',
            ),
            113 => 
            array (
                'id' => 114,
                'province_id' => 7,
                'name' => 'Kab. Bengkulu Selatan',
            ),
            114 => 
            array (
                'id' => 115,
                'province_id' => 7,
                'name' => 'Kab. Rejang Lebong',
            ),
            115 => 
            array (
                'id' => 116,
                'province_id' => 7,
                'name' => 'Kab. Bengkulu Utara',
            ),
            116 => 
            array (
                'id' => 117,
                'province_id' => 7,
                'name' => 'Kab. Kaur',
            ),
            117 => 
            array (
                'id' => 118,
                'province_id' => 7,
                'name' => 'Kab. Seluma',
            ),
            118 => 
            array (
                'id' => 119,
                'province_id' => 7,
                'name' => 'Kab. Mukomuko',
            ),
            119 => 
            array (
                'id' => 120,
                'province_id' => 7,
                'name' => 'Kab. Lebong',
            ),
            120 => 
            array (
                'id' => 121,
                'province_id' => 7,
                'name' => 'Kab. Kepahiang',
            ),
            121 => 
            array (
                'id' => 122,
                'province_id' => 7,
                'name' => 'Kab. Bengkulu Tengah',
            ),
            122 => 
            array (
                'id' => 123,
                'province_id' => 7,
                'name' => 'Kota Bengkulu',
            ),
            123 => 
            array (
                'id' => 124,
                'province_id' => 8,
                'name' => 'Kab. Lampung Barat',
            ),
            124 => 
            array (
                'id' => 125,
                'province_id' => 8,
                'name' => 'Kab. Tanggamus',
            ),
            125 => 
            array (
                'id' => 126,
                'province_id' => 8,
                'name' => 'Kab. Lampung Selatan',
            ),
            126 => 
            array (
                'id' => 127,
                'province_id' => 8,
                'name' => 'Kab. Lampung Timur',
            ),
            127 => 
            array (
                'id' => 128,
                'province_id' => 8,
                'name' => 'Kab. Lampung Tengah',
            ),
            128 => 
            array (
                'id' => 129,
                'province_id' => 8,
                'name' => 'Kab. Lampung Utara',
            ),
            129 => 
            array (
                'id' => 130,
                'province_id' => 8,
                'name' => 'Kab. Way Kanan',
            ),
            130 => 
            array (
                'id' => 131,
                'province_id' => 8,
                'name' => 'Kab. Tulangbawang',
            ),
            131 => 
            array (
                'id' => 132,
                'province_id' => 8,
                'name' => 'Kab. Pesawaran',
            ),
            132 => 
            array (
                'id' => 133,
                'province_id' => 8,
                'name' => 'Kab. Pringsewu',
            ),
            133 => 
            array (
                'id' => 134,
                'province_id' => 8,
                'name' => 'Kab. Mesuji',
            ),
            134 => 
            array (
                'id' => 135,
                'province_id' => 8,
                'name' => 'Kab. Tulang Bawang Barat',
            ),
            135 => 
            array (
                'id' => 136,
                'province_id' => 8,
                'name' => 'Kab. Pesisir Barat',
            ),
            136 => 
            array (
                'id' => 137,
                'province_id' => 8,
                'name' => 'Kota Bandar Lampung',
            ),
            137 => 
            array (
                'id' => 138,
                'province_id' => 8,
                'name' => 'Kota Metro',
            ),
            138 => 
            array (
                'id' => 139,
                'province_id' => 9,
                'name' => 'Kab. Bangka',
            ),
            139 => 
            array (
                'id' => 140,
                'province_id' => 9,
                'name' => 'Kab. Belitung',
            ),
            140 => 
            array (
                'id' => 141,
                'province_id' => 9,
                'name' => 'Kab. Bangka Barat',
            ),
            141 => 
            array (
                'id' => 142,
                'province_id' => 9,
                'name' => 'Kab. Bangka Tengah',
            ),
            142 => 
            array (
                'id' => 143,
                'province_id' => 9,
                'name' => 'Kab. Bangka Selatan',
            ),
            143 => 
            array (
                'id' => 144,
                'province_id' => 9,
                'name' => 'Kab. Belitung Timur',
            ),
            144 => 
            array (
                'id' => 145,
                'province_id' => 9,
                'name' => 'Kota Pangkal Pinang',
            ),
            145 => 
            array (
                'id' => 146,
                'province_id' => 10,
                'name' => 'Kab. Karimun',
            ),
            146 => 
            array (
                'id' => 147,
                'province_id' => 10,
                'name' => 'Kab. Bintan',
            ),
            147 => 
            array (
                'id' => 148,
                'province_id' => 10,
                'name' => 'Kab. Natuna',
            ),
            148 => 
            array (
                'id' => 149,
                'province_id' => 10,
                'name' => 'Kab. Lingga',
            ),
            149 => 
            array (
                'id' => 150,
                'province_id' => 10,
                'name' => 'Kab. Kepulauan Anambas',
            ),
            150 => 
            array (
                'id' => 151,
                'province_id' => 10,
                'name' => 'Kota B A T A M',
            ),
            151 => 
            array (
                'id' => 152,
                'province_id' => 10,
                'name' => 'Kota Tanjung Pinang',
            ),
            152 => 
            array (
                'id' => 153,
                'province_id' => 11,
                'name' => 'Kab. Kepulauan Seribu',
            ),
            153 => 
            array (
                'id' => 154,
                'province_id' => 11,
                'name' => 'Kota Jakarta Selatan',
            ),
            154 => 
            array (
                'id' => 155,
                'province_id' => 11,
                'name' => 'Kota Jakarta Timur',
            ),
            155 => 
            array (
                'id' => 156,
                'province_id' => 11,
                'name' => 'Kota Jakarta Pusat',
            ),
            156 => 
            array (
                'id' => 157,
                'province_id' => 11,
                'name' => 'Kota Jakarta Barat',
            ),
            157 => 
            array (
                'id' => 158,
                'province_id' => 11,
                'name' => 'Kota Jakarta Utara',
            ),
            158 => 
            array (
                'id' => 159,
                'province_id' => 12,
                'name' => 'Kab. Bogor',
            ),
            159 => 
            array (
                'id' => 160,
                'province_id' => 12,
                'name' => 'Kab. Sukabumi',
            ),
            160 => 
            array (
                'id' => 161,
                'province_id' => 12,
                'name' => 'Kab. Cianjur',
            ),
            161 => 
            array (
                'id' => 162,
                'province_id' => 12,
                'name' => 'Kab. Bandung',
            ),
            162 => 
            array (
                'id' => 163,
                'province_id' => 12,
                'name' => 'Kab. Garut',
            ),
            163 => 
            array (
                'id' => 164,
                'province_id' => 12,
                'name' => 'Kab. Tasikmalaya',
            ),
            164 => 
            array (
                'id' => 165,
                'province_id' => 12,
                'name' => 'Kab. Ciamis',
            ),
            165 => 
            array (
                'id' => 166,
                'province_id' => 12,
                'name' => 'Kab. Kuningan',
            ),
            166 => 
            array (
                'id' => 167,
                'province_id' => 12,
                'name' => 'Kab. Cirebon',
            ),
            167 => 
            array (
                'id' => 168,
                'province_id' => 12,
                'name' => 'Kab. Majalengka',
            ),
            168 => 
            array (
                'id' => 169,
                'province_id' => 12,
                'name' => 'Kab. Sumedang',
            ),
            169 => 
            array (
                'id' => 170,
                'province_id' => 12,
                'name' => 'Kab. Indramayu',
            ),
            170 => 
            array (
                'id' => 171,
                'province_id' => 12,
                'name' => 'Kab. Subang',
            ),
            171 => 
            array (
                'id' => 172,
                'province_id' => 12,
                'name' => 'Kab. Purwakarta',
            ),
            172 => 
            array (
                'id' => 173,
                'province_id' => 12,
                'name' => 'Kab. Karawang',
            ),
            173 => 
            array (
                'id' => 174,
                'province_id' => 12,
                'name' => 'Kab. Bekasi',
            ),
            174 => 
            array (
                'id' => 175,
                'province_id' => 12,
                'name' => 'Kab. Bandung Barat',
            ),
            175 => 
            array (
                'id' => 176,
                'province_id' => 12,
                'name' => 'Kab. Pangandaran',
            ),
            176 => 
            array (
                'id' => 177,
                'province_id' => 12,
                'name' => 'Kota Bogor',
            ),
            177 => 
            array (
                'id' => 178,
                'province_id' => 12,
                'name' => 'Kota Sukabumi',
            ),
            178 => 
            array (
                'id' => 179,
                'province_id' => 12,
                'name' => 'Kota Bandung',
            ),
            179 => 
            array (
                'id' => 180,
                'province_id' => 12,
                'name' => 'Kota Cirebon',
            ),
            180 => 
            array (
                'id' => 181,
                'province_id' => 12,
                'name' => 'Kota Bekasi',
            ),
            181 => 
            array (
                'id' => 182,
                'province_id' => 12,
                'name' => 'Kota Depok',
            ),
            182 => 
            array (
                'id' => 183,
                'province_id' => 12,
                'name' => 'Kota Cimahi',
            ),
            183 => 
            array (
                'id' => 184,
                'province_id' => 12,
                'name' => 'Kota Tasikmalaya',
            ),
            184 => 
            array (
                'id' => 185,
                'province_id' => 12,
                'name' => 'Kota Banjar',
            ),
            185 => 
            array (
                'id' => 186,
                'province_id' => 13,
                'name' => 'Kab. Cilacap',
            ),
            186 => 
            array (
                'id' => 187,
                'province_id' => 13,
                'name' => 'Kab. Banyumas',
            ),
            187 => 
            array (
                'id' => 188,
                'province_id' => 13,
                'name' => 'Kab. Purbalingga',
            ),
            188 => 
            array (
                'id' => 189,
                'province_id' => 13,
                'name' => 'Kab. Banjarnegara',
            ),
            189 => 
            array (
                'id' => 190,
                'province_id' => 13,
                'name' => 'Kab. Kebumen',
            ),
            190 => 
            array (
                'id' => 191,
                'province_id' => 13,
                'name' => 'Kab. Purworejo',
            ),
            191 => 
            array (
                'id' => 192,
                'province_id' => 13,
                'name' => 'Kab. Wonosobo',
            ),
            192 => 
            array (
                'id' => 193,
                'province_id' => 13,
                'name' => 'Kab. Magelang',
            ),
            193 => 
            array (
                'id' => 194,
                'province_id' => 13,
                'name' => 'Kab. Boyolali',
            ),
            194 => 
            array (
                'id' => 195,
                'province_id' => 13,
                'name' => 'Kab. Klaten',
            ),
            195 => 
            array (
                'id' => 196,
                'province_id' => 13,
                'name' => 'Kab. Sukoharjo',
            ),
            196 => 
            array (
                'id' => 197,
                'province_id' => 13,
                'name' => 'Kab. Wonogiri',
            ),
            197 => 
            array (
                'id' => 198,
                'province_id' => 13,
                'name' => 'Kab. Karanganyar',
            ),
            198 => 
            array (
                'id' => 199,
                'province_id' => 13,
                'name' => 'Kab. Sragen',
            ),
            199 => 
            array (
                'id' => 200,
                'province_id' => 13,
                'name' => 'Kab. Grobogan',
            ),
            200 => 
            array (
                'id' => 201,
                'province_id' => 13,
                'name' => 'Kab. Blora',
            ),
            201 => 
            array (
                'id' => 202,
                'province_id' => 13,
                'name' => 'Kab. Rembang',
            ),
            202 => 
            array (
                'id' => 203,
                'province_id' => 13,
                'name' => 'Kab. Pati',
            ),
            203 => 
            array (
                'id' => 204,
                'province_id' => 13,
                'name' => 'Kab. Kudus',
            ),
            204 => 
            array (
                'id' => 205,
                'province_id' => 13,
                'name' => 'Kab. Jepara',
            ),
            205 => 
            array (
                'id' => 206,
                'province_id' => 13,
                'name' => 'Kab. Demak',
            ),
            206 => 
            array (
                'id' => 207,
                'province_id' => 13,
                'name' => 'Kab. Semarang',
            ),
            207 => 
            array (
                'id' => 208,
                'province_id' => 13,
                'name' => 'Kab. Temanggung',
            ),
            208 => 
            array (
                'id' => 209,
                'province_id' => 13,
                'name' => 'Kab. Kendal',
            ),
            209 => 
            array (
                'id' => 210,
                'province_id' => 13,
                'name' => 'Kab. Batang',
            ),
            210 => 
            array (
                'id' => 211,
                'province_id' => 13,
                'name' => 'Kab. Pekalongan',
            ),
            211 => 
            array (
                'id' => 212,
                'province_id' => 13,
                'name' => 'Kab. Pemalang',
            ),
            212 => 
            array (
                'id' => 213,
                'province_id' => 13,
                'name' => 'Kab. Tegal',
            ),
            213 => 
            array (
                'id' => 214,
                'province_id' => 13,
                'name' => 'Kab. Brebes',
            ),
            214 => 
            array (
                'id' => 215,
                'province_id' => 13,
                'name' => 'Kota Magelang',
            ),
            215 => 
            array (
                'id' => 216,
                'province_id' => 13,
                'name' => 'Kota Surakarta',
            ),
            216 => 
            array (
                'id' => 217,
                'province_id' => 13,
                'name' => 'Kota Salatiga',
            ),
            217 => 
            array (
                'id' => 218,
                'province_id' => 13,
                'name' => 'Kota Semarang',
            ),
            218 => 
            array (
                'id' => 219,
                'province_id' => 13,
                'name' => 'Kota Pekalongan',
            ),
            219 => 
            array (
                'id' => 220,
                'province_id' => 13,
                'name' => 'Kota Tegal',
            ),
            220 => 
            array (
                'id' => 221,
                'province_id' => 14,
                'name' => 'Kab. Kulon Progo',
            ),
            221 => 
            array (
                'id' => 222,
                'province_id' => 14,
                'name' => 'Kab. Bantul',
            ),
            222 => 
            array (
                'id' => 223,
                'province_id' => 14,
                'name' => 'Kab. Gunung Kidul',
            ),
            223 => 
            array (
                'id' => 224,
                'province_id' => 14,
                'name' => 'Kab. Sleman',
            ),
            224 => 
            array (
                'id' => 225,
                'province_id' => 14,
                'name' => 'Kota Yogyakarta',
            ),
            225 => 
            array (
                'id' => 226,
                'province_id' => 15,
                'name' => 'Kab. Pacitan',
            ),
            226 => 
            array (
                'id' => 227,
                'province_id' => 15,
                'name' => 'Kab. Ponorogo',
            ),
            227 => 
            array (
                'id' => 228,
                'province_id' => 15,
                'name' => 'Kab. Trenggalek',
            ),
            228 => 
            array (
                'id' => 229,
                'province_id' => 15,
                'name' => 'Kab. Tulungagung',
            ),
            229 => 
            array (
                'id' => 230,
                'province_id' => 15,
                'name' => 'Kab. Blitar',
            ),
            230 => 
            array (
                'id' => 231,
                'province_id' => 15,
                'name' => 'Kab. Kediri',
            ),
            231 => 
            array (
                'id' => 232,
                'province_id' => 15,
                'name' => 'Kab. Malang',
            ),
            232 => 
            array (
                'id' => 233,
                'province_id' => 15,
                'name' => 'Kab. Lumajang',
            ),
            233 => 
            array (
                'id' => 234,
                'province_id' => 15,
                'name' => 'Kab. Jember',
            ),
            234 => 
            array (
                'id' => 235,
                'province_id' => 15,
                'name' => 'Kab. Banyuwangi',
            ),
            235 => 
            array (
                'id' => 236,
                'province_id' => 15,
                'name' => 'Kab. Bondowoso',
            ),
            236 => 
            array (
                'id' => 237,
                'province_id' => 15,
                'name' => 'Kab. Situbondo',
            ),
            237 => 
            array (
                'id' => 238,
                'province_id' => 15,
                'name' => 'Kab. Probolinggo',
            ),
            238 => 
            array (
                'id' => 239,
                'province_id' => 15,
                'name' => 'Kab. Pasuruan',
            ),
            239 => 
            array (
                'id' => 240,
                'province_id' => 15,
                'name' => 'Kab. Sidoarjo',
            ),
            240 => 
            array (
                'id' => 241,
                'province_id' => 15,
                'name' => 'Kab. Mojokerto',
            ),
            241 => 
            array (
                'id' => 242,
                'province_id' => 15,
                'name' => 'Kab. Jombang',
            ),
            242 => 
            array (
                'id' => 243,
                'province_id' => 15,
                'name' => 'Kab. Nganjuk',
            ),
            243 => 
            array (
                'id' => 244,
                'province_id' => 15,
                'name' => 'Kab. Madiun',
            ),
            244 => 
            array (
                'id' => 245,
                'province_id' => 15,
                'name' => 'Kab. Magetan',
            ),
            245 => 
            array (
                'id' => 246,
                'province_id' => 15,
                'name' => 'Kab. Ngawi',
            ),
            246 => 
            array (
                'id' => 247,
                'province_id' => 15,
                'name' => 'Kab. Bojonegoro',
            ),
            247 => 
            array (
                'id' => 248,
                'province_id' => 15,
                'name' => 'Kab. Tuban',
            ),
            248 => 
            array (
                'id' => 249,
                'province_id' => 15,
                'name' => 'Kab. Lamongan',
            ),
            249 => 
            array (
                'id' => 250,
                'province_id' => 15,
                'name' => 'Kab. Gresik',
            ),
            250 => 
            array (
                'id' => 251,
                'province_id' => 15,
                'name' => 'Kab. Bangkalan',
            ),
            251 => 
            array (
                'id' => 252,
                'province_id' => 15,
                'name' => 'Kab. Sampang',
            ),
            252 => 
            array (
                'id' => 253,
                'province_id' => 15,
                'name' => 'Kab. Pamekasan',
            ),
            253 => 
            array (
                'id' => 254,
                'province_id' => 15,
                'name' => 'Kab. Sumenep',
            ),
            254 => 
            array (
                'id' => 255,
                'province_id' => 15,
                'name' => 'Kota Kediri',
            ),
            255 => 
            array (
                'id' => 256,
                'province_id' => 15,
                'name' => 'Kota Blitar',
            ),
            256 => 
            array (
                'id' => 257,
                'province_id' => 15,
                'name' => 'Kota Malang',
            ),
            257 => 
            array (
                'id' => 258,
                'province_id' => 15,
                'name' => 'Kota Probolinggo',
            ),
            258 => 
            array (
                'id' => 259,
                'province_id' => 15,
                'name' => 'Kota Pasuruan',
            ),
            259 => 
            array (
                'id' => 260,
                'province_id' => 15,
                'name' => 'Kota Mojokerto',
            ),
            260 => 
            array (
                'id' => 261,
                'province_id' => 15,
                'name' => 'Kota Madiun',
            ),
            261 => 
            array (
                'id' => 262,
                'province_id' => 15,
                'name' => 'Kota Surabaya',
            ),
            262 => 
            array (
                'id' => 263,
                'province_id' => 15,
                'name' => 'Kota Batu',
            ),
            263 => 
            array (
                'id' => 264,
                'province_id' => 16,
                'name' => 'Kab. Pandeglang',
            ),
            264 => 
            array (
                'id' => 265,
                'province_id' => 16,
                'name' => 'Kab. Lebak',
            ),
            265 => 
            array (
                'id' => 266,
                'province_id' => 16,
                'name' => 'Kab. Tangerang',
            ),
            266 => 
            array (
                'id' => 267,
                'province_id' => 16,
                'name' => 'Kab. Serang',
            ),
            267 => 
            array (
                'id' => 268,
                'province_id' => 16,
                'name' => 'Kota Tangerang',
            ),
            268 => 
            array (
                'id' => 269,
                'province_id' => 16,
                'name' => 'Kota Cilegon',
            ),
            269 => 
            array (
                'id' => 270,
                'province_id' => 16,
                'name' => 'Kota Serang',
            ),
            270 => 
            array (
                'id' => 271,
                'province_id' => 16,
                'name' => 'Kota Tangerang Selatan',
            ),
            271 => 
            array (
                'id' => 272,
                'province_id' => 17,
                'name' => 'Kab. Jembrana',
            ),
            272 => 
            array (
                'id' => 273,
                'province_id' => 17,
                'name' => 'Kab. Tabanan',
            ),
            273 => 
            array (
                'id' => 274,
                'province_id' => 17,
                'name' => 'Kab. Badung',
            ),
            274 => 
            array (
                'id' => 275,
                'province_id' => 17,
                'name' => 'Kab. Gianyar',
            ),
            275 => 
            array (
                'id' => 276,
                'province_id' => 17,
                'name' => 'Kab. Klungkung',
            ),
            276 => 
            array (
                'id' => 277,
                'province_id' => 17,
                'name' => 'Kab. Bangli',
            ),
            277 => 
            array (
                'id' => 278,
                'province_id' => 17,
                'name' => 'Kab. Karang Asem',
            ),
            278 => 
            array (
                'id' => 279,
                'province_id' => 17,
                'name' => 'Kab. Buleleng',
            ),
            279 => 
            array (
                'id' => 280,
                'province_id' => 17,
                'name' => 'Kota Denpasar',
            ),
            280 => 
            array (
                'id' => 281,
                'province_id' => 18,
                'name' => 'Kab. Lombok Barat',
            ),
            281 => 
            array (
                'id' => 282,
                'province_id' => 18,
                'name' => 'Kab. Lombok Tengah',
            ),
            282 => 
            array (
                'id' => 283,
                'province_id' => 18,
                'name' => 'Kab. Lombok Timur',
            ),
            283 => 
            array (
                'id' => 284,
                'province_id' => 18,
                'name' => 'Kab. Sumbawa',
            ),
            284 => 
            array (
                'id' => 285,
                'province_id' => 18,
                'name' => 'Kab. Dompu',
            ),
            285 => 
            array (
                'id' => 286,
                'province_id' => 18,
                'name' => 'Kab. Bima',
            ),
            286 => 
            array (
                'id' => 287,
                'province_id' => 18,
                'name' => 'Kab. Sumbawa Barat',
            ),
            287 => 
            array (
                'id' => 288,
                'province_id' => 18,
                'name' => 'Kab. Lombok Utara',
            ),
            288 => 
            array (
                'id' => 289,
                'province_id' => 18,
                'name' => 'Kota Mataram',
            ),
            289 => 
            array (
                'id' => 290,
                'province_id' => 18,
                'name' => 'Kota Bima',
            ),
            290 => 
            array (
                'id' => 291,
                'province_id' => 19,
                'name' => 'Kab. Sumba Barat',
            ),
            291 => 
            array (
                'id' => 292,
                'province_id' => 19,
                'name' => 'Kab. Sumba Timur',
            ),
            292 => 
            array (
                'id' => 293,
                'province_id' => 19,
                'name' => 'Kab. Kupang',
            ),
            293 => 
            array (
                'id' => 294,
                'province_id' => 19,
                'name' => 'Kab. Timor Tengah Selatan',
            ),
            294 => 
            array (
                'id' => 295,
                'province_id' => 19,
                'name' => 'Kab. Timor Tengah Utara',
            ),
            295 => 
            array (
                'id' => 296,
                'province_id' => 19,
                'name' => 'Kab. Belu',
            ),
            296 => 
            array (
                'id' => 297,
                'province_id' => 19,
                'name' => 'Kab. Alor',
            ),
            297 => 
            array (
                'id' => 298,
                'province_id' => 19,
                'name' => 'Kab. Lembata',
            ),
            298 => 
            array (
                'id' => 299,
                'province_id' => 19,
                'name' => 'Kab. Flores Timur',
            ),
            299 => 
            array (
                'id' => 300,
                'province_id' => 19,
                'name' => 'Kab. Sikka',
            ),
            300 => 
            array (
                'id' => 301,
                'province_id' => 19,
                'name' => 'Kab. Ende',
            ),
            301 => 
            array (
                'id' => 302,
                'province_id' => 19,
                'name' => 'Kab. Ngada',
            ),
            302 => 
            array (
                'id' => 303,
                'province_id' => 19,
                'name' => 'Kab. Manggarai',
            ),
            303 => 
            array (
                'id' => 304,
                'province_id' => 19,
                'name' => 'Kab. Rote Ndao',
            ),
            304 => 
            array (
                'id' => 305,
                'province_id' => 19,
                'name' => 'Kab. Manggarai Barat',
            ),
            305 => 
            array (
                'id' => 306,
                'province_id' => 19,
                'name' => 'Kab. Sumba Tengah',
            ),
            306 => 
            array (
                'id' => 307,
                'province_id' => 19,
                'name' => 'Kab. Sumba Barat Daya',
            ),
            307 => 
            array (
                'id' => 308,
                'province_id' => 19,
                'name' => 'Kab. Nagekeo',
            ),
            308 => 
            array (
                'id' => 309,
                'province_id' => 19,
                'name' => 'Kab. Manggarai Timur',
            ),
            309 => 
            array (
                'id' => 310,
                'province_id' => 19,
                'name' => 'Kab. Sabu Raijua',
            ),
            310 => 
            array (
                'id' => 311,
                'province_id' => 19,
                'name' => 'Kota Kupang',
            ),
            311 => 
            array (
                'id' => 312,
                'province_id' => 20,
                'name' => 'Kab. Sambas',
            ),
            312 => 
            array (
                'id' => 313,
                'province_id' => 20,
                'name' => 'Kab. Bengkayang',
            ),
            313 => 
            array (
                'id' => 314,
                'province_id' => 20,
                'name' => 'Kab. Landak',
            ),
            314 => 
            array (
                'id' => 315,
                'province_id' => 20,
                'name' => 'Kab. Pontianak',
            ),
            315 => 
            array (
                'id' => 316,
                'province_id' => 20,
                'name' => 'Kab. Sanggau',
            ),
            316 => 
            array (
                'id' => 317,
                'province_id' => 20,
                'name' => 'Kab. Ketapang',
            ),
            317 => 
            array (
                'id' => 318,
                'province_id' => 20,
                'name' => 'Kab. Sintang',
            ),
            318 => 
            array (
                'id' => 319,
                'province_id' => 20,
                'name' => 'Kab. Kapuas Hulu',
            ),
            319 => 
            array (
                'id' => 320,
                'province_id' => 20,
                'name' => 'Kab. Sekadau',
            ),
            320 => 
            array (
                'id' => 321,
                'province_id' => 20,
                'name' => 'Kab. Melawi',
            ),
            321 => 
            array (
                'id' => 322,
                'province_id' => 20,
                'name' => 'Kab. Kayong Utara',
            ),
            322 => 
            array (
                'id' => 323,
                'province_id' => 20,
                'name' => 'Kab. Kubu Raya',
            ),
            323 => 
            array (
                'id' => 324,
                'province_id' => 20,
                'name' => 'Kota Pontianak',
            ),
            324 => 
            array (
                'id' => 325,
                'province_id' => 20,
                'name' => 'Kota Singkawang',
            ),
            325 => 
            array (
                'id' => 326,
                'province_id' => 21,
                'name' => 'Kab. Kotawaringin Barat',
            ),
            326 => 
            array (
                'id' => 327,
                'province_id' => 21,
                'name' => 'Kab. Kotawaringin Timur',
            ),
            327 => 
            array (
                'id' => 328,
                'province_id' => 21,
                'name' => 'Kab. Kapuas',
            ),
            328 => 
            array (
                'id' => 329,
                'province_id' => 21,
                'name' => 'Kab. Barito Selatan',
            ),
            329 => 
            array (
                'id' => 330,
                'province_id' => 21,
                'name' => 'Kab. Barito Utara',
            ),
            330 => 
            array (
                'id' => 331,
                'province_id' => 21,
                'name' => 'Kab. Sukamara',
            ),
            331 => 
            array (
                'id' => 332,
                'province_id' => 21,
                'name' => 'Kab. Lamandau',
            ),
            332 => 
            array (
                'id' => 333,
                'province_id' => 21,
                'name' => 'Kab. Seruyan',
            ),
            333 => 
            array (
                'id' => 334,
                'province_id' => 21,
                'name' => 'Kab. Katingan',
            ),
            334 => 
            array (
                'id' => 335,
                'province_id' => 21,
                'name' => 'Kab. Pulang Pisau',
            ),
            335 => 
            array (
                'id' => 336,
                'province_id' => 21,
                'name' => 'Kab. Gunung Mas',
            ),
            336 => 
            array (
                'id' => 337,
                'province_id' => 21,
                'name' => 'Kab. Barito Timur',
            ),
            337 => 
            array (
                'id' => 338,
                'province_id' => 21,
                'name' => 'Kab. Murung Raya',
            ),
            338 => 
            array (
                'id' => 339,
                'province_id' => 21,
                'name' => 'Kota Palangka Raya',
            ),
            339 => 
            array (
                'id' => 340,
                'province_id' => 22,
                'name' => 'Kab. Tanah Laut',
            ),
            340 => 
            array (
                'id' => 341,
                'province_id' => 22,
                'name' => 'Kab. Kota Baru',
            ),
            341 => 
            array (
                'id' => 342,
                'province_id' => 22,
                'name' => 'Kab. Banjar',
            ),
            342 => 
            array (
                'id' => 343,
                'province_id' => 22,
                'name' => 'Kab. Barito Kuala',
            ),
            343 => 
            array (
                'id' => 344,
                'province_id' => 22,
                'name' => 'Kab. Tapin',
            ),
            344 => 
            array (
                'id' => 345,
                'province_id' => 22,
                'name' => 'Kab. Hulu Sungai Selatan',
            ),
            345 => 
            array (
                'id' => 346,
                'province_id' => 22,
                'name' => 'Kab. Hulu Sungai Tengah',
            ),
            346 => 
            array (
                'id' => 347,
                'province_id' => 22,
                'name' => 'Kab. Hulu Sungai Utara',
            ),
            347 => 
            array (
                'id' => 348,
                'province_id' => 22,
                'name' => 'Kab. Tabalong',
            ),
            348 => 
            array (
                'id' => 349,
                'province_id' => 22,
                'name' => 'Kab. Tanah Bumbu',
            ),
            349 => 
            array (
                'id' => 350,
                'province_id' => 22,
                'name' => 'Kab. Balangan',
            ),
            350 => 
            array (
                'id' => 351,
                'province_id' => 22,
                'name' => 'Kota Banjarmasin',
            ),
            351 => 
            array (
                'id' => 352,
                'province_id' => 22,
                'name' => 'Kota Banjar Baru',
            ),
            352 => 
            array (
                'id' => 353,
                'province_id' => 23,
                'name' => 'Kab. Paser',
            ),
            353 => 
            array (
                'id' => 354,
                'province_id' => 23,
                'name' => 'Kab. Kutai Barat',
            ),
            354 => 
            array (
                'id' => 355,
                'province_id' => 23,
                'name' => 'Kab. Kutai Kartanegara',
            ),
            355 => 
            array (
                'id' => 356,
                'province_id' => 23,
                'name' => 'Kab. Kutai Timur',
            ),
            356 => 
            array (
                'id' => 357,
                'province_id' => 23,
                'name' => 'Kab. Berau',
            ),
            357 => 
            array (
                'id' => 358,
                'province_id' => 23,
                'name' => 'Kab. Penajam Paser Utara',
            ),
            358 => 
            array (
                'id' => 359,
                'province_id' => 23,
                'name' => 'Kota Balikpapan',
            ),
            359 => 
            array (
                'id' => 360,
                'province_id' => 23,
                'name' => 'Kota Samarinda',
            ),
            360 => 
            array (
                'id' => 361,
                'province_id' => 23,
                'name' => 'Kota Bontang',
            ),
            361 => 
            array (
                'id' => 362,
                'province_id' => 24,
                'name' => 'Kab. Malinau',
            ),
            362 => 
            array (
                'id' => 363,
                'province_id' => 24,
                'name' => 'Kab. Bulungan',
            ),
            363 => 
            array (
                'id' => 364,
                'province_id' => 24,
                'name' => 'Kab. Tana Tidung',
            ),
            364 => 
            array (
                'id' => 365,
                'province_id' => 24,
                'name' => 'Kab. Nunukan',
            ),
            365 => 
            array (
                'id' => 366,
                'province_id' => 24,
                'name' => 'Kota Tarakan',
            ),
            366 => 
            array (
                'id' => 367,
                'province_id' => 25,
                'name' => 'Kab. Bolaang Mongondow',
            ),
            367 => 
            array (
                'id' => 368,
                'province_id' => 25,
                'name' => 'Kab. Minahasa',
            ),
            368 => 
            array (
                'id' => 369,
                'province_id' => 25,
                'name' => 'Kab. Kepulauan Sangihe',
            ),
            369 => 
            array (
                'id' => 370,
                'province_id' => 25,
                'name' => 'Kab. Kepulauan Talaud',
            ),
            370 => 
            array (
                'id' => 371,
                'province_id' => 25,
                'name' => 'Kab. Minahasa Selatan',
            ),
            371 => 
            array (
                'id' => 372,
                'province_id' => 25,
                'name' => 'Kab. Minahasa Utara',
            ),
            372 => 
            array (
                'id' => 373,
                'province_id' => 25,
                'name' => 'Kab. Bolaang Mongondow Utara',
            ),
            373 => 
            array (
                'id' => 374,
                'province_id' => 25,
                'name' => 'Kab. Siau Tagulandang Biaro',
            ),
            374 => 
            array (
                'id' => 375,
                'province_id' => 25,
                'name' => 'Kab. Minahasa Tenggara',
            ),
            375 => 
            array (
                'id' => 376,
                'province_id' => 25,
                'name' => 'Kab. Bolaang Mongondow Selatan',
            ),
            376 => 
            array (
                'id' => 377,
                'province_id' => 25,
                'name' => 'Kab. Bolaang Mongondow Timur',
            ),
            377 => 
            array (
                'id' => 378,
                'province_id' => 25,
                'name' => 'Kota Manado',
            ),
            378 => 
            array (
                'id' => 379,
                'province_id' => 25,
                'name' => 'Kota Bitung',
            ),
            379 => 
            array (
                'id' => 380,
                'province_id' => 25,
                'name' => 'Kota Tomohon',
            ),
            380 => 
            array (
                'id' => 381,
                'province_id' => 25,
                'name' => 'Kota Kotamobagu',
            ),
            381 => 
            array (
                'id' => 382,
                'province_id' => 26,
                'name' => 'Kab. Banggai Kepulauan',
            ),
            382 => 
            array (
                'id' => 383,
                'province_id' => 26,
                'name' => 'Kab. Banggai',
            ),
            383 => 
            array (
                'id' => 384,
                'province_id' => 26,
                'name' => 'Kab. Morowali',
            ),
            384 => 
            array (
                'id' => 385,
                'province_id' => 26,
                'name' => 'Kab. Poso',
            ),
            385 => 
            array (
                'id' => 386,
                'province_id' => 26,
                'name' => 'Kab. Donggala',
            ),
            386 => 
            array (
                'id' => 387,
                'province_id' => 26,
                'name' => 'Kab. Toli-toli',
            ),
            387 => 
            array (
                'id' => 388,
                'province_id' => 26,
                'name' => 'Kab. Buol',
            ),
            388 => 
            array (
                'id' => 389,
                'province_id' => 26,
                'name' => 'Kab. Parigi Moutong',
            ),
            389 => 
            array (
                'id' => 390,
                'province_id' => 26,
                'name' => 'Kab. Tojo Una-una',
            ),
            390 => 
            array (
                'id' => 391,
                'province_id' => 26,
                'name' => 'Kab. Sigi',
            ),
            391 => 
            array (
                'id' => 392,
                'province_id' => 26,
                'name' => 'Kota Palu',
            ),
            392 => 
            array (
                'id' => 393,
                'province_id' => 27,
                'name' => 'Kab. Kepulauan Selayar',
            ),
            393 => 
            array (
                'id' => 394,
                'province_id' => 27,
                'name' => 'Kab. Bulukumba',
            ),
            394 => 
            array (
                'id' => 395,
                'province_id' => 27,
                'name' => 'Kab. Bantaeng',
            ),
            395 => 
            array (
                'id' => 396,
                'province_id' => 27,
                'name' => 'Kab. Jeneponto',
            ),
            396 => 
            array (
                'id' => 397,
                'province_id' => 27,
                'name' => 'Kab. Takalar',
            ),
            397 => 
            array (
                'id' => 398,
                'province_id' => 27,
                'name' => 'Kab. Gowa',
            ),
            398 => 
            array (
                'id' => 399,
                'province_id' => 27,
                'name' => 'Kab. Sinjai',
            ),
            399 => 
            array (
                'id' => 400,
                'province_id' => 27,
                'name' => 'Kab. Maros',
            ),
            400 => 
            array (
                'id' => 401,
                'province_id' => 27,
                'name' => 'Kab. Pangkajene Dan Kepulauan',
            ),
            401 => 
            array (
                'id' => 402,
                'province_id' => 27,
                'name' => 'Kab. Barru',
            ),
            402 => 
            array (
                'id' => 403,
                'province_id' => 27,
                'name' => 'Kab. Bone',
            ),
            403 => 
            array (
                'id' => 404,
                'province_id' => 27,
                'name' => 'Kab. Soppeng',
            ),
            404 => 
            array (
                'id' => 405,
                'province_id' => 27,
                'name' => 'Kab. Wajo',
            ),
            405 => 
            array (
                'id' => 406,
                'province_id' => 27,
                'name' => 'Kab. Sidenreng Rappang',
            ),
            406 => 
            array (
                'id' => 407,
                'province_id' => 27,
                'name' => 'Kab. Pinrang',
            ),
            407 => 
            array (
                'id' => 408,
                'province_id' => 27,
                'name' => 'Kab. Enrekang',
            ),
            408 => 
            array (
                'id' => 409,
                'province_id' => 27,
                'name' => 'Kab. Luwu',
            ),
            409 => 
            array (
                'id' => 410,
                'province_id' => 27,
                'name' => 'Kab. Tana Toraja',
            ),
            410 => 
            array (
                'id' => 411,
                'province_id' => 27,
                'name' => 'Kab. Luwu Utara',
            ),
            411 => 
            array (
                'id' => 412,
                'province_id' => 27,
                'name' => 'Kab. Luwu Timur',
            ),
            412 => 
            array (
                'id' => 413,
                'province_id' => 27,
                'name' => 'Kab. Toraja Utara',
            ),
            413 => 
            array (
                'id' => 414,
                'province_id' => 27,
                'name' => 'Kota Makassar',
            ),
            414 => 
            array (
                'id' => 415,
                'province_id' => 27,
                'name' => 'Kota Parepare',
            ),
            415 => 
            array (
                'id' => 416,
                'province_id' => 27,
                'name' => 'Kota Palopo',
            ),
            416 => 
            array (
                'id' => 417,
                'province_id' => 28,
                'name' => 'Kab. Buton',
            ),
            417 => 
            array (
                'id' => 418,
                'province_id' => 28,
                'name' => 'Kab. Muna',
            ),
            418 => 
            array (
                'id' => 419,
                'province_id' => 28,
                'name' => 'Kab. Konawe',
            ),
            419 => 
            array (
                'id' => 420,
                'province_id' => 28,
                'name' => 'Kab. Kolaka',
            ),
            420 => 
            array (
                'id' => 421,
                'province_id' => 28,
                'name' => 'Kab. Konawe Selatan',
            ),
            421 => 
            array (
                'id' => 422,
                'province_id' => 28,
                'name' => 'Kab. Bombana',
            ),
            422 => 
            array (
                'id' => 423,
                'province_id' => 28,
                'name' => 'Kab. Wakatobi',
            ),
            423 => 
            array (
                'id' => 424,
                'province_id' => 28,
                'name' => 'Kab. Kolaka Utara',
            ),
            424 => 
            array (
                'id' => 425,
                'province_id' => 28,
                'name' => 'Kab. Buton Utara',
            ),
            425 => 
            array (
                'id' => 426,
                'province_id' => 28,
                'name' => 'Kab. Konawe Utara',
            ),
            426 => 
            array (
                'id' => 427,
                'province_id' => 28,
                'name' => 'Kota Kendari',
            ),
            427 => 
            array (
                'id' => 428,
                'province_id' => 28,
                'name' => 'Kota Baubau',
            ),
            428 => 
            array (
                'id' => 429,
                'province_id' => 29,
                'name' => 'Kab. Boalemo',
            ),
            429 => 
            array (
                'id' => 430,
                'province_id' => 29,
                'name' => 'Kab. Gorontalo',
            ),
            430 => 
            array (
                'id' => 431,
                'province_id' => 29,
                'name' => 'Kab. Pohuwato',
            ),
            431 => 
            array (
                'id' => 432,
                'province_id' => 29,
                'name' => 'Kab. Bone Bolango',
            ),
            432 => 
            array (
                'id' => 433,
                'province_id' => 29,
                'name' => 'Kab. Gorontalo Utara',
            ),
            433 => 
            array (
                'id' => 434,
                'province_id' => 29,
                'name' => 'Kota Gorontalo',
            ),
            434 => 
            array (
                'id' => 435,
                'province_id' => 30,
                'name' => 'Kab. Majene',
            ),
            435 => 
            array (
                'id' => 436,
                'province_id' => 30,
                'name' => 'Kab. Polewali Mandar',
            ),
            436 => 
            array (
                'id' => 437,
                'province_id' => 30,
                'name' => 'Kab. Mamasa',
            ),
            437 => 
            array (
                'id' => 438,
                'province_id' => 30,
                'name' => 'Kab. Mamuju',
            ),
            438 => 
            array (
                'id' => 439,
                'province_id' => 30,
                'name' => 'Kab. Mamuju Utara',
            ),
            439 => 
            array (
                'id' => 440,
                'province_id' => 31,
                'name' => 'Kab. Maluku Tenggara Barat',
            ),
            440 => 
            array (
                'id' => 441,
                'province_id' => 31,
                'name' => 'Kab. Maluku Tenggara',
            ),
            441 => 
            array (
                'id' => 442,
                'province_id' => 31,
                'name' => 'Kab. Maluku Tengah',
            ),
            442 => 
            array (
                'id' => 443,
                'province_id' => 31,
                'name' => 'Kab. Buru',
            ),
            443 => 
            array (
                'id' => 444,
                'province_id' => 31,
                'name' => 'Kab. Kepulauan Aru',
            ),
            444 => 
            array (
                'id' => 445,
                'province_id' => 31,
                'name' => 'Kab. Seram Bagian Barat',
            ),
            445 => 
            array (
                'id' => 446,
                'province_id' => 31,
                'name' => 'Kab. Seram Bagian Timur',
            ),
            446 => 
            array (
                'id' => 447,
                'province_id' => 31,
                'name' => 'Kab. Maluku Barat Daya',
            ),
            447 => 
            array (
                'id' => 448,
                'province_id' => 31,
                'name' => 'Kab. Buru Selatan',
            ),
            448 => 
            array (
                'id' => 449,
                'province_id' => 31,
                'name' => 'Kota Ambon',
            ),
            449 => 
            array (
                'id' => 450,
                'province_id' => 31,
                'name' => 'Kota Tual',
            ),
            450 => 
            array (
                'id' => 451,
                'province_id' => 32,
                'name' => 'Kab. Halmahera Barat',
            ),
            451 => 
            array (
                'id' => 452,
                'province_id' => 32,
                'name' => 'Kab. Halmahera Tengah',
            ),
            452 => 
            array (
                'id' => 453,
                'province_id' => 32,
                'name' => 'Kab. Kepulauan Sula',
            ),
            453 => 
            array (
                'id' => 454,
                'province_id' => 32,
                'name' => 'Kab. Halmahera Selatan',
            ),
            454 => 
            array (
                'id' => 455,
                'province_id' => 32,
                'name' => 'Kab. Halmahera Utara',
            ),
            455 => 
            array (
                'id' => 456,
                'province_id' => 32,
                'name' => 'Kab. Halmahera Timur',
            ),
            456 => 
            array (
                'id' => 457,
                'province_id' => 32,
                'name' => 'Kab. Pulau Morotai',
            ),
            457 => 
            array (
                'id' => 458,
                'province_id' => 32,
                'name' => 'Kota Ternate',
            ),
            458 => 
            array (
                'id' => 459,
                'province_id' => 32,
                'name' => 'Kota Tidore Kepulauan',
            ),
            459 => 
            array (
                'id' => 460,
                'province_id' => 33,
                'name' => 'Kab. Fakfak',
            ),
            460 => 
            array (
                'id' => 461,
                'province_id' => 33,
                'name' => 'Kab. Kaimana',
            ),
            461 => 
            array (
                'id' => 462,
                'province_id' => 33,
                'name' => 'Kab. Teluk Wondama',
            ),
            462 => 
            array (
                'id' => 463,
                'province_id' => 33,
                'name' => 'Kab. Teluk Bintuni',
            ),
            463 => 
            array (
                'id' => 464,
                'province_id' => 33,
                'name' => 'Kab. Manokwari',
            ),
            464 => 
            array (
                'id' => 465,
                'province_id' => 33,
                'name' => 'Kab. Sorong Selatan',
            ),
            465 => 
            array (
                'id' => 466,
                'province_id' => 33,
                'name' => 'Kab. Sorong',
            ),
            466 => 
            array (
                'id' => 467,
                'province_id' => 33,
                'name' => 'Kab. Raja Ampat',
            ),
            467 => 
            array (
                'id' => 468,
                'province_id' => 33,
                'name' => 'Kab. Tambrauw',
            ),
            468 => 
            array (
                'id' => 469,
                'province_id' => 33,
                'name' => 'Kab. Maybrat',
            ),
            469 => 
            array (
                'id' => 470,
                'province_id' => 33,
                'name' => 'Kota Sorong',
            ),
            470 => 
            array (
                'id' => 471,
                'province_id' => 34,
                'name' => 'Kab. Merauke',
            ),
            471 => 
            array (
                'id' => 472,
                'province_id' => 34,
                'name' => 'Kab. Jayawijaya',
            ),
            472 => 
            array (
                'id' => 473,
                'province_id' => 34,
                'name' => 'Kab. Jayapura',
            ),
            473 => 
            array (
                'id' => 474,
                'province_id' => 34,
                'name' => 'Kab. Nabire',
            ),
            474 => 
            array (
                'id' => 475,
                'province_id' => 34,
                'name' => 'Kab. Kepulauan Yapen',
            ),
            475 => 
            array (
                'id' => 476,
                'province_id' => 34,
                'name' => 'Kab. Biak Numfor',
            ),
            476 => 
            array (
                'id' => 477,
                'province_id' => 34,
                'name' => 'Kab. Paniai',
            ),
            477 => 
            array (
                'id' => 478,
                'province_id' => 34,
                'name' => 'Kab. Puncak Jaya',
            ),
            478 => 
            array (
                'id' => 479,
                'province_id' => 34,
                'name' => 'Kab. Mimika',
            ),
            479 => 
            array (
                'id' => 480,
                'province_id' => 34,
                'name' => 'Kab. Boven Digoel',
            ),
            480 => 
            array (
                'id' => 481,
                'province_id' => 34,
                'name' => 'Kab. Mappi',
            ),
            481 => 
            array (
                'id' => 482,
                'province_id' => 34,
                'name' => 'Kab. Asmat',
            ),
            482 => 
            array (
                'id' => 483,
                'province_id' => 34,
                'name' => 'Kab. Yahukimo',
            ),
            483 => 
            array (
                'id' => 484,
                'province_id' => 34,
                'name' => 'Kab. Pegunungan Bintang',
            ),
            484 => 
            array (
                'id' => 485,
                'province_id' => 34,
                'name' => 'Kab. Tolikara',
            ),
            485 => 
            array (
                'id' => 486,
                'province_id' => 34,
                'name' => 'Kab. Sarmi',
            ),
            486 => 
            array (
                'id' => 487,
                'province_id' => 34,
                'name' => 'Kab. Keerom',
            ),
            487 => 
            array (
                'id' => 488,
                'province_id' => 34,
                'name' => 'Kab. Waropen',
            ),
            488 => 
            array (
                'id' => 489,
                'province_id' => 34,
                'name' => 'Kab. Supiori',
            ),
            489 => 
            array (
                'id' => 490,
                'province_id' => 34,
                'name' => 'Kab. Mamberamo Raya',
            ),
            490 => 
            array (
                'id' => 491,
                'province_id' => 34,
                'name' => 'Kab. Nduga',
            ),
            491 => 
            array (
                'id' => 492,
                'province_id' => 34,
                'name' => 'Kab. Lanny Jaya',
            ),
            492 => 
            array (
                'id' => 493,
                'province_id' => 34,
                'name' => 'Kab. Mamberamo Tengah',
            ),
            493 => 
            array (
                'id' => 494,
                'province_id' => 34,
                'name' => 'Kab. Yalimo',
            ),
            494 => 
            array (
                'id' => 495,
                'province_id' => 34,
                'name' => 'Kab. Puncak',
            ),
            495 => 
            array (
                'id' => 496,
                'province_id' => 34,
                'name' => 'Kab. Dogiyai',
            ),
            496 => 
            array (
                'id' => 497,
                'province_id' => 34,
                'name' => 'Kab. Intan Jaya',
            ),
            497 => 
            array (
                'id' => 498,
                'province_id' => 34,
                'name' => 'Kab. Deiyai',
            ),
            498 => 
            array (
                'id' => 499,
                'province_id' => 34,
                'name' => 'Kota Jayapura',
            ),
        ));
        
        
    }
}