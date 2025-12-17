<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Menampilkan halaman Tentang Sekolah.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Data untuk halaman Tentang Sekolah
        $data = [
            'title' => 'Visi & Misi Sekolah',
            'vision' => 'Mencetak generasi yang berakhlak mulia dan unggul di bidang pariwisata, berbudaya santun dan beriman, peduli lingkungan bersih dan hijau, mampu berkompetisi di era global.',
            'missions' => [
                'Misi utamanya adalah mendidik dan menghasilkan sumber daya manusia atau tenaga kerja yang:',
                'A. Beriman dan bertakwa kepada Tuhan yang Maha Esa.',
                'B. Siap kerja dan trampil secara profesional.',
                'C. Mandiri, tangguh, disiplin, jujur, taat, patuh, santun dan bertanggung jawab.',
                'D. Memiliki pengetahuan dan spesialisasi/keahlian.',
                'E. Memiliki percakapan kerja yang produktif, kreatif dan efisien.',
                'F. Senantiasa mengembangkan diri secara berkelanjutan.',
                'G. Mampu berwirausaha dan mandiri sehingga dapat menciptakan lapangan kerja.',
            ]
        ];

        // !!! INI ADALAH KUNCI PENGGABUNGAN !!!
        // Kode ini mengarahkan ke file 'resources/views/tentang-sekoloh/index.blade.php'
        return view('tentang-sekolah.index', $data);
    }
}