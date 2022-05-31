<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->insert([
            [
                "book_id" => 1 ,
                "author" => "Antje Babendererde" ,
                "publisher" => "Bhuana Ilmu Populer" ,
                "year" => 2022 ,
                "description" => "Selama empat belas tahun, Jacob yang amat merindukan sosok ayah di sisinya menelan mentah-mentah kebohongan sang ibu. Lalu kebenaran pun terungkap, ayahnya masih hidup dan berada di ujung dunia, di utara Kanada, di hutan belantara penuh salju dan es tak berujung. Dengan penuh amarah dan kekecewaan, Jacob mencari seorang diri. Namun, ia justru masuk ke dalam petualangan yang membawanya hingga ke titik antara hidup dan mati. Sebuah ujian untuk bertahan hidup di tengah ganasnya alam liar: suhu dingin yang esktrem, kelaparan yang amat sangat, hingga bertarung dengan hewan pemangsa. Perjalanan ini bukan sekadar mencari sang ayah. Ini lebih dari itu. Perjalanan ini akan menguak masa lalunya, akar kehidupannya, asal-usulnya. Bahkan, mampu membuatnya menemukan makna cinta yang selama ini ia cari."
            ],
            [
                "book_id" => 2 ,
                "author" => "Cindy Jessica" ,
                "publisher" => "Gramedia Pustaka Utama" ,
                "year" => 2022 ,
                "description" => "Amanda punya indra keenam. Kelihatannya keren ya? Kenyataannya, keluarga Amanda sempat khawatir dia bakal dicap aneh sama orang lain. Mereka berusaha supaya nggak ada yang tahu tentang kemampuan Amanda yang sering dapat penglihatan tak terduga. Apalagi, penglihatan itu selalu tentang orang lain, nggak satu pun tentang Amanda sendiri. Saat baru saja naik kelas XII, Amanda mulai mengenal Utha. Hidupnya jadi kayak permen asam manis. Cowok paling resek itu bikin Amanda mengalami banyak hal konyol. Mulai dari balas dendam ke mantan pacar yang selingkuh, dikejar Raden Inu Kertapati abal-abal, sampai ditangkap satpam bank gara-gara kelamaan mengadem di ATM. Pelan-pelan, Amanda menyadari bahwa dia menyukai Utha. Lalu tiba-tiba muncul penglihatan tentang masa depannya bersama Wira. Aduh, nggak mungkin kan dia menikah dengan pamannya Utha yang ganteng selangit itu?"
            ],
            [
                "book_id" => 3 ,
                "author" => "Sheila Salsabiila" ,
                "publisher" => "Andi Publisher" ,
                "year" => 2022 ,
                "description" => "Raynard Pratama, remaja 17 tahun yang sering dianggap sempurna oleh teman-teman di sekolahnya. Namun siapa sangka, kalau sebenarnya Ia adalah seorang tunarungu. Memiliki kekurangan membuat Ray berbeda dengan remaja lainnya, bahkan ia sempat menyerah dengan mimpinya.

                'Gue bukannya nggak bisa denger. Gue cuma denger apa yang gue mau denger, dan gue denger itu semua lewat mata dan hati.' - Raynard.
                
                Namun, Kiera Shafia, gadis pecinta astronomi yang membuat Ray jatuh cinta, mampu membangkitkan semangat cowok itu. Kata-kata yang keluar dari bibir mungil Kiera selalu mampu membuat Ray terkesan. Mereka pun harus berjuang di penghujung masa SMA, membuat prestasi, kenangan, serta perpisahan.
                
                'Bintangnya juga nggak terlalu suka tempat ramai. Kalau di tempat ramai, bintangnya jadi nggak menonjol. Kalau di tempat sepi, bintang jadi satu-satunya objek yang paling indah. Jadi, bintang sama kayak lo, sama-sama nggak suka tempat ramai.' - Kiera
                
                Ini adalah kehidupan romansa seorang remaja tunarungu, mengenai bintang-bintang, dan kenangan saat masa putih abu-abu"
            ],
            [
                "book_id" => 4 ,
                "author" => "SURJANI WONORAHARDJO, PH.D." ,
                "publisher" => "Andi Offset" ,
                "year" => 2021 ,
                "description" => "Buku ini menyajikan prinsip dasar metode kimia analitik modern yang meliputi metode-metode spektroskopi dan kromatografi, serta pengantar elektroanalisis. Spektroskopi mencakup serangkaian metode-metode standar seperti spektroskopi UV-visible, spektroskopi inframerah dan Raman, spektroskopi atom, spektroskopi massa, resonansi megnetik inti dan elektron. Di lain pihak ada metode kromatografi jug berkembang meluas dan modern, serta elektroanalisis semakin populer. Semua metode yang disajikan dalam buku ini secara meluas dan mendalam sudah sangat populer penggunaannya di lapangan aplikatif. Perkembangan masing-masing metode juga semakin terasa, baik dari sisi instrumentasi dan kapabilitasnya, serta secara sinergis saling melengkapi satu sama lain dalam analisis material apa pun saat ini.

                Buku ini diperuntukkan terutama bagi para mahasiswa kimia dan MIPA serta mahasiswa ilmu-ilmu terapan lain seperti pertanian, peternakan, farmasi, lingkungan, dan rumpun ilmu sejenis, di semua jenjang tergantung pada kebutuhan. Buku ini diharapkan juga dapat menambah khazanah wawasan pekerja sains, baik sains murni maupun aplikatif dan bahan diskusi yang baik untuk meningkatkan kualitas proses sainsnya dan menyesuaikan kebutuhan zaman."
            ],
            [
                "book_id" => 5 ,
                "author" => "Penguin Us" ,
                "publisher" => "Penguin Us" ,
                "year" => 2022 ,
                "description" => "An almanac like no other, this book offers everything you need to know about the world in 2020--from science and nature to history, world cultures, and the environment. Filled with exquisite National Geographic photography, informative infographics, illustrated time lines, and authoritative maps, this striking new edition will celebrate the 50th anniversary of Earth Day with practical tips for improving your own sustainability habits.
                The book begins with trending topics in science, technology, and culture, then moves into fascinating chapters on travel, exploration, earth and space, biology, culture, and history. Recurring features include inspiring quotes, revealing facts, photos from National Geographic's Instagram, and a Quizmaster trivia feature. With new discoveries on every page, this cutting-edge book brings you the world, no matter what your age."
            ],
            [
                "book_id" => 6 ,
                "author" => "DARRELL HUFF" ,
                "publisher" => "Kepustakaan Populer Gramedia" ,
                "year" => 2021 ,
                "description" => "Benjamin Disraeli (1804-1881) mengatakan ada tiga macam kebohongan: bohong, bohong banget, dan statistik. Kendati peringatan ini telah berusia lebih dari seabad, statistik yang mengecoh masih saja kita jumpai hingga sekarang. Masih ingat iklan 'tujuh dari sepuluh perempuan Indonesia menggunakan produk X'? Spanduk di belakang gedung MPR yang bertuliskan 'jika Anda menolak si X maka Anda menyakiti hati sejuta pemilih partai Y'? Atau barangkali hasil riset yang menyimpulkan 'dua dari tiga lelaki Jakarta berselingkuh'? Buku ini mirip panduan bagaimana menggunakan statistik untuk mengelabui. Karena para penipu telah mahir menerapkan berbagai trik di dalam buku ini, orang-orang jujur seperti Anda layak membacanya untuk membela diri. Buku ini juga layak dibaca oleh mereka yang ingin belajar statistik lewat contoh sehari-hari."
            ],
            [
                "book_id" => 7 ,
                "author" => "Budi Raharjo" ,
                "publisher" => "Informatika" ,
                "year" => 2022 ,
                "description" => "Database (basis data) merupakan media untuk menyimpan data yang diperlukan oleh aplikasi, baik yang berjenis web, desktop, maupun aplikasi mobile. Meskipun database dapat dibuat menggunakan beberapa model, namun pada kenyataannya database dengan model relasional sampai saat ini masih menjadi yang terpopuler dan paling banyak digunakan. Dalam model relasional, data akan disimpan dalam bentuk tabel-tabel terpisah yang saling berelasi. Pengelolaan data di dalam database relasional dilakukan menggunakan perintah-perintah standar yang ditulis menggunakan bahasa SOL, singkatan dari Structured Cluery Language.
                MySOL adalah salah satu software yang berfungsi untuk membuat dan mengelola database dengan model relasional. Software seperti ini dikenal dengan Relational Database Management System (RDBMS). Dengan MySOL, kita dapat membuat dan merancang sendiri database secara mudah, sesuai kebutuhan aplikasi yang sedang dikembangkan.
                Buku ini akan memandu Anda dalam mempelajari SOL dan komponen-komponen penting di dalam MySOL untuk membuat database dan mengelola data yang terdapat di dalamnya. Selain buku ini juga menjelaskan tentang cara mengintegrasikan database yang sudah dibuat di dalam MySOL dengan aplikasi yang ditulis menggunakan bahasa pemrograman tertentu (Python, PHP. C# dan VB.NET)."
            ],
            [
                "book_id" => 8 ,
                "author" => "Irwansyah Saputra & Dinar Ajeng Kristiyanti" ,
                "publisher" => "Informatika" ,
                "year" => 2022 ,
                "description" => "Mas irwansyah dan mbak Dinar, berhasil menjelaskan secara seimbang konsep dan praktik machine learning, dengan bahasa yang mudah dipahami bahkan oleh orang awam. Buku wajib bagi yang ingin belajar machine learning dari dasar.
                Romi Satria Wahono, M. Eng, Ph.D (Pakar IT dan CEO PT. Brainmatics Cipta Informatika)
                
                Sebuah buku yang sangat lengkap untuk belajar tentang Machine Learning dari konsep dasar, preprocessing, berbagai ragam algoritme pada Machine Learning, dan berbagai alat ukur untuk memvalidasi serta mengevaluasi algoritme pada Machine Learning yang diimplementasikan pada berbagai bidang. Bu Dinar dan Pak Irwansyah menuliskan dengan sangat runtun serta menggunakan Bahasa yang mudah dipahami bagi pembaca yang baru mengenal tentang Machine Learning. Buku ini juga menjadi istimewa karena cocok bagi para pembaca yang sedang belajar pemrograman Phyton untuk menyelesaikan permasalahan di lingkungan sekitar kita menggunakan Machine Learning. Setiap coding dilengkapi dengan penjelasan yang lengkap tentang fungsionalitasnya, sehingga bagi pembaca yang belum mengenal Bahasa pemrograman Phyton dapat akan lebih cepat memahami Bahasa pemrograman ini. Buku ini sangat luar biasa, sehingga saya sangat merekomendasikan kepada khalayak yang baru belajar tentang Machine Learning untuk membaca buku ini.
                Dr. Emy Setyaningsih, M. Kom (Institut Sains dan Teknologi, AKPRIND Yogyakarta)"
            ],
            [
                "book_id" => 9 ,
                "author" => "Jubilee Enterprise" ,
                "publisher" => "Elex Media Komputindo" ,
                "year" => 2022 ,
                "description" => "MS Office 2021 merupakan aplikasi penting untuk menyelesaikan berbagai macam tugas dan pekerjaan. Tidak memandang apakah Anda adalah seorang pelajar, mahasiswa, guru, dosen, pengusaha, pegawai, atau CEO, aplikasi ini dirancang untuk Anda. Di dalam buku ini, Anda akan mempelajari cara menggunakan aplikasi penting MS Office 2021, yaitu MS Word, MS Excel, dan MS PowerPoint. Lebih pentingnya lagi, buku ini bisa dibaca bagi pengguna MS Office 365 juga. Buku ini hadir di tengah masyarakat untuk mengupas MS Office 2021 secara lengkap, mencakup teknik-teknik yang paling dibutuhkan untuk membuat dokumen baru, mendesain slide presentasi, melakukan presentasi, perancangan animasi, menggunakan formula, mempresentasikan data dalam bentuk tabel, chart, maupun pivottable serta pivotchart, serta untuk menyelesaikan tugas-tugas dan pekerjaan sehari-hari. Isi buku ini dirancang memiliki ketebalan ekstra supaya dapat menjadi pusat pengetahuan dan informasi tentang MS Office 2021. Jadi kapan pun Anda merasa kesulitan menemukan fitur untuk MS Word, MS PowerPoint, dan MS Excel, diharapkan dapat menemukan jawabannya di dalam buku ini. (Thinkjubilee.com)"
            ],
            [
                "book_id" => 10 ,
                "author" => "Ryan Filbert Wijaya, Ryan Filbert Wijaya, S.Sn, ME." ,
                "publisher" => "Elex Media Komputindo" ,
                "year" => 2017 ,
                "description" => "Buku ini mungkin adalah buku ke-15 saya, tetap tak berarti buku ini adalah yang TERSULIT dari yang pernah saya buat. Justru ini adalah buku TERDASAR dan TERMUDAH yang menjelaskan LANGKAH demi LANGKAH bila Anda ingin memulai perjalanan di dunia pasar modal dengan disiplin, mampu bertahan, dan MENDAPATKAN UNTUNG (ingat baikbaik urutannya).


                Dengan menabung saham, Anda dapat memiliki sebuah perusahaan, tanpa mengeluarkan biaya besar untuk membuatnya.
                
                Jadi, Selamat Belajar Menabung Saham! Selamat menjadi pemilik perusahaan kelas nasional dan dunia mulai dari ribuan rupiah.
                Mengapa Anda masih baca halaman belakangnya bila Anda ingin segera bebas fi nansial dan kaya raya dari saham?
                Salam investasi untuk Indonesia"
            ],
            [
                "book_id" => 11 ,
                "author" => "Hery, S.e., M.si., Crp., Rsa" ,
                "publisher" => "Gramedia Widiasarana Indonesia" ,
                "year" => 2016 ,
                "description" => "Laporan keuangan melaporkan transaksi bisnis atau peristiwa ekonomi yang terjadi
                dalam suatu periode waktu tertentu. Transaksi bisnis atau peristiwa ekonomi yang
                terjadi ini dituangkan dalam bentuk angka-angka. Untuk menilai kondisi keuangan dan
                kinerja perusahaan, angka-angka yang ada dalam laporan keuangan akan menjadi
                lebih bermakna apabila angka-angka tersebut saling dibandingkan dalam bentuk rasio
                keuangan.
                
                Rasio keuangan merupakan alat utama dalam melakukan analisis keuangan. Rasio
                keuangan ini dapat digunakan setidaknya untuk menjawab lima pertanyaan berikut: (1)
                bagaimana tingkat likuiditas perusahaan; (2) seberapa efektif pihak manajemen dalam
                menghasilkan laba; (3) bagaimana kebutuhan dana perusahaan dibiayai; (4) seberapa
                besar tingkat return bagi pemegang saham; dan (5) apakah target operasi yang
                ditetapkan perusahaan telah tercapai.
                
                Buku ini dapat digunakan sebagai referensi, terutama bagi mereka yang memang
                tertarik untuk mempelajari aplikasi, termasuk interpretasi atas angka-angka hasil
                perhitungan rasio keuangan bisnis secara lebih cermat dan mendalam. Pembahasan
                yang ada dalam buku ini menggunakan bahasa yang sangat sederhana, sehingga
                memungkinkan bagi para pembaca untuk dapat memahaminya secara lebih mudah
                dan praktis."
            ],
            [
                "book_id" => 12 ,
                "author" => "Supramono, Pambayun Kinasih Yekni Nastiti" ,
                "publisher" => "Andi Publisher" ,
                "year" => 2019 ,
                "description" => "Keuangan Berbasis Perilaku merupakan sebuah kajian yang relatif baru terutama di Indonesia, tetapi sudah mendapatkan perhatian yang besar dikalangan akademisi di bidang manajemen keuangan akuntansi. Hal ini dibuktikan makin banyak kajian keuangan berbasi perilaku dimuat di jurnal-jurnal ekonomi dan bisnis serta dijadikan topik penulisan tugas akhir para mahasiswa mulai S-1 hingga S-3.
                Materi yang dibahas dalam buku ini berkaitan dengan alur pemikiran kemunculan keuangan berbasis perilaku, konsep bias dalam keuangan berbasis perilaku, seperti confirmation bias, mental accounting, framing, heuristic, overconfidence, heuristic, dan herding. Selanjutnya, dalam setiap pembahasan konsep bias akan disertai dengan beberapa contoh studi yang pernah dilakukan."
            ],
            [
                "book_id" => 13 ,
                "author" => "Gagas Ulung, Ima Hardiman (Gagas Ulung)" ,
                "publisher" => "Gramedia Pustaka Utama" ,
                "year" => 2020 ,
                "description" => "Amazing! Itulah kata paling tepat untuk mendeskripsikan keindahan kaldera yang terbentuk dari letusan gunung berapi 74.000 tahun lalu ini. Danau Toba kini tengah bersolek, menjadi destinasi wisata andalan Indonesia, sehingga tidak kalah dengan Candi Borobudur dan Bali yang telah mendunia. Berwisata ke Danau Toba, Anda takkan pernah kehabisan tujuan untuk mengexplore kemegahan alamnya, kekayaan sejarah dan budayanya, antara lain: Sianjur Mula Mula, desa asal Suku Batak pertama, Huta Siallagan, 'kampung kanibal' Suku Batak kuno, Lumban Suhi suhi, desa perajin kain ulos, The Kaldera-Toba Nomadic Escape, wisata glamping kelas dunia. Buku ini berisi 60 destinasi alam, sejarah seni budaya, kuliner, dan hotel sekitar Danau Toba yang wajib Anda kunjungi dan buktikan sendiri. Ayo, ke Danau Toba!"
            ],
            [
                "book_id" => 14 ,
                "author" => "Evan Yovian" ,
                "publisher" => "Bhuana Ilmu Populer" ,
                "year" => 2021 ,
                "description" => "Jepang dengan segala pesonanya memang merupakan destinasi liburan impian yang semakin popular di kalangan umum. Kita bisa menikmati segala hal yang ada di Jepang, mulai dari keindahan alam, tempat dan bersejarah, budaya popular, tempat untuk berbelanja dan sebagainya. Untuk yang pertama kali ke Jepang, mungkin akan kesulitan untuk menentukan kota mana saja yang harus dikunjungi dan destinasi apa saja yang harus disinggahi. Japan's Best Destination akan membantu kita menjelajah Tokyo, Kyoto, Osaka, Nara, Gunung Fuji, serta Hokkaido. Tokyo, sebagai ibu kota negara Jepang, memiliki banyak destinasi wisata menarik yang bisa dinikmati mulai dari wisata alam, budaya, religi, kuliner, hiburan malam, dan sebagainya. Osaka terkenal dengan gedung-gedung pencakar langitnya, pusat industri, serta kota pelabuhan. Kyoto, kota bersejarah dengan kuil-kuil yang kental dengan budaya tradisional Jepang. Nara, salah satu situs warisan dunia UNESCO yang dikenal dengan 1.000 rusa suci yang telah belajar untuk mendapatkan makanan. Jangan lupa juga untuk mengunjungi Gunung Fuji, gunung tertinggi di Jepang yang menjadi kebanggaan rakyat Jepang, serta menikmati salju di Hokkaido. Buku ini akan memberikan semua informasi yang dibutuhkan wisawatan yang ingin ke traveling ke Jepang. Berisi berbagai destinasi wisata yang wajib di Jepang, sampai destinasi antimainstream yang kadang terlewatkan oleh wisatawan. Dilengkapi juga dengan berbagai pilihan transportasi, hotel, sampai tempat makan, yang murah tapi elegan sampai ke yang mewah. Jadi, udah nggak takut kan buat traveling ke Jepang?"
            ],
            [
                "book_id" => 15 ,
                "author" => "Edwin Santoso" ,
                "publisher" => "ELEX MEDIA KOMPUTINDO" ,
                "year" => 2019 ,
                "description" => "Berisi informasi umum mengenai traveling; apa itu makna traveling, tipe traveler apakah kita, destinasi wisata menarik, serta tip bagaimana mendapatkan tiket pesawat yang murah, membayar dengan kelas ekonomi namun mendapatkan kelas bisnis! Sehingga traveling itu tidak selalu mahal jika kita mengetahui tip dan trik dalam memilih pesawat, akomodasi, serta tip-tip mendapatkan penerbangan yang sesuai dengan bujet kita."
            ],
        ]);
    }
}
