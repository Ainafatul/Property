<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('articles')->delete();

        \DB::table('articles')->insert(array (
            0 =>
            array (
                'id' => 1,
                'author' => '7',
                'title' => 'Bagaimana Menarik Dana Tapera Untuk Pekerja Yang Di-PHK?',
            'content' => 'Pemerintah telah mengeluarkan aturan teknis utuk penerapan program Tabungan Perumahan Rakyat (Tapera) sebagai amanat dari UU No. 1 Tahun 2011 mengenai perumahan dan kawasan permukiman. Tapera akan dikelola oleh Badan Pengelola (BP) Tapera yang akan memungut gaji setiap pekerja di Indonesia sebesar tiga persen/bulan (2,5 persen dari pekerja, 0,5 persen dari perusahaan).

Untuk awalnya, Tapera akan diberlakukan bagi kalangan aparatur sipil negara (ASN) menyusul kemudian kalangan TNI-Polri dan pekerja BUMN, BUMD, BUMDes, baru setelah itu pekerja swasta dan pekerja mandiri (informal). Transisi hingga diberlakukan untuk pekerja swasta hingga tujuh tahun ke depan kendati tidak menutup kemungkinan bila pekerja ingin mulai terdaftar Tapera sejak saat ini.

Sejak beberapa minggu lalu, pihak BP Tapera terus melakukan edukasi dan sosialisasi mengenai program Tapera ini terlebih dengan banyaknya pro maupun kontra dari berbagai kalangan. Salah satu yang juga mengemuka yaitu bagaimana untuk peserta yang terkena pemutusan kerja (PHK) atau mengundurkan diri dari kepersertaan Tapera?

Menurut Deputi Komisioner Bidang Pemanfaatan Dana BP Tapera Ariev Baginda Siregar, untuk pekerja yang terkena PHK tidak bisa serta merta dananya bisa langsung cair. Sesuai aturan dalam PP No. 25 Tahun 2020 tentang Tapera, ada beberapa kriteria untuk peserta bisa mencairkan dana iuran Tapera-nya.

“Jadi dana Tapera ini bisa cair kalau peserta sudah masuk usai pensiun atau telah mencapai usia 58 tahun, peserta meninggal dunia, dan pekerja yang tidak bisa lagi memenuhi kriteria sebagai peserta selama lima tahun atau yang tidak bisa lagi mencicil. Program Tapera ini bukan seperti tabungan yang bisa buka-tutup setiap saat, kalau seperti itu jadinya risky dan fluktuatif, makanya diatur menunggu selambatnya lima tahun,” jelasnya.

Karena itu menurut Ariev, bila ada pekerja yang di-PHK dan dalam waktu 1-2 tahun mendapatkan pekerjaan baru di perusahaan lain, diharapkan kalangan seperti ini bisa tetap melanjutkan iurannya. Dengan begitu kendati di-PHK tidak bisa langsung keluar dari kepersertaannya karena kalau diterima di perusahaan baru dia bisa continue lagi.

Sementara untuk pekerja yang memang memasuki masa pensiun atau meninggal dunia maka dananya bisa langsung cair dalam waktu dekat. Hal tersebut tertera dalam aturan teknis di pasal 24 PP No. 25 Tahun 2020. Pengembalian yang diterima juga sudah memasukan unsur dana pemupukannya.

“Simpanan dari pekerja yang sudah pensiun atau meninggal dunia itu paling lama prosesnya tiga bulan setelah kepersertaannya berakhir, itu tertera di aturan ayat 2 pasal 24 PP No. 25 Tahun 2020. Jadi selain pemupukan, penyaluran, dana cadangan, untuk pengembalian dana juga semuanya sudah diatur, jadi tidak bisa serta merta ditarik karena ini sifatnya untuk dana jangka panjang,” imbuh Ariev.',
                'image' => 'storage/image/article/1593423072.jpeg',
                'created_at' => '2020-06-29 09:31:12',
                'updated_at' => '2020-06-29 09:31:12',
            ),
            1 =>
            array (
                'id' => 2,
                'author' => '7',
                'title' => 'Tips Membuat Rumah Yang Ramah Bagi Disabilitas',
                'content' => 'Kebutuhan setiap orang tentu berbeda-beda. Antara orang tua dan mudah tentu memiliki kebutuhan yang berbeda-beda. Demikian halnya bagi kaum disabilitas, mereka tentu memerlukan kebutuhan yang cukup berbeda dengan yang lainnya, termasuk di dalam rumah.

Ada beberapa hal yang harus dipenuhi oleh sebuah rumah agar nyaman bagi disabilitas. Pertama tentu adalah kemudahan akses ke ruang-ruang di dalam rumah. Kedua adalah kenyamanan mereka saat beraktivitas, dan ketiga adalah keamanan rumah.

Salah satu konsep rumah yang sesuai dengan kebutuhan kaum disabilitas adalah Universal Design karya seorang arsitek bernama Ronald L. Mace.

Ronald membangun rumah tersebut atas dasar bahwa sebuah desain rumah harus sesuai dengan kebutuhan penghuni, bukan malah sebaliknya. Lalu bagaimana fitur dari rumah ini? Berikut adalah ulasannya.

1. Jalan Menuju Pintu Utama Harus Lebar, Landai, Dan Tidak Ada Halangan
Fitur rumah ini khusus bagi pengguna kursi roda. Mereka mungkin akan kesulitan mengakses rumah jika jalan yang dilalui kurang luas dan banyak halangan. Oleh karena itu membuat akses jalan yang lebar dan tanpa halangan akan sangat baik bagi mereka.

Namun penyesuaian ini berguna juga hal lain seperti untuk memudah mereka para lansia, barang dengan ukuran bisa masuk, serta anak kecil tetap aman bermain tanpa khawatir terjatuh.

2. Mengganti Tuas Pintu
Membuka sebuah pintu memang menjadi kesulitan tersendiri bagi kaum disabilitas. Oleh karena itu untuk kemudahan mereka, bisa mengganti tuas pintu putar menjadi model tuas pegangan yang didorong ke bawah.

Tuas tersebut tentu lebih mudah digunakan bagi kaum difabel. Hanya perlu sedikit dorongan ke bawah agar pintu bisa terbuka.  Pintu geser juga menjadi salah satu pilihan bagi kaum disabilitas.

Dengan adanya pintu geser tentu ruang gerak saat melewati pintu akan menjadi lebih luas jika dibandingkan dengan pintu dorong. Terlebih pintu geser memberi ruang yang lebih lebar sehingga bisa dilalui walau menggunakan kursi roda sekalipun.

3. Area Parkir Yang Lebih Luas
Area parkir yang luas tentu memudahkan para pengguna kursi roda untuk dapat bergerak lebih leluasa. Terlebih jika sedang naik turun mobil tentu membutuhkan ruang yang lebih luas.

Selain itu karena ini adalah konsep Universal Design, maka area parkir bisa digunakan untuk banyak hal lain. Bisa untuk tempat bermain anak, tempat bersantai bagi orang tua, dan banyak lagi lainnya.

4. Rak Harus Disesuaikan Tingginya
Rak yang biasa diletakkan di kamar dan dapur tentu perlu penyesuaian agar lebih mudah terjangkau. Ukuran yang tepat tentu membuat kaum disabilitas lebih mudah untuk memanfaatkannya.

Hal ini juga berlaku bagi orang tua agar mereka tidak kesulitan untuk menaruh atau mengambil barang dari rak.

5. Pintu Ruangan Yang Lebih Luas
Selain pintu utama, beberapa pintu lainnya perlu juga disesuaikan agar mudah digunakan oleh mereka yang menggunakan kursi roda. Sebaiknya, buatlah pintu yang lebih luas agar mudah dilewati.

Selain itu beberapa ruang seperti kamar mandi juga butuh diperluas, agar bisa dimanfaatkan dengan baik.

6. Menyesuaikan Ketinggian Meja Dapur
Bagi para kaum disabilitas, tentu aktivitas di dapur tetap harus dilakukan. Oleh karena itu menyesuaikan tinggi meja di dapur penting untuk diterapkan.

Hal ini agar alat-alat di atas meja lebih mudah terjangkau dan tetap nyaman saat sedang memasak. Dapur juga harus diperluas agar pengguna kursi roda tetap nyaman bergerak.',
                'image' => 'storage/image/article/1593423213.jpeg',
                'created_at' => '2020-06-29 09:33:33',
                'updated_at' => '2020-06-29 09:33:33',
            ),
            2 =>
            array (
                'id' => 3,
                'author' => '7',
                'title' => 'Produk Ready Stock Hingga Protokol Covid Lebih Dicari Konsumen Saat Pandemi',
            'content' => 'Ada berbagai tren baru yang muncul terkait produk properti yang lebih banyak dicari saat merebaknya pandemi Coronavirus Disease 2019 (Covid-19) sejak beberapa bulan lalu. Penerapan berbagai normal baru atau new normal untuk mengurangi dampak penularan virus ini memunculkan produk-produk properti yang lebih spesifik yang dicari pasar.

Menurut CEO AKR Land Development Thomas Go, sebagai pengembang harus jeli membaca perubahan situasi  pasar khususnya saat terjadi banyak  kendala akibat wabah ini. Pola-pola penjualan maupun produk yang ditawarkan saat situasi normal tidak bisa lagi dijadikan andalan untuk membukukan penjualan.

“Saat pandemi ini banyak masyarakat yang mencari hunian khususnya dengan pertimbangan risk free product dan itu artinya produk-produk yang sudah siap atau ready stock yang lebih banyak dicari. Saat ini untuk produk-produk highres yang ditawarkan indent atau produk  kondotel itu cenderung dihindari, makanya kita juga perbanyak produk-produk yang siap huni seperti itu,” ujarnya.

Pandemi juga membuat ada perubahan segmen konsumen yang lebih mementingkan keamanan ketimbang instrumen investasi. Kalaupun bukan produk ready stock, konsumen akan lebih detil menanyakan kepastian progres pembangunan maupun jadwal selesai dan serah terimanya.

Selain itu pertimbangan lainnya, konsumen menjadi lebih realistis dengan kemampuan membeli maupun kesanggupan cicilan tiap bulannya. Pada situasi ini akhirnya idiom lokasi-lokasi-lokasi tidak lagi menjadi pertimbangan utama yang membuat sebuah produk properti lebih unggul tapi yang lebih diutamakan keamanan dan faktor kemampuan finansial.

Bila dirinci lagi, segmen konsumen end user yang akan menggunakan propertinya akan mencari produk dengan harga berkisar Rp10 juta-Rp20 juta per meter persegi untuk kalangan menengah. Untuk segmen menengah bawah harga yang disasar umumnya di bawah Rp7 juta/m2.

Pertimbangan lain yang dicari konsumen adalah aksesibilitas dan tersedianya sarana fasilitas transportasi publik. Jadi produk hunian jenis apartemen bisa saja dicari tapi yang lokasinya dekat dengan transportasi publik sehingga bisa menghemat biaya untuk pulang-pergi dari rumah ke kantor.

“Ada juga kriteria yang lain yaitu produk properti yang dikelola secara higienis atau yang menerapkan protokol saat pandemi Covid-19 ini. Pengembang yang menerap protokol kesehatan membuat konsumen merasa lebih aman dan nyaman dan tren baru terkait kebutuhan konsumen seperti ini yang juga kami terapkan,” tandas Thomas.',
                'image' => 'storage/image/article/1593423287.jpeg',
                'created_at' => '2020-06-29 09:34:47',
                'updated_at' => '2020-06-29 09:34:47',
            ),
            3 =>
            array (
                'id' => 4,
                'author' => '7',
                'title' => 'Teknologi AntiMikroba Melindungi Rumah Dari Corona',
            'content' => 'Organisasi Kesehatan Dunia, World Health Organization (WHO) telah memperingatkan bahwa COVID-19 berpotensi menjadi endemik dalam waktu lama. Ini artinya virus corona sementara ini akan selalu ada di populasi manusia, di manapun berada, termasuk juga rumah. Artinya penting untuk melindungi kesehatan kita dari ancaman virus, termasuk juga rumah.

Michael Ryan sebagai Direktur Kedaruratan WHO menyatakan bahwa dunia perlu mempersiapkan diri dalam pertempuran jangka panjang, pada jumpa pers virtual di Jenewa, Swiss. Sejumlah faktor memengaruhi bagaimana virus ini dapat kita kendalikan ke depannya, seperti protokol kesehatan, penemuan obat hingga vaksin.

Meskipun vaksin adalah peluang terbaik untuk menangani virus ini, ada sejumlah besar ketidakpastian hingga berdampak pada perpanjangan waktu yang dibutuhkan untuk mengurangi angka penyebaran. Saat ini dibutuhkan kerja sama semua pihak mulai dari pemerintah, masyarakat, hingga pihak swasta untuk gotong royong dalam menangani pandemi COVID-19.

Nippon Paint, salah satu perusahaan cat terkemuka juga turut berpartisipasi dengan mengembangkan inovasi pada produk cat dan pelapisnya. Nippon Paint China meluncurkan Anti-Virus Kids Paint yang telah diuji dapat membunuh hampir 100% Feline Calicivirus (FCV) atau sejenis strain dari Coronavirus yang sangat menular dan menyerang sistem pernapasan.

Bahkan pada 1 Maret 2020, Nippon Paint China juga telah menyumbangkan Anti-Virus Kids Paint ke rumah sakit di Provinsi Hubei, Tiongkok. Kemudian 18 Mei 2020 lalu, Tokyo University dan Nippon Paint Holdings menyepakati perjanjian kerja sama untuk Research & Development pada teknologi yang mencegah penyebaran COVID-19.

Perjanjian itu termasuk pelapis anti-virus dan teknologi untuk solusi masalah kesehatan yang muncul saat dan setelah wabah berakhir, dengan tema “Establish of Innovative Coating Technologies”.

Masaaki Tanaka, CEO Nippon Paint Holdings mengatakan, “Kami berharap upaya yang dilakukan, khususnya pada pengembangan teknologi cat dan pelapis akan berkontribusi untuk memastikan bahwa masyarakat dapat hidup dengan aman dan nyaman.”

Selain China dan Jepang, Nippon Paint Singapura juga meluncurkan VirusGuard+ yang dilengkapi antimikroba untuk menghancurkan virus dan bakteri pada dinding. VirusGuard+ mampu melakukan enkapsulasi pada virus dan bakteri yang menempel pada dinding.',
                'image' => 'storage/image/article/1593423339.webp',
                'created_at' => '2020-06-29 09:35:39',
                'updated_at' => '2020-06-29 09:35:39',
            ),
            4 =>
            array (
                'id' => 5,
                'author' => '7',
                'title' => 'Lindung Rumah Dengan Teknologi AntiMikroba',
                'content' => 'Dengan berbagai perkembangan inovasi cat dan pelapis oleh China, Jepang, dan Singapura, Nippon Paint Indonesia juga melakukan Research & Development dengan Teknologi Silver-Ion. Beberapa penelitian membuktikan Silver-Ion efektif sebagai antimikroba yang telah dimanfaatkan sejak lama untuk pengobatan maupun pelapis peralatan medis.

Silver-Ion sebagai antimikroba dapat membasmi mikroorganisme dengan penetrasi, menghentikan reproduksi dan metabolisme, lalu menghancurkan mikroorganisme tersebut. Daya antimikroba pada Silver-Ion bertahan lama sehingga senyawa ini efektif dalam melawan kuman.

Nippon Paint Indonesia telah mengaplikasikan Teknologi Silver-Ion pada Nippon Vinilex Fresh sejak tahun 2005 yang digunakan pada bangunan rumah sakit (project based). Kemudian di tahun 2018, teknologi ini diperkenalkan pada customer retail melalui Nippon Spot-Less Plus – cat interior segmen premium dengan fungsi anti-noda dan anti-kuman. Kini, Silver-Ion hadir dalam Vinilex Anti-Kuman – cat interior segmen menengah sejak April 2020 lalu.

Jon Tan, CEO (Decorative Paints) Nippon Paint Indonesia mengatakan, “Vinilex Anti-Kuman dengan Silver-Ion untuk segmen menengah diluncurkan saat ini untuk membantu terciptanya rumah sehat yang terjangkau oleh seluruh keluarga Indonesia. Ini adalah bentuk kontribusi Nippon Paint sebagai pemimpin industri cat dan pelapis di Indonesia untuk memerangi penyebaran penyakit di tengah pandemic COVID-19.”

Dengan demikian, inovasi cat dan pelapis ini dapat menjawab kebutuhan masyarakat akan perlindungan untuk bangunan yang aman dan nyaman. Jon Tan juga berharap ke depannya inovasi pada industri cat dan pelapis ini dapat meningkatkan kesadaran, mengedukasi dan memberdayakan masyarakat Indonesia untuk menciptakan lingkungan yang bukan saja indah, bersih, tetapi juga aman dan sehat.',
                'image' => 'storage/image/article/1593423376.jpeg',
                'created_at' => '2020-06-29 09:36:16',
                'updated_at' => '2020-06-29 09:36:16',
            ),
            5 =>
            array (
                'id' => 6,
                'author' => '7',
                'title' => 'Broker Properti Belum Rasakan Kenaikan Transaksi Di Masa PSBB Transisi',
            'content' => 'Ketua Dewan Perwakilan Daerah (DPD) Asosiasi Real Estate Broker Indonesia (AREBI) DKI Jakarta Clement Francis berujar, meskipun telah ada pelonggaran aktivitas masyarakat, tapi kondisinya masih berat bagi para broker properti.

“Belum ada kenaikan penjualan. Kondisi masih slow. Daya beli (masyarakat) masih turun,” uajr Clement, seperti dikutip dari Bisnis.com, Jumat, 26 Juni 2020.

Clement melanjutkan, dirinya belum bisa memprediksi kapan pasar properti akan kembali bergairah jika kondisinya masih seperti ini. Terlebih, virus korona juga belum bisa diatasi dan jumlah kasus positif terus bertambah.

Namun begitu, peluang di tengah kondisi berat ini sebenarnya masih terbuka lebar. Bagi para broker, hal ini adalah peluang sekaligus tantangan, mengingat suplai pun masih tersedia untuk segala subsektor properti.

“Dengan kondisi masih berat, kalau ditanya rumah di bawah Rp2 miliar masih ada yang mau beli,” kata dia.

Sejalan dengan itu, Clement tak menampik industri properti Indonesia mengalami pergeseran akibat pandemi Covid-19. Satu hal yang terlihat jelas adalah mulainya penjualan secara daring untuk meminimalkan konsumen yang masih takut survei lokasi.

Selain itu, broker pun dituntut menyediakan daftar penjualan yang lebih lengkap untuk ditawarkan. Lalu mengampanyekan bahwa sekarang adalah waktu yang tepat untuk membeli properti karena banyaknya potongan harga, baik di pasar primer maupun sekunder.

Untuk pengembang, ia menyarankan agar mereka terus berinovasi dan mengedepankan kualitas bangunannya yang juga didukung dengan fasilitas yang relevan dengan kondisi saat ini.

Adapun PSBB transisi sebenarnya membawa harapan baru bagi sektor properti. Namun, tergantung pada cara untuk menggaet calon pembeli. Clement mengilustrasikan, belakangan ini sebetulnya banyak orang yang mencari rumah, terlebih melalui portal properti. Tinggal bagaimana portal itu bisa mengeksekusi menjadi transaksi.

Hal serupa dilontarkan Sekretaris Jenderal DPP AREBI Sulihin Widjaja. Menurutnya, sejauh ini transaksi properti masih minim. Namun, ada sisi positif, yaitu konsumen mulai bisa datang ke lokasi survei untuk melihat langsung properti tersebut dengan tetap mengedepankan protokol kesehatan.

“Kalau transaksi belum terlalu signifikan, tapi harapan untuk lebih baik sudah ada dan semoga segera pulih. [Faktor yang menghambat] nilai plafon yang diberikan bank yang agak turun sehingga mereka [konsumen] tidak dapat memenuhi DP [down payment]-nya itu sih, faktor dominannya. Namun, kalau ada barang [properti] murah, tetap saja dibeli juga,” tuturnya.

Masa perbaikan untuk sektor properti sendiri diharapkan segera terjadi. Pasalnya, perbandingan penjualan pada masa sebelum dan sesudah ada Covid-19 terlampau jauh. Sulihin mengaku, broker juga banyak yang tidak melakukan closing. Rata-rata closing atau transaksi per bulan hanya 20 hingga 40 persen.

Lelaki yang juga menjabat sebagai Chief Executive Officer Promex Indonesia itu juga belum bisa meramal apakah pasar properti bisa kembali normal dalam waktu dekat, meskipun aktivitas ekonomi berjalan kembali.

Perekonomian yang mulai bergerak ini, Sulihin mengatakan, seharusnya bisa membangkitkan pasar properti meskipun tak langsung pulih 100 persen. Minimal ada pergerakan dan pasar sudah mulai bergeliat walaupun masih terbatas.',
                'image' => 'storage/image/article/1593423422.jpeg',
                'created_at' => '2020-06-29 09:37:02',
                'updated_at' => '2020-06-29 09:37:02',
            ),
            6 =>
            array (
                'id' => 7,
                'author' => '7',
                'title' => 'Ini Solusi Pendingin Ruangan Yang Tepat Untuk Rumah Anda',
                'content' => 'Cuaca yang panas sering membuat siapa saja kesusahan. Melakukan berbagai hal di dalam rumah saja menjadi terasa sangat malas. Bergerak sedikit saja maka hawa panas dan keringat yang bercucuran tidak bisa dihindari. Untuk itu, solusi yang tepat untuk mengatasi hawa panas di dalam rumah adalah dengan memasang pendingin ruangan.

Namun, sebelum benar-benar memutuskan untuk memasukkan sistem pendingin ruangan di rumah, Anda tidak boleh asal menggunakan AC tersebut. Anda harus mengetahui dan memastikan bahwa pemilihan AC sudah tepat sesuai dengan kebutuhan.

Hal ini dikarenakan penggunaan AC dinilai cukup mahal, terlebih jika tidak cocok dengan kondisi ruangan. Belum lagi biaya AC, pemasangan, tagihan listrik, dan perawatan, tentu biaya yang dikeluarkan akan semakin besar nantinya. Untuk itu, kali ini Anda mengetahui kelebihan dan kekurangan berbagai jenis pendingin udara sebelum memutuskan memilih AC untuk rumah.

Pendingin Udara Portable (AC Portable)
Pendingin Ruangan yang Tepat di Rumah

AC portable sangat cocok digunakan untuk kamar tidur rumah Anda. AC ini menggunakan lebih sedikit energi, ukuran lebih kecil, harga lebih murah, serta lebih mudah digunakan dibanding dengan AC pada umumnya. Anda Tidak perlu merusak tembok untuk memasang AC, karena dengan AC portable ini bisa dipindahkan kemana saja layaknya kipas angin.

Kelebihan:
Tidak memerlukan instalasi yang rumit, pemasangan tidak perlu membobok dinding tembok.

AC portable bisa dipindah-pindah sesuai kebutuhan.

Harga AC portable lebih murah dibandingkan dengan AC konvensional.

Kekurangan:
Ketika digunakan maka AC portable menimbulkan suara berisik yang bisa mengganggu.

AC portable membutuhkan area pembuangan udara panas agar bisa tetap menjaga kesejukan ruangan.

Lebih rawan rusak jika terlalu sering dipindah-pindah.

Daya listrik lebih besar, terutama pada hentakan pertama maka AC portable lebih besar daripada AC konvensional.

Pendingin Udara Domestik (AC Domestik)
Pendingin Ruangan yang Tepat di Rumah

AC Domestik ini memiliki sistem yang terdiri dari unit luar dan memiliki kipas di bagian dalamnya. Kemudian kipas ini dihubungkan ke unit dalam ruangan melalui dua pipa yang terisolasi dan mengandung zat pendingin. AC jenis ini cukup fleksibel karena dapat diletakkan di mana saja. Misalnya di plafon, langit-langit ruangan, di atas lemari, dan di dekat pintu. AC domestik lebih banyak digunakan pada area hotel karena memiliki kamar khusus yang cukup banyak.

Kelebihan:
Tersedia dalam berbagai macam bentuk dan ukuran

Tersedia dalam berbagai tingkat kompleksitas dari AC ruangan tunggal hingga unit multi split

Meski dikontrol secara individual, namun Anda bisa langsung melakukan pemanasan atau pendinginan dari satu hingga delapan lokasi sekaligus

Kekurangan:
Sistem sederhana dirancang untuk aplikasi kamar tunggal yang memiliki satu unit outdoor dan satu unit indoor.

Kapasitas pemanasan maksimum sebesar 12 kW

Setiap unit dalam ruangan dikontrol secara individual

Lebih membutuhkan pasokan listrik

Mechanical Ventilation With Heat Recovery (MVHR)
Sistem MVHR dirancang untuk membuat sebuah ruangan menjadi lebih sejuk dengan ventilasi. Sistem ini akan membuat sirkulasi udara, agar suhu ruangan bisa tetap sesuai dengan yang diinginkan. Unit MVHR memiliki kompresor mikro dan pompa untuk mengatur suhu dalam ruang.',
                'image' => 'storage/image/article/1593423523.jpeg',
                'created_at' => '2020-06-29 09:38:43',
                'updated_at' => '2020-06-29 09:38:43',
            ),
            7 =>
            array (
                'id' => 8,
                'author' => '7',
                'title' => 'Pengembang Nilai Sektor Properti Masih Lemah Di Semester II-2020',
            'content' => 'Salah satunya adalah Direktur PT Metropolitan Land Tbk (MTLA) Olivia Surodjo. Ia berujar, pendapatan prapenjualan (marketing sales) tahun 2020 bakal meleset dari perkiraan. Tahun ini, Metland menargetkan marketing sales Rp 2,1 triliun, tak jauh beda dengan pencapaian tahun lalu.

MTLA sendiri pada kuartal I-2020 baru membukukan marketing sales Rp250 miliar. Nilai realisasi yang teramat kecil itu disebabkan belum adanya peluncuran proyek baru akibat Covid-19.

“Untuk target resmi belum kami revisi tapi memang akan estimasi kami tahun ini akan meleset dari target akibat Covid-19,” tutur Olivia, sebagaimana dikutip dari Kontan, Jumat 26 Juni 2020.

Menurut Olivia, kondisi semester dua memang akan lebih baik daripada semester I-2020. Namun bila dibandingkan dengan semester II tahun lalu, kondisinya masih cenderung lebih buruk.

Namun begitu, MTLA masih akan mengoptimalisasi promosi lewat pemasaran digital. Salah satu strateginya adalah program Book Now, Pay Later Deals. Program ini menjadi upaya MTLA menangkap kesulitan pada konsumen yang 85 persen merupakan end-user untuk melakukan proses KPR di situasi seperti sekarang.

Sementara itu, Direktur PT Ciputra Development Tbk (CTRA) Tulus Santoso mengatakan, pihaknya terus memonitor perkembangan pasar di era new normal saat ini, Sebab, masih terlalu dini untuk melakukan prediksi.

Meski terdengar optimis, tapi CTRA akan merevisi target marketing sales-nya. “Kami akan revisi tetapi masih dihitung,” kata dia.

Kendati begitu, kinerja CTRA di kuartal I-2020 sebetulnya masih tumbuh. Per kuartal I-2020 marketing sales tumbuh 2,7 persen year-on-year menjadi Rp 1,14 triliun. Ini setara 17 persen dari target tahun ini yang sebesar Rp6,7 triliun.

Untuk diketahui, pada kuartal II-2020 CTRA menargetkan bisa mengantongi marketing sales sebesar Rp 1,25 triliun.',
                'image' => 'storage/image/article/1593423590.jpeg',
                'created_at' => '2020-06-29 09:39:51',
                'updated_at' => '2020-06-29 09:39:51',
            ),
            8 =>
            array (
                'id' => 9,
                'author' => '7',
                'title' => 'Atur Hak Bawah Tanah Dan Atas Tanah, Akan Ada Status HGRBT, Apa Itu?',
            'content' => 'Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional (ATR/BPN) tengah menggodok aturan untuk pemanfataan ruang bawah tanah dan ruang atas tanah. Secara aktif, Kementerian ATR/BPN menggandeng berbagai pihak dari Kementerian Pekerjaan Umum dan Perumahan Rakyat (PUPR), praktisi dan ahli hukum, Kanwil Pertanahan Pemprov DKI Jakarta dan daerah lain, dan berbagai kalangan lainnya.

Menurut Kepala Pusat Penelitian dan Pengembangan (Kapuslitbang) Kementerian ATR/BPN Oloan Sitorus, kajian pemanfaatan ruang bawah tanah dan ruang atas tanah ini sangat penting karena telah menjadi kebutuhan di berbagai kota besar dan kebutuhannya terus meningkat dari hari ke hari.

“Diperlukan aturan untuk memastikan penggunaan ruang bawah tanah dan ruang atas tanah. Ragam kebutuhannya juga terus berkembang bukan hanya untuk kebutuhan jalur transportasi tapi juga untuk kegiatan bisnis yang lain sehingga harus diatur karena kalau tidak bisa menjadi potensi kerugian untuk negara,” ujarnya.

Aturan ini juga telah dimasukkan ke dalam RUU Pertanahan maupun draft RUU Cipta Kerja yang saat ini tengah dibahas di DPR bersama pemerintah. Menurut Oloan, dalam RUU Pertanahan sudah diatur juga mengenai hak guna ruang atas dan bawah tanah begitu juga dalam RUU Cipta Kerja. Kajian lebih lanjut tetap dibutuhkan untuk menghasilkan gagasan-gagasan yang produktif.

Masih bingung perbedaan antara SHM dan HGB dalam properti? Simak informasi selengkapnya di videonya berikut ini.



Peneliti Ahli Madya Puslitbang Kementerian ATR/BPN Trie Sakti menambahkan, kebutuhan atas pengaturan hak ruang atas dan ruang bawah tanah, serta meningkatnya kegiatan pembangunan membuat aspek penyediaan tanah sebagai salah satu faktor yang sangat penting untuk kegiatan pembangunan.

“Kendala terkait ketersediaan tanah harus dilakukan maksimalisasi untuk wilayah perkotaan seperti hunian yang dirancang vertikal ke atas berupa rumah susun atau apartemen. Untuk sarana transportasi juga harus menerapkan transportasi masal seperti proyek LRT yang sedang dibangun,” katanya.

Kembali kepada pemanfaatan ruang bawah tanah maupun atas tanah, perlu dibentuk sebuah lembaga hukum baru dengan sebutan Hak Guna Ruang Atas Tanah dan Bawah Tanah dengan istilah HGRBT. Lembaga baru ini nantinya bisa memberikan wewenang pada pemegang hak untuk memiliki dan membangun dalam bagian tubuh bumi tertentu dengan status HGRBT.

“Ada tiga hal yang saat ini belum bisa berjalan yaitu menunggu lembaga hukum baru serta memberikan tiga hak atas tanah terhadap pemanfaatan ruang bawah tanah tersebut. Yaitu hak atas permukaan bumi sebagai tiang pancang atau membuat lorong masuk, hak atas pemilikan bangunan di bawah atau atas tanah, dan hak memakai ruang selongsongannya,” jelas Trie.',
                'image' => 'storage/image/article/1593423673.jpeg',
                'created_at' => '2020-06-29 09:41:13',
                'updated_at' => '2020-06-29 09:41:13',
            ),
            9 =>
            array (
                'id' => 10,
                'author' => '7',
                'title' => 'Pemulihan Sektor Properti Tergantung Pada Hal Ini',
                'content' => 'Sektor properti sendiri dinilai tak akan cepat pulih meskipun ada katalis positif, yakni pelonggaran pembatasan sosial dan jelang fase kenormalan baru atau ‘new normal’. Sebab, untuk pulih diperlukan sejumlah faktor, salah satunya dukungan stimulus yang bisa membuat sektor ini terus bergerak.

“Diperkirakan semester kedua tidak akan terlihat pemulihan di sektor properti,” ujar Wendy, sebagaimana dikutip dari Bisnis.com, Kamis, 25 Juni 2020.

Wendy menjelaskan, akhir-akhir ini para pengembang pun sudah menanggung beban dari sisi pengeluaran. Pada saat yang bersamaan, penjualan tetap tidak terserap maksimal.

Selain itu, pengembang juga memiliki banyak mengeluarkan untuk menggenjot pemasaran, mengingat aktivitas penjualan terbatas, meskipun saat ini pendekatan dapat melalui sarana digital.

Sektor properti, menurut Wendy, sebenarnya butuh stimulus lain untuk mengakselerasi pemulihan dengan cepat. Terlebih adanya pemangkasan suku bunga acuan Bank Indonesia menjadi 4,25 persen yang juga menjadi hal positif untuk membantu arus kas. Namun, upaya tersebut dinilai belum cukup untuk mendorong pemulihan di sektor ini.

“Untuk pemulihan yang cukup cepat, dibutuhkan beberapa stimulus yang dapat segera dijalankan, salah satunya adalah penurunan NJOP [nilai jual objek pajak], percepatan perizinan, pengurangan peraturan pembangunan, dan lainnya,” ucap Wendy.



Sementara itu, peluang sektor properti untuk beberapa waktu ke depan sebenarnya masih terbuka. Sejumlah segmen selain rumah tapak masih potensial. Hanya saja, semua kembali lagi pada strategi pengembang, salah satunya terkait segmen apa yang ingin disasar.

“Apartemen murah dekat dengan stasiun transportasi massal, ukuran kecil, dan harga terjangkau akan amat diminati,” kata dia.

Perihal stimulus, DPP Persatuan Perusahaan Realestat Indonesia (REI) menyampaikan pihaknya meminta relaksasi di bidang perpajakan yang dinilai bisa menyelamatkan industri properti di tengah adangan pandemi Covid-19.

REI meminta penurunan pajak penghasilan final transaksi dari 2,5 persen menjadi 1 persen berdasarkan nilai aktual transaksi bukan berdasarkan NJOP. Lalu REI juga meminta peninjauan kembali pajak penjualan atas barang mewah dan pajak pertambahan nilai.

Kemudian, REI pun menginginkan penghapusan atau keringanan pajak bumi dan bangunan, bea perolehan hak atas tanah dan bangunan, pajak penerangan jalan umum, tidak ada kenaikan NJOP serta relaksasi lainnya.',
                'image' => 'storage/image/article/1593423754.jpeg',
                'created_at' => '2020-06-29 09:42:34',
                'updated_at' => '2020-06-29 09:42:34',
            ),
            10 =>
            array (
                'id' => 11,
                'author' => '7',
                'title' => 'Terapkan Strategi Tepat, Pengembang Masih Bisa Jualan Dengan Baik Saat Pandemi',
            'content' => 'Dengan menerapkan strategi yang tepat, kalangan pengembang nyatanya masih bisa membukukan penjualan relatif baik di saat pandemi Coronavirus Disease 2019 (Covid-19). Salah satu proyek perumahan yang masih bisa berjualan cukup baik saat pandemi ini yaitu The Golden Stone di Jalan Pusdiklat Pemda, Serpong, Tangerang, Banten, hasil pengembangan GNA Marco KSO.

Menurut Tirta Setiawan, Presiden Direktur PPC yang memasarkan proyek The Golden Stone, ada beberapa faktor yang memuat produk perumahan ini masih bisa dipasarkan dengan baik. “Kita menanamkan mindset positif untuk setiap awak marketing dan kenyataan kalau perumahan masih sangat dibutuhkan dan pasarnya sangat besar. Pandemi tidak akan menghilangkan kenyataan tersebut,” ujarnya.

Faktor lainnya, membuat produk yang sesuai dengan selera dan kebutuhan pasar dengan mengusung fasilitas dan model kekinian. Karena itu fasad rumah di The Golden Stone dibuat bergaya modern dengan balutan corak natural sehingga tampilannya sangat mewah. Model seperti ini masih sangat disukai pasar.

Kemudian untuk menarik minat konsumen, dihadirkan produk yang tepat yang dibutuhkan oleh pasar sesuai dengan segmennya. Misalnya, The Golden Stone melansir tipe rumah kompak 48/50 yang sudah mencakup tiga kamar tidur seharga di bawah Rp700 juta. Untuk model rumah yang keren, layout yang memenuhi kebutuhan sehingga bisa langsung ditempati, dan segmen pricing terjangkau untuk kawasan Serpong, berbagai hal ini yang langsung diserap oleh pasar.

Siasat lainnya menerapkan layout dengan pembatas ruang menggunakan material kaca untuk kesan ruang tampak lebih luas. Banyaknya kamar juga bisa digunakan untuk ruang kerja yang mendukung pola kerja di rumah atau work from home (WFH) di saat pandemi ini.

“Saat pandemi ini juga kami justru meningkatkan program promosi karena seluruh kelebihan maupun keunggulan produk ini harus tersampaikan kepada konsumen yang kami sasar. Kami bahkan menambahkan tim kreator untuk mendukung program-program promosi yang kami hadirkan dan itu semua ditangkap dan diserap oleh pasar,” bebernya.',
                'image' => 'storage/image/article/1593423814.jpeg',
                'created_at' => '2020-06-29 09:43:34',
                'updated_at' => '2020-06-29 09:43:34',
            ),
            11 =>
            array (
                'id' => 12,
                'author' => '7',
                'title' => 'Tren Terbaru Sistem Keamanan Berteknologi Canggih',
                'content' => 'Dalam setiap hunian, tentu semua orang ingin merasa nyaman dan aman. Itu sebabnya penghuni rumah perlu menyediakan sistem keamanan berteknologi canggih yang dapat memberikan keamanan rumahnya.

Teknologi terus berkembang mengikuti tren yang ada. Sistem teknologi keamanan juga semakin hari terus dikembangkan dan diciptakan guna memberikan keamanan hunian. Berikut adalah beberapa pilihan teknologi keamanan terbaru yang bisa menjadi referensi bagi Anda.

Radar Motion Detector (Pendeteksi Gerak)
Sistem Keamanan Canggih

Radar Motion Detector adalah salah satu sistem keamanan dengan teknologi canggih yang dapat mendeteksi gerak penghuni atau tamu yang datang. Alat ini berfungsi untuk mendeteksi objek apapun yang bergerak, khususnya adalah pergerakan orang. Alat ini dapat secara otomatis memberikan peringatan apabila ada pergerakan mencurigakan dalam suatu hunian.

Pendeteksi gerak ini mempunyai fitur canggih yang membantu dalam aspek keamanan, bahkan alat ini dilengkapi CCTV yang dapat mendeteksi apabila terjadi penyusupan atau orang dengan gerak mencurigakan. Alat ini terfokus pada objek yang bergerak, khususnya untuk menghindari atau menangkap kejadian kriminal.

Audio Sensors (Sensor Audio)
Sistem Keamanan Canggih

Sama halnya dengan pendeteksi gerak yang memberikan pemberitahuan apabila ada gerakan yang mencurigakan. CCTV terkadang ada yang dilengkapi dengan mikrofon yang mampu mendeteksi suara untuk mendeteksi suara yang mencurigakan. Dengan dilengkapi alat canggih ini, kamera CCTV juga dapat menangkap gambar sekaligus suara yang terjadi sekitar wilayah pemantauan tersebut. Misalnya suara kaca pecah, tembakan, dan banyak lagi lainnya. Alat ini biasa tersedia di pusat perbelanjaan, tempat transportasi umum, dan tempat-tempat lainnya yang berpotensi berisik dan berbahaya.

Widespread, Advanced Mobile Integration
Sistem Keamanan Canggih

Perkembangan ponsel pintar seiring waktu terus mengalami perkembangan, termasuk dapat membantu sistem keamanan hunian. Hanya dengan ponsel pintar Anda dapat memantau keamanan rumah meski sedang beraktivitas di luar. Hal yang bisa dilakukan alat ini adalah fitur alarm yang muncul melalui ponsel pintar ketika terjadi hal buruk di rumah yang ditinggalkan, atau adanya tombol panik yang berfungsi untuk memberi pemberitahuan ketika sedang terjadi sesuatu.

Tidak hanya dirumah saja, alat ini juga bisa digunakan di tempat lain seperti kantor dan area penting lainnya. Selain itu, Anda juga bisa melakukan pembatalan alarm bila diperlukan. Alat ini sangat membantu penghuni agar hunian tetap terjaga dan dapat diakses meski dalam jarak yang jauh.

Increased Resolution Videos (Video Beresolusi Tinggi)
Sistem Keamanan Canggih

Pernahkah Anda memperhatikan tampilan CCTV? Umumnya tampilan CCTV hanya menampilkan tampilan hitam putih saja tanpa suara tanpa tampilan yang jelas. Namun dengan alat keamanan yang canggih ini Anda bisa mendapatkan hasil CCTV dengan hasil rekaman pengawasan yang lebih tajam dan lebih jelas.

Hasil rekaman tersedia dalam berbagai resolusi mulai dari 480p hingga 1080p yang bisa Anda sesuaikan dengan kebutuhan Anda. Kamera IP high-end ini hadir dalam 4k Ultra HD dengan tampilan gambar yang cukup besar yang dapat memperjelas tampilan yang sering tidak jelas seperti wajah, plat nomor, dan berbagai detail lainnya.

Tidak hanya itu saja, sistem keamanan berteknologi canggih ini juga dilengkapi dengan analitik audio dan video prediktif dimana mampu memantau jarak jauh dan memiliki daya penyimpanan yang tinggi. Kamera pengawasan dilengkapi UHD yang membuat pengawasan lebih komprehensif dan efektif untuk mencegah pembobolan dan dapat memecahkan masalah.',
                'image' => 'storage/image/article/1593423857.jpeg',
                'created_at' => '2020-06-29 09:44:17',
                'updated_at' => '2020-06-29 09:44:17',
            ),
            12 =>
            array (
                'id' => 13,
                'author' => '7',
                'title' => 'Penyebab Harga Jual Rumah Turun',
                'content' => 'Dengan sedikit renovasi, bukan tidak mungkin harga rumah yang ingin Anda jual bakal melonjak 10% dibanding harga pasaran. Namun sayangnya, melakukan kesalahan berikut sedikit saja sama dengan \'bunuh diri\' alias bisa menurunkan harga jualnya. Apa saja contoh kesalahan tersebut?

Asal Menata Ruangan
Ini berlaku bagi Anda yang berniat menjual rumah secara fully furnished. Anda mungkin berpikir bahwa membeli banyak perabot bisa menjadi investasi yang menguntungkan ketika rumah hendak di jual di kemudian hari. Padahal tidak semua orang memiliki selera yang sama dengan Anda.

Terlebih, furnitur yang dibeli saat ini bisa kehilangan tren nya dalam sepuluh tahun ke depan. Untuk itu sebelum membeli furnitur coba perhatikan sisi fungsional dan selalu pilih model yang timeless.

Sebelum menjual rumah, ada baiknya Anda mengisi ruangan dengan beberapa sentuhan desain interior. Seperti bingkai pajangan bernilai seni, beberapa bantal dan aksesoris yang dapat memaksimalkan harga jual rumah Anda.

(Lagi cari rumah baru untuk keluarga? Ini pilihan rumah minimalis harga Rp500 Jutaan)

Membiarkan berantakan
Ketika ada calon pembeli yang datang berkunjung melihat-lihat rumah Anda, mereka akan membayangkan jika ruangan tersebut diisi oleh barang-barang milik mereka.

Jangan biarkan ada baju bergeletakan di kamar tidur, atau tumpukan kertas dan debu di meja kantor Anda.

Pastikan juga dapur dan kamar mandi dalam keadaan bersih, karena akan sangat mempengaruhi persepsi calon pembeli terhadap rumah baru yang akan mereka tempati.

Berhati-hati dengan selera Anda
Setiap orang mungkin memiliki selera dan gaya individu yang berbeda-beda ketika mendesain rumahnya. Begitupun ketika rumah Anda hendak menjual rumah.

Tatanan ruang keluarga yang Anda desain keren belum tentu sesuai dengan keinginan calon pembeli. Solusinya, jika Anda masih ingin menjual rumah Anda dalam waktu tak terlalu lama, buatlah denah rumah dan finishing yang netral.

Warna dan motif mencolok mungkin sesuai dengan kepribadian Anda, namun belum tentu disukai oleh setiap orang.

(Jangan dulu beli rumah tanpa menyimak ulasannya di review Properti)

Tampilan depan rumah
Rata-rata rumah dilengkapi oleh taman kecil di depan rumah. Ini juga menjadi penilaian pertama yang tidak kalah penting dipertimbangkan oleh calon pembeli.

Untuk itu pastikan tampilan depan rumah Anda selalu terlihat rapi. Anda bahkan bisa sedikit menata rumput di depan rumah agar dapat meningkatkan nilai tawar rumah.

Membayangkan keuntungan sebelum terjadi
Sebagian calon penjual ada yang terlalu cepat menebak keuntungan yang akan mereka dapat. Umumnya kegagalan investasi ini terjadi karena sebelum properti mereka terjual, mereka sudah menghabiskan sebagian orang dan berhadap mendapat uang kembali yang jauh lebih besar.

Ini adalah kesalahan yang fatal. Sebelum mendapat penawaran atau kesepakatan dari pembeli, hindari untuk melakukan pengeluaran besar. Minta pendapat dari agen properti sebelum mengeluarkan dana renovasi sebelum menjual rumah.

Memilih broker properti yang salah
Ketika sudah tiba waktu menjual rumah, Anda mungkin membutuhkan jasa seorang broker real estate.

Namun, pilih agen yang kredibel untuk menentukan harga akhir. Trik mudahnya, coba pilih agen yang memiliki spesialis di suatu area. Umumnya mereka akan sangat memahami pasar dan punya koneksi luas untuk memasarkan rumah Anda.',
                'image' => 'storage/image/article/1593424284.jpeg',
                'created_at' => '2020-06-29 09:51:24',
                'updated_at' => '2020-06-29 09:51:24',
            ),
        ));


    }
}
