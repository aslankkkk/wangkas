<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah | SMK Bakti Idhata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        /* Variabel Warna */
        :root {
            --primary-color: #581c87;
            --primary-dark: #3b0764;
            --secondary-color: #ffc107;
            --secondary-dark: #14532d;
            --bg-light-primary: #f8f9fa;
            --accent-color: #fbbf24;       
            --accent-dark: #d97706; 
        }

        .body { 
            font-family: 'Poppins', sans-serif; 
            background-color: white; 
            overflow-x: hidden;
        }
        
        /* === 1. Navbar Styling (Solid) === */
        .navbar { 
            background-color: var(--primary-color) !important; 
            padding: 15px 0; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); 
        }
        .navbar-brand { font-weight: 700; font-size: 24px; color: white !important; }
        .nav-link { color: rgba(255,255,255,0.8) !important; font-weight: 500; margin-left: 20px; }
        .nav-link:hover { color: white !important; }
        .btn-login-style { background-color: white !important; border-color: white !important; color: var(--primary-color) !important; }

        /* === 2. Section Title Styling === */
        .section-title {
            text-align: center;
            margin-bottom: 50px; /* Jarak lebih luas */
            position: relative;
            color: var(--primary-color);
        }
        .section-title h2 { font-size: 36px; margin-bottom: 10px; font-weight: 700; }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px; /* Garis lebih tebal */
            background-color: var(--secondary-color);
        }
        
        /* === 3. Card Visi Misi/Keunggulan Styling === */
        .white-card {
            background: white; /* Mengubah background menjadi putih solid */
            border: 1px solid #dee2e6; /* Menambahkan border tipis */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            height: 100%;
            transition: box-shadow 0.3s, transform 0.3s;
        }
        .white-card:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        .icon-small { font-size: 24px; margin-right: 15px; } /* Ikon lebih besar */
        .program-title { color: var(--primary-color); font-weight: 700; font-size: 22px; margin-bottom: 15px; }


        /* === 4. Program Keahlian Specific Styling (Perbaikan Utama) === */
        .program-keahlian-card {
            background-color: white;
            border-radius: 12px; /* Lebih rounded */
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            height: 100%;
        }
        .program-keahlian-card:hover {
            transform: translateY(-5px);
        }
        .program-image { 
            height: 280px; 
            overflow: hidden; 
        }
        .program-image img { 
            width: 100%; 
            height: 100%; 
            object-fit: cover; 
            transition: transform 0.4s;
        }
        .program-keahlian-card:hover .program-image img {
            transform: scale(1.05);
        }
        .program-content { 
            padding: 25px; 
        }
        .program-content h4 {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 26px; /* Judul lebih besar */
            margin-bottom: 5px;
        }
        .program-content .small-desc {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 15px;
            font-weight: 500;
        }
        .program-content ul {
            list-style-type: none;
            padding-left: 0;
            margin-top: 20px;
        }
        .program-content ul li {
            margin-bottom: 10px;
            padding-left: 25px; 
            position: relative; 
        }
        .program-content ul li::before {
            content: '\f058'; /* Icon check circle */
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--secondary-color);
            font-size: 16px;
            top: 2px;
        }
 /* Styling Galeri Kegiatan */
        .galeri-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            height: 100%;
            text-align: center;
        }
        .galeri-img-container {
            width: 100%;
            height: 250px; 
            overflow: hidden;
            border-radius: 10px 10px 0 0;
        }
        .galeri-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
            transition: transform 0.5s ease;
        }
        .galeri-card:hover img {
            transform: scale(1.05);
        }
        .galeri-content {
            padding: 20px;
        }
        .galeri-content h4 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 0;
        }
        /* === 5. Footer Styling (Dirapikan) === */
        .footer-section h3 {
            color: white;
            margin-bottom: 20px;
            font-size: 22px;
            position: relative;
            padding-bottom: 10px;
            display: inline-block;
        }
        .footer-section h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0; /* Rata kiri */
            width: 50px;
            height: 3px;
            background-color: var(--secondary-color);
        }
        .footer-section p {
            text-align: left; /* Rata kiri */
        }
        .footer-section a {
             transition: color 0.3s;
        }
        .footer-section a:hover {
             color: var(--secondary-color) !important;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: var(--primary-color);">
        <div class="container">
            <a class="navbar-brand" href="#">SMK Bakti Idhata</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#profil-sekolah">Profil Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#program-keahlian">Program Keahlian</a>
                    </li>
                    <li class="nav-item ms-3">
                      
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="profil-sekolah" class="py-5 bg-white">
        <div class="container">
            <div class="section-title">
                <h2 class="text-uppercase">PROFIL SEKOLAH</h2>
            </div>
            
            <div class="row justify-content-center mb-8">
                <div class="col-lg-25 text-center">
                    <p class="lead text-muted mx-auto">
                        SMK Bakti Idhata merupakan sekolah berbasis digital dengan Learning Management System (LMS), terlisensi dari BNSP Nomor: BNSP-LSP-1186-ID di semua program keahlian Multimedia, Teknik Komputer Jaringan (TKJ) dan Rekayasa Perangkat Lunak (RPL), serta terakreaditasi A dengan No. SK BAP-S/M Nomor 500/BAP-S/M/DKI/2015. 
                    SMK Bakti Idhata selalu memberikan pelayanan terbaik dan terus mendorong semangat siswa untuk meningkatkan prestasinya, baik dalam bidang akademik maupun non akademik. Sarana dan Prasarana terus diperbaruhi disesuaikan dengan kebutuhan untuk menunjang kegiatan pembelajaran di era revolusi industri 4.0. SMK Bakti Idhata juga memiliki keunggulan antara lain Kelas Industri, Technopreneur, Bimbingan Akademik, Career Support, dan Bursa Kerja, sehingga tamatan dari SMK Bakti Idhata, memiliki banyak pilihan yaitu bekerja, berwirausaha, ataupun melanjutkan kuliah. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="visi-misi" class="py-5" style="background-color: var(--primary-color);">
        <div class="container">
             <div class="section-title">
                <h2 class="text-white">VISI MISI</h2>
            </div>
            <div class="row g-4 text-dark">
                <div class="col-md-6">
                    <div class="white-card">
                        <h4 class="program-title"><i class="fas fa-eye icon-small" style="color: var(--secondary-color);"></i> VISI</h4>
                        <p class="text-secondary">Menjadi Sekolah Menengah Kejuruan yang Unggul dan Mandiri dalam Mencetak Sumber Daya Manusia Berkepribadian Tangguh, Terampil, dan Berjiwa Wirausaha di Bidang Teknologi Informasi.</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="white-card">
                        <h4 class="program-title"><i class="fas fa-list-ul icon-small" style="color: var(--secondary-color);"></i> MISI</h4>
                        <ul class="list-unstyled text-secondary">
                            <li><i class="fas fa-check-circle me-2 text-success"></i> Membentuk tamatan yang berkepribadian unggul dan mampu mengembangkan diri.</li>
                            <li><i class="fas fa-check-circle me-2 text-success"></i> Menyiapkan tenaga terampil yang mampu bersaing di dunia kerja.</li>
                            <li><i class="fas fa-check-circle me-2 text-success"></i> Menyiapkan wirausahawan yang Tangguh dalam bidang Teknologi Informasi.</li>
                            <li><i class="fas fa-check-circle me-2 text-success"></i> Menyiapkan SMK Bakti Idhata sebagai SMK yang mandiri.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="keunggulan" class="py-5 bg-light">
        <div class="container">
            <div class="section-title">
                <h2>KEUNGGULAN SMK BAKTI IDHATA</h2>
            </div>
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="white-card">
                        <div class="text-center mb-3">
                             <i class="fas fa-laptop-code text-warning" style="font-size: 40px;"></i>
                        </div>
                        <h5 class="fw-bold text-primary">Fasilitas Modern</h5>
                        <p class="text-muted small">Dilengkapi laboratorium komputer, jaringan, dan multimedia yang menunjang pembelajaran berbasis teknologi.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="white-card">
                        <div class="text-center mb-3">
                             <i class="fas fa-handshake text-warning" style="font-size: 40px;"></i>
                        </div>
                        <h5 class="fw-bold text-primary">Kerjasama Industri</h5>
                        <p class="text-muted small">Bermitra dengan berbagai perusahaan IT dan kreatif untuk program magang dan rekrutmen siswa.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="white-card">
                        <div class="text-center mb-3">
                             <i class="fas fa-user-graduate text-warning" style="font-size: 40px;"></i>
                        </div>
                        <h5 class="fw-bold text-primary">Lulusan Kompeten</h5>
                        <p class="text-muted small">Mempersiapkan siswa menjadi tenaga profesional yang siap kerja, kuliah, maupun berwirausaha.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="program-keahlian" class="py-5" style="background-color: var(--bg-light-primary);">
        <div class="container">
            <div class="section-title">
                <h2 class="text-uppercase">PROGRAM KEAHLIAN / JURUSAN</h2>
            </div>
            <div class="row g-4 justify-content-center">
            
                <div class="col-lg-6">
                    <div class="program-keahlian-card">
                        <div class="program-image">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxRscjzALzMB96WwrWc1a0UtBhL1fs457mEw&s" alt="Teknik Komputer Jaringan">
                        </div>
                        <div class="program-content">
                            <h4>TKJ</h4>
                            <p class="small-desc">Teknik Komputer dan Jaringan</p>
                            <ul>
                                <li>Menginstalasi Perangkat Komputer Dan Menginstalasi Sistem Operasi Dan Aplikasi Perangkat Lunak.</li>
                                <li>Menginstalasi Perangkat Jaringan Berbasis Lokal (LAN).</li>
                                <li>Menginstalasi Perangkat Jaringan Berbasis Luas (WAN).</li>
                                <li>Merancang Bangun Dan Mengadministrasi Jaringan Berbasis Luas.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="program-keahlian-card">
                        <div class="program-image">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6AOlkUqF5jQEmOKW-1yxJvmUO2Dh7nAWm4A&s" alt="Rekayasa Perangkat Lunak">
                        </div>
                        <div class="program-content">
                            <h4>RPL</h4>
                            <p class="small-desc">Rekayasa Perangkat Lunak</p>
                            <ul>
                                <li>Membuat Algoritma Pemrograman.</li>
                                <li>Mengoperasikan software bahasa pemograman berbasis teks, dan visual.</li>
                                <li>Membuat Web Statis dan Dinamis.</li>
                                <li>Menguasai Teknik dan Sistem Komputer.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="program-keahlian-card">
                        <div class="program-image">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/3/34/Multimedia.jpg" alt="Desain Komunikasi Visual">
                        </div>
                        <div class="program-content">
                            <h4>MM</h4>
                            <p class="small-desc">Multimedia</p>
                            <ul>
                                <li>Mengoperasikan software dan pheriperal digital ilustration, digital imaging dan web desain.</li>
                                <li>Mengoperasikan software dan pheriperal mulit media, presentation, 2D animation dan 3D animation.</li>
                                <li>Mengoperasikan software dan pheriperal digital audio, digital vidio dan visual effect.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="program-keahlian-card">
                        <div class="program-image">
                            <img src="https://bimbelgambar.id/wp-content/uploads/2025/02/jurusan-desain-komunikasi-visual.png" alt="Desain Komunikasi Visual">
                        </div>
                        <div class="program-content">
                            <h4>DKV</h4>
                            <p class="small-desc">Desain Komunikasi Visual</p>
                            <ul>
                                <li>Menguasai desain grafis, ilustrasi, dan tipografi.</li>
                                <li>Membuat konten visual untuk media digital dan cetak.</li>
                                <li>Mempelajari teknik fotografi, videografi, dan animasi dasar.</li>
                                <li>Peluang Karir: Desainer Grafis, UI/UX Designer, Content Creator.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
 <section id="galeri" class="py-5 bg-light">
        <div class="container">
            <div class="section-title">
                <h2 style="color: var(--primary-color);">GALERI KEGIATAN</h2>
            </div>
            
            <div class="row justify-content-center g-4">
                
                <div class="col-lg-5 col-md-6">
                    <div class="galeri-card">
                        <div class="galeri-img-container">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNApmramRJwHZ8PdKGuBeY1vFUteCtXNG2Bg&s" alt="Kegiatan Kelas Industri">
                        </div>
                        <div class="galeri-content">
                            <h4>Kegiatan Kelas Industri</h4>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-5 col-md-6">
                    <div class="galeri-card">
                        <div class="galeri-img-container">
                            <img src="https://pbs.twimg.com/media/C_mAm9EUQAAS2FK.jpg" alt="Kegiatan JKT48 Goes to School">
                        </div>
                        <div class="galeri-content">
                            <h4>Kegiatan JKT48 Goes to School</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <footer class="text-white py-5 text-center" id="kontak" style="background-color: var(--primary-color) !important;">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 text-md-start footer-section">
                    <h3>Kontak Kami</h3>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Jl. Melati No.25, RT.13/RW.10, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430</p>
                    <p><i class="fas fa-phone me-2"></i> (021)75904088</p>
                    <p><i class="fas fa-envelope me-2"></i> info@smkbaktiidhata.sch.id/</p>
                </div>
                
               

                
                </div>
            </div>
            <hr class="mt-4 mb-3">
  
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>