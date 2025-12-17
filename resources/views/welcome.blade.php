<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Bakti Idhata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #581c87;
            --secondary-color: #ffc107;
        }
        .body { font-family: 'Poppins', sans-serif; }
        
        /* Navbar */
        .navbar { transition: 0.3s; padding: 20px 0; }
        .navbar-brand { font-weight: 700; font-size: 24px; color: white !important; }
        .nav-link { color: rgba(255,255,255,0.8) !important; font-weight: 500; margin-left: 20px; }
        .nav-link:hover { color: white !important; }

        
        /* Hero */
        .hero-section {
            position: relative; /* Penting agar ::before tidak kabur */
            overflow: hidden;   /* Agar blur tidak 'bocor' keluar kotak */ 
            height: 90vh; 
            display: flex;
            align-items: center;
            color: white;
        }

        .hero-section::before {
            content: "";
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background-image: url('../img/bakdat2.jpg'); 
            background-size: cover;
            background-position: center;

           filter: blur(5px);
    
            transform: scale(1.1); 
    
            z-index: -2; /* Taruh di paling belakang */
        }

        .hero-section::after {
            content: "";
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: -1;
        }

        /* Cards */
        .floating-container { margin-top: -100px; position: relative; z-index: 10; }
        .info-card {
            background: white; padding: 30px; border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1); border: none; transition: transform 0.3s;
        }
        .info-card:hover { transform: translateY(-10px); }
        .icon-box { font-size: 40px; color: var(--primary-color); margin-bottom: 15px; }

        /* Footer */
        .footer-section h3 { color: white; margin-bottom: 20px; font-size: 20px; position: relative; padding-bottom: 10px; display: inline-block; }
        .footer-section h3::after { content: ''; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 50px; height: 2px; background-color: white; }
  
        /* Wrapper agar Logo & Judul jejer ke samping */
        .header-wrapper {
            display: flex;
            align-items: center;
            gap: 20px;       /* Jarak logo ke teks */
            margin-bottom: 20px;
        }

/* Ukuran Logo */
        .school-logo {
            width: 80px;     /* Sesuaikan besar logo */
            height: auto;
}
   
   </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg position-absolute w-100 z-3">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/welcome') }}">SMK BAKTI IDHATA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('/tentang-sekolah') }}#galeri">Galeri Kegiatan</a> 
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('/tentang-sekolah') }}#program-keahlian">Program Keahlian</a>
                    </li>
    
                    <li class="nav-item ms-3">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-warning px-4 py-2 rounded-pill fw-bold">Dashboard</a>
                    @else
                    <a href="{{ url('/login') }}" class="btn btn-light text-primary px-4 py-2 rounded-pill fw-bold">Login</a>
                    @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container text-center text-md-start">
            <div class="row align-items-center">
                <div class="col-lg-7">
    <span class="text-uppercase tracking-wider mb-2 d-block text-warning fw-bold">Vocational Highschool</span>
    
    <div class="d-flex align-items-center mb-4">
        <img src="{{ asset('img/logo bakdat.png') }}" alt="Logo" class="me-3 school-logo rounded-circle" style="height: 80px;">
        
        <h1 class="display-3 fw-bold mb-0">SMK BAKTI IDHATA</h1>
    </div>
    <p class="lead mb-5 text-white-250">Technopreneur School For Future.</p>
    <a href="{{ url('/tentang-sekolah') }}" class="btn btn-warning btn-lg rounded-pill fw-bold px-5">Selengkapnya</a>
</div>
            </div>
        </div>
    </section>

    <section class="floating-container mb-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card info-card h-100">
                        <div class="d-flex align-items-start">
                            <div class="icon-box me-3"><i class="fas fa-eye"></i></div>
                            <div>
                                <h4 class="fw-bold" style="color: var(--primary-color);">Visi Utama</h4>
                                <p class="text-muted small">Menjadi SMK Unggul dan Mandiri dalam Mencetak SDM Berkepribadian Tangguh.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card info-card h-100">
                        <div class="d-flex align-items-start">
                            <div class="icon-box me-3"><i class="fas fa-cogs"></i></div>
                            <div>
                                <h4 class="fw-bold" style="color: var(--primary-color);">Skill Vokasi</h4>
                                <p class="text-muted small">Sarana Prasarana modern sesuai kebutuhan era industri 4.0.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card info-card h-100">
                        <div class="d-flex align-items-start">
                            <div class="icon-box me-3"><i class="fas fa-handshake"></i></div>
                            <div>
                                <h4 class="fw-bold" style="color: var(--primary-color);">Siap Kerja</h4>
                                <p class="text-muted small">Kelas Industri, Technopreneur, dan Career Support untuk masa depan siswa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-white py-5 mt-5 text-center" style="background-color: var(--primary-color) !important;">
        <div class="container">
            <p>&copy; 2025 SMK Bakti Idhata. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>