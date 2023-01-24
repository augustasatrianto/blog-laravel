<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'category_id' => 5,
                'user_id' => 1,
                'title' => 'Mengenal Lebah Madu',
                'slug' => Str::slug('Mengenal Lebah Madu', '-'),
                'image' => 'post-image/mengenal-lebah-madu.jpg',
                'body' => 'Lebah merupakan sekelompok besar serangga yang dikenal karena hidupnya berkelompok meskipun sebenarnya tidak semua lebah bersifat demikian. Semua lebah masuk dalam suku atau familia Apoidae (ordo Hymenoptera: serangga bersayap selaput). Di dunia terdapat kira-kira 20.000 spesies lebah dan dapat ditemukan di setiap benua, kecuali Antartika.

                Sebagai serangga, ia mempunyai pasangan kaki dan dua pasang sayap. Lebah membuat sarangnya di atas bukit, di pohon kayu, dan pada atap rumah. Sarangnya dibangun dari propolis (perekat dari getah pohon) dan malam yang diproduksi oleh kelenjar lebah betina yang masih muda terdapat dalam badannya. Lebah memakan nektar bunga dan serbuk sari.'
            ],

            [
                'category_id' => 8,
                'user_id' => 1,
                'title' => 'Kalian Wajib Cobain kuliner ini',
                'slug' => Str::slug('Judul Post Kedua', '-'),
                'image' => 'post-image/rawon.jpg',
                'body' => 'Rawon adalah masakan Indonesia berupa sup daging berkuah hitam dengan campuran bumbu khas yang menggunakan kluwek. Rawon, meskipun dikenal sebagai masakan khas Jawa Timur (daerah Arekan), dikenal pula oleh masyarakat Jawa Tengah sebelah timur (daerah Surakarta).

                Daging untuk rawon umumnya adalah daging sapi yang dipotong kecil-kecil, utamanya adalah bagian sandung lamur. Bumbu supnya sangat khas Indonesia, yaitu campuran bawang merah, bawang putih, lengkuas (laos), ketumbar, kemiri, serai, kunir, cabai, kluwek, garam, serta minyak nabati. Semua bahan ini dihaluskan, lalu ditumis sampai harum. Campuran bumbu ini kemudian dimasukkan dalam kaldu rebusan daging bersama-sama dengan daging. Warna gelap khas rawon berasal dari kluwek. Di luar negeri, rawon disebut sebagai black soup.
                
                Rawon disajikan bersama nasi, dilengkapi dengan tauge berekor pendek, telur asin, daun bawang, kerupuk udang, daging sapi goreng (empal), dan sambal. Beberapa pelengkap lain yang juga dapat dihidangkan bersama rawon adalah olahan jeroan dan di daerah Pasuruan rawon juga lazim dikonsumsi dengan mendol (perkedel tempe) dan disajikan di atas daun pisang. Kunci lezat rawon juga berada pada olahan kuahnya yang berasal dari kaldu daging yang digunakan, baik dari lemak daging, tulang muda, maupun kulit.
                
                Warung rawon yang cukup populer di antaranya adalah Rawon Nguling di Pasuruan, Rawon Kalkulator di Taman Bungkul, Surabaya, dan Rawon Setan di jalan Embong Malang, Surabaya, juga Rawon Penjara Solo sebelah timur Rumah Tahanan Surakarta Pada zaman dahulu rawon merupakan masakan yang jarang dihidangkan. Rawon hanya di hindangkan pada saat acara adat saja. Namun pada zaman sekarang memasak rawon sudah umum. Bumbu instan rawon sangat mudah ditemukan dan banyak dijual di pasar tradisional maupun pasar modern dengan harga yang sangat terjangkau. Namun bumbu instan rawon juga memiliki beberapa kekurangan dan kelebihan. Kekurangannya adalah perlu menambahkan sedikit penyedap rasa seperti garam, gula, dan lada agar rasa yang didapat lebih seimbang. Sedangkan kelebihan memasak rawon dengan bumbu instan adalah lebih menghemat waktu di dapur.
                
                Meskipun begitu, memasak rawon dengan bumbu segar yang diracik sendiri lebih menghasilkan rasa yang aromatik dan kental.'
            ],
            [
                'category_id' => 7,
                'user_id' => 3,
                'title' => 'Fakta Menarik Monalisa',
                'slug' => Str::slug('Fakta Menarik Monalisa', '-'),
                'image' => 'post-image/monalisa.jpg',
                'body' => 'Monalisa adalah lukisan minyak di atas kayu poplar yang dibuat oleh Leonardo da Vinci pada abad ke-16. Lukisan ini sering dianggap sebagai salah satu lukisan paling terkenal di dunia dan hanya sedikit karya seni lain yang menjadi pusat perhatian, studi, mitologi, dan parodi. Lukisan ini dimiliki oleh pemerintah Prancis dan dipamerkan di Musée du Louvre di Paris

                Lukisan setengah badan ini menggambarkan lukisan wanita yang tatapannya menuju pengunjung dengan ekspresi yang sering dideskripsikan sebagai enigmatik atau misterius.[3]'
            ],
            [
                'category_id' => 4,
                'user_id' => 3,
                'title' => 'Asal-usul Olahraga Ping-pong',
                'slug' => Str::slug('Ping-pong', '-'),
                'image' => 'post-image/pingpong.jpg',
                'body' => 'Tenis meja atau pingpong adalah olahraga yang melibatkan dua atau empat pemain yang memukul bola ringan yang disebut bola pingpong di atas meja menggunakan raket pejal kecil yang disebut bet. Permainan ini dilakukan di atas meja yang dibagi dengan net. Kecuali servis awal, aturan permainan adalah: pemain harus memantulkan bola ke meja lawan dan lawan harus mengembalikannya. Poin akan terjadi jika pemain lawan gagal mengembalikan bola. Permainan ini cepat dan membutuhkan sikap tanggap yang cepat pula. Memutar-mutar bola (teknik spin) akan mendistorsi arah bola sehingga lawan akan sulit mengembalikannya.

                Organisasi olahraga tenis meja internasional adalah International Table Tennis Federation (ITTF), didirikan tahun 1926. ITTF beranggotakan 226 persatuan/federasi tenis meja di seluruh dunia pada saat ini. Aturannya dimuat dalam buku pegangan yang diterbitkan ITTF. Tenis meja disertakan dalam Olimpiade sejak 1988, dalam berbagai macam partai dan kategori. Sejak 1988 hingga 2004, ada partai tunggal putra-tunggal putri, serta ganda putra-ganda putri. Sejak 2008, sistem ajang tim telah dimainkan alih-alih ganda.'
            ],
            [
                'category_id' => 1,
                'user_id' => 2,
                'title' => 'Yuk Kenalan Dengan Flutter',
                'slug' => Str::slug('Yuk Kenalan Dengan Flutter', '-'),
                'image' => 'post-image/flutter.png',
                'body' => 'Flutter adalah sebuah framework aplikasi mobile sumber terbuka yang diciptakan oleh Google. Flutter digunakan dalam pengembangan aplikasi untuk sistem operasi Android, iOS, Windows, Linux, MacOS, serta menjadi metode utama untuk membuat aplikasi Google Fuchsia. Flutter juga mendukung untuk pengembangan aplikasi berbasis web.
                
                Versi pertama Flutter dikenal sebagai "Sky" dan berjalan pada sistem operasi Android. Diresmikan pada perhelatan Dart developer summit tahun 2015, dengan tujuan untuk mampu merender grafis secara konsisten pada 120 bingkai per detik.
                
                Flutter 1.0 dirilis pada tanggal 4 Desember 2018 di acara Flutter Live, yang menunjukkan versi "stabil" pertama dari Framework Flutter.'
            ],
            [
                'category_id' => 1,
                'user_id' => 2,
                'title' => 'Cara Mudah Jadi Programmer',
                'slug' => Str::slug('Judul Post Keenam', '-'),
                'image' => 'post-image/programmer.png',
                'body' => 'Sesuai namanya, arti programmer adalah orang yang bertanggung jawab membuat sebuah sistem dengan bahasa pemrograman. Prosesnya meliputi merancang, menulis kode program, sampai menguji program hingga siap digunakan.

                Sistem yang dibuat oleh programmer pun bermacam-macam, bisa berupa website, web app, maupun perangkat lunak atau aplikasi mobile dan desktop. Untuk pembuatan pun, ada banyak bahasa pemrograman yang harus dikuasai programer, seperti PHP, Python, Java, JavaScript, dan lainnya.
                
                Nah, agar mampu menciptakan sebuah sistem yang baik, salah satu pengertian programmer adalah harus memiliki keterampilan bahasa pemrograman yang mumpuni.
                
                Oh ya, gaji programmer juga terbilang tinggi, loh. Besaran gaji programmer junior saja bisa mencapai 8 juta rupiah. Jika Anda juga memiliki skill tambahan seperti bahasa Inggris, gaji programmer untuk perusahaan memiliki jumlah mencapai dua digit.'
            ],
            [
                'category_id' => 6,
                'user_id' => 2,
                'title' => 'Lamborghini : Mobil Impian',
                'slug' => Str::slug('Lamborghini : Mobil Impian', '-'),
                'image' => 'post-image/mobil.jpg',
                'body' => 'Automobili-Lamborghini S.p.A., sering disebut Lamborghini adalah sebuah perusahaan pembuat mobil di Italia. Perusahaan ini didirikan oleh Ferruccio Lamborghini pada tahun 1963, dengan tujuan untuk menghasilkan mobil grand wisata yang dapat bersaing dengan mobil yang telah ada dipasaran terlebih dahulu seperti Ferrari.

                Model pertama perusahaan Lamborghini dirilis pada pertengahan tahun 1960, kemudian dicatat untuk perbaikan, kekuasaan, dan kenyamanan. Lamborghini mendapat banyak pujian pada tahun 1966. Setelah beberapa dekade, masa sulit menimpa perusahaan di pertengahan tahun 1970-an, seperti penjualan anjlok karena krisis moneter dunia 1973 dan krisis minyak. Setelah melewati masa kebangkrutan dan empat kali perubahan kepemilikan, Lamborghini menjadi anak perusahaan dari Chrysler pada tahun 1987. Kurangnya keberhasilan Lamborghini terus berlanjut sampai tahun 1990-an, Pada tahun 1994, dua pengusaha asal indonesia Setiawan Djody dan Tommy Soeharto mengakui sisi kepemilikan Lamborghini dari tangan chrysler, sayangnya, kepemilikan ini tidak berlangsung lama hanya sampai 1998, sampai akhirnya perusahaan itu dijual pada tahun 1998 kepada Audi, anak perusahaan dari Grup Volkswagen, sebuah perusahaan otomotif Jerman. Kepemilikan Audi menandai awal dari sebuah periode stabilitas dan peningkatan produktivitas untuk Lamborghini, dengan penjualan meningkat hampir sepuluh kali lipat selama tahun 2000-an, memuncak pada rekor penjualan pada tahun 2007 dan 2008. Krisis moneter dunia pada akhir tahun 2000-an berdampak negatif terhadap pembuat mobil mewah di seluruh dunia, dan melihat penjualan Lamborghini turun kembali ke tingkat pra-2006.'
            ],
            [
                'category_id' => 3,
                'user_id' => 1,
                'title' => 'Meta Terbaru Mobile Legends',
                'slug' => Str::slug('Hero Terkuat di Mobile Legends', '-'),
                'image' => 'post-image/mobilelegends.jpg',
                'body' => 'Mobile Legends adalah permainan MOBA yang dirancang untuk ponsel. Kedua tim masing-masing berisi lima orang berjuang untuk mencapai dan menghancurkan markas musuh sambil mempertahankan markas mereka sendiri untuk mengendalikan tiga jalur, yang dikenal sebagai jalur "atas", "tengah" dan "bawah", yang menghubung ke setiap markas.

                Di masing-masing tim, ada lima pemain yang mengendalikan avatar sendiri-sendiri, yang dikenal sebagai "hero", dari perangkat mereka sendiri. Karakter lemah yang dikendalikan komputer disebut "minion", yang bersarang di markas tim lalu menyebar ke tiga jalur dan melawan menara serta lawan yang menghadang.Mengumpulkan EXP berguna untuk menaikkan level hero saat permainan berlangsung.'
            ],
            [
                'category_id' => 4,
                'user_id' => 3,
                'title' => 'Kisah Hebat Taufik Hidayat',
                'slug' => Str::slug('Kisah Hebat Taufik Hidayat', '-'),
                'image' => 'post-image/taufik-hidayat.jpg',
                'body' => 'Taufik Hidayat (lahir 10 Agustus 1981) adalah mantan pemain bulu tangkis tunggal putra untuk Indonesia. Awalnya ia bermain di klub SGS Elektrik Bandung. Putra pasangan Aris Haris dan Enok Dartilah ini adalah peraih medali emas untuk Indonesia pada Olimpiade Athena 2004 dengan mengalahkan Seung Mo Shon dari Korea Selatan di babak final. Pada 21 Agustus 2005, dia menjadi juara dunia dengan mengalahkan pemain peringkat 1 dunia, Lin Dan di babak final, sehingga menjadi pemain tunggal putra pertama yang memegang gelar Kejuaraan Dunia BWF dan Olimpiade secara berturut-turut. Selain itu, ia juga memegang gelar juara tunggal putra Asian Games 2002 di Busan dan 2006 di Doha.

                Taufik mundur dari Pelatnas Cipayung pada 30 Januari 2009. Setelah itu ia menjadi pemain profesional. Pada November 2012, Taufik membangun sebuah pusat pelatihan bulu tangkis yang bernama Taufik Hidayat Arena (THA), berlokasi di Ciracas, Jakarta Timur. Taufik juga kerap memberi kritik performa timnas, utamanya dari sektor tunggal putra.'
            ]

        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
