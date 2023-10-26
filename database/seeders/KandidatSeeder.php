<?php

namespace Database\Seeders;

use App\Models\Candidate;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Candidate::create([
            'slug' => 'nayif-aditya',
            'image' => 'kandidat-1-profile.png',
            'name' => 'Nayif Aditya',
            'deskripsi' => 'Halo saya Nayif Aditya. Bersekolah di SMKN 1 KARAWANG. Yang memang dari dulu sudah saya impikan. Saya orangnya mencoba bisa berguna di keluarga dan di sekolah. Saya yang mencoba untuk mengerti semua orang agar orang bisa merasakan bahwa hidup itu tidak sendirian ada teman dan sahabat yang selalu ada dan membantu jika adanya kesulitan. Saya yang mencoba agar semua orang tetap bahagia dengan lelucon lelucon saya yang kadang pun ga lucu. Mempelajari bahasa tubuh. Nada berbicara. Membaca pikiran seseorang itu sangat menyenangkan apalagi saya bisa tahu apa yang mereka sedang rasakan. Dengan semua itu saya agar semuanya bisa berteman dengan saya.',
            'visi' => 'Menjadikan OSIS SMKN 1 KARAWANG sebagai Organisasi yang berperan aktif dalam mengembangkan potensi siswa, menciptakan lingkungan yang mendukung perkembangan akademik dan non-akademik, serta menjadi contoh organisasi yang memiliki nilai-nilai moral yang tinggi',
            'misi' => '1. Membangun wadah yang inklusif dan beragam bagi organisasi dan ekstrakulikuler di SMK Negeri 1 Karwang 
                        2. Memaksimalkan Proker dari setiap Seksi bidang agar efektif 
                        3. Menjunjung tinggi nilai taqwa, integritas, dan karakter yang mulia dalam setiap aktivitas OSIS 
                        4. Melaksanakan Proker dari BPH sebelumnya yang belum Terealisasikan',
            'votes' => 0,
            'program' => 'Program kotak aspirasi adalah program yang membawakan tujuan untuk siswa/siswi sekolah bisa menyalurkan pendapat mereka ataupun keinginan mereka yang bersifat positif dan baik untuk sekolah maupun OSIS itu sendiri.',
            'video' => 'https://www.youtube.com/embed/BOkW8yJEVl0',
            'class_id' => 1
        ]);
        Candidate::create([
            'slug' => 'alfarizi',
            'image' => 'kandidat-1-profile.png',
            'name' => 'Alfarizi',
            'deskripsi' => 'Halo semua, nama saya Alfarizi. Saya lahir di Bekasi pada 25 Desember 2005 dan kini usia saya jalan ke 17 tahun. Kini saya tinggal bersama orang tua saya di Karawang tepatnya di Rawabagi Palumbonsari Karawang Timur. Dalam berpendidikan, sekarang saya duduk di kelas 11 SMK jurusan kelistrikan di SMKN 1 Karawang dan saya juga menaungi salah satu organisasi yaitu OSIS serta saya memiliki hobi yaitu berolahraga.',
            'visi' => 'Terwujudnya OSIS SMKN 1 Karawang sebagai organisasi yang memiliki kualitas tinggi, sebagai organisasi yang aktif, kreatif dan inovatif, dan menampung aspirasi serta pererat kekeluargaan baik untuk organisasi maupun individu',
            'misi' => 'Meningkatkan kedisiplinan pengurus OSIS SMKN 1 Karawang
                        Menjalankan suatu kegiatan yang dapat meningkatkan hubungan positif antar siswa
                        Mengedepankan sila pertama dalam Pancasila yaitu "Ketuhanan yang Maha Esa" dalam berorganisasi
                        Menjalin kerjasama antar organisasi baik di dalam sekolah maupun di luar sekolah
                        Melanjutkan program kerja OSIS yang terdahulu',
            'votes' => 0,
            'program' => 'Exchange Of Ideas merupakan suatu program kerja dimana kita saling bertukar pikiran dan ide dari setiap organisasi / ekstrakurikuler, dan hal itu membuahkan hasil untuk menjalankan suatu program kerja dan bertujuan untuk saling bekerja sama dalam menjalankan program tersebut.',
            'video' => 'https://www.youtube.com/embed/_zr-rqI-wSs',
            'class_id' => 1
        ]);
        Candidate::create([
            'slug' => 'moh-iqbal-andriansyah',
            'image' => 'kandidat-1-profile.png',
            'name' => 'Moh Iqbal Andriansyah',
            'deskripsi' => 'Saya Moh Iqbal Andriansyah, Saya lahir di Karawang 27 September 2005, hoby saya membaca dan berenang, saya tipikal orang yang humble dan humoris. Saya suka berorganisasi sejak duduk di bangku sd hingga sekarang. Karena itu saya suka mencari wawasan yang baru, bernyanyi, puisi, dan berpidato adalah beberapa bakat yg ada dalam diri saya.',
            'visi' => 'Mewujudkan SMKN 1 karawang menjadi sekolah yang unggul bidang Akademik/Non Akademik yang memiliki Siswa/i yang Berkarakter, Berlandaskan Ketuhan yang maha Esa , Aktif, Kreatif Dan Bermoral, Serta Menjadikan OSIS sebagai wadah aspirasi wadah sekolah.',
            'misi' => 'Meningkatkan Keimanan dan Ketakwaan Terhadap Tuhan YME
                Mempererat Kerja Sama Antra OSIS,Estrakulikuler dan Warga Sekolah
                Mengoptimalkan Peran Masing Masing Eskul dalam rangka mendorong prestasi Siswa/i
                Mengadakan Kegiatan Pengembangan Bakat,Potensi Dan Kreativitas siswa,Seperti (BAKERS) Bazar Kreativitas Siswa
                Melaksanakan dan Meningkatkan kualitas program yang telah disusun
                Meningkatkan Kesadaran Siswa/i dalam pelaksanaan tata tertib serta melestarikan budaya SMKN 1 KARAWANG
                Mengadakan Kegiatan NESCUSION (Neskar Discusion) Antara Pengurus Osis dengan ketua eskul serta masing masing perwakilan siswa untuk membahas kerja sama dan aspirasi siswa',
            'program' => 'BAKERS (Bazar Kreativitas Siswa)
                            Program atau event ini  bertujuan untuk mewadahi dan mengembangkan kreativitas serta potensi yang siswa siswi smkn 1 karawang miliki,selain hanya itu event ini juga dapat menjadi motivasi untuk teman teman agar bisa meningkatkan kreativitas nya,di sini juga kita dapat belajar kewirausahaan dari hasil penjualan bazar nya.',
            'votes' => 0,
            'video' => 'https://www.youtube.com/embed/Og2MYtGrHw4',
            'class_id' => 1

        ]);
    }
}
