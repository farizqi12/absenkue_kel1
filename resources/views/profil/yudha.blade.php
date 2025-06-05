<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Yudha</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --orange-primary: #FF6B00;
            --orange-light: #FF8C42;
            --orange-dark: #E05D00;
            --text-dark: #333;
            --text-light: #f8f8f8;
            --bg-light: #fff;
            --bg-dark: #222;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--bg-light);
            color: var(--text-dark);
            overflow-x: hidden;
        }
        
        /* Animasi */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        @keyframes slideInLeft {
            from { transform: translateX(-100px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 5%;
            background-color: var(--bg-light);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
            animation: fadeIn 1s ease-out;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--orange-primary);
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 30px;
        }
        
        nav ul li a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }
        
        nav ul li a:hover {
            color: var(--orange-primary);
        }
        
        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--orange-primary);
            bottom: -5px;
            left: 0;
            transition: width 0.3s;
        }
        
        nav ul li a:hover::after {
            width: 100%;
        }
        
        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            padding: 0 10%;
            background: linear-gradient(135deg, rgba(255,107,0,0.1) 0%, rgba(255,255,255,1) 100%);
            position: relative;
            overflow: hidden;
        }
        
        /* Elemen bulat estetik */
        .hero::before {
            content: '';
            position: absolute;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255,107,0,0.1) 0%, rgba(255,107,0,0) 70%);
            top: -300px;
            right: -300px;
            z-index: 0;
        }
        
        .hero::after {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255,107,0,0.08) 0%, rgba(255,107,0,0) 70%);
            bottom: -200px;
            left: -200px;
            z-index: 0;
        }
        
        .hero-content {
            width: 50%;
            animation: slideInLeft 1s ease-out;
            position: relative;
            z-index: 1;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: var(--orange-primary);
        }
        
        .hero h2 {
            font-size: 1.8rem;
            margin-bottom: 30px;
            font-weight: 400;
        }
        
        .hero p {
            margin-bottom: 40px;
            line-height: 1.6;
        }
        
        .cta-button {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--orange-primary);
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s;
            border: 2px solid var(--orange-primary);
            animation: pulse 2s infinite;
        }
        
        .cta-button:hover {
            background-color: transparent;
            color: var(--orange-primary);
            animation: none;
            transform: translateY(-3px);
        }
        
        .hero-image {
            position: absolute;
            right: 10%;
            width: 40%;
            height: 80%;
            border-radius: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: visible;
            box-shadow: none;
            z-index: 1;
        }
        
        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.9;
            border-radius: 20px;
        }
        
        /* Elemen bulat tambahan */
        .circle {
            position: absolute;
            border-radius: 50%;
            background-color: rgba(255, 107, 0, 0.1);
            z-index: 0;
            animation: float 6s ease-in-out infinite;
        }
        
        .circle-1 {
            width: 200px;
            height: 200px;
            top: 20%;
            right: 15%;
            animation-delay: 0s;
        }
        
        .circle-2 {
            width: 250px;
            height: 250px;
            bottom: 3%;
            right: 10%;
            animation-delay: 1s;
        }
        
        .circle-3 {
            width: 300px;
            height: 300px;
            top: 40%;
            right: 30%;
            animation-delay: 2s;
        }
        
        .circle-4 {
            width: 120px;
            height: 120px;
            bottom: 25%;
            left: 10%;
            animation-delay: 0.5s;
        }
        
        /* About Section */
        .about {
            padding: 100px 10%;
            background-color: var(--bg-light);
            position: relative;
            overflow: hidden;
        }
        
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 60px;
            color: var(--orange-primary);
            position: relative;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background-color: var(--orange-primary);
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
            position: relative;
            z-index: 1;
        }
        
        .about-text {
            flex: 1;
        }
        
        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
        }
        
        .about-text p {
            margin-bottom: 30px;
            line-height: 1.8;
        }
        
        .stats {
            display: flex;
            gap: 30px;
            margin-top: 30px;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--orange-primary);
            margin-bottom: 5px;
        }
        
        .stat-label {
            font-size: 1rem;
            color: var(--text-dark);
        }
        
        .about-image {
            flex: 1;
            position: relative;
            height: 400px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .about-image:hover img {
            transform: scale(1.05);
        }
        
        /* Services Section */
        .services {
            padding: 100px 10%;
            background-color: #f9f9f9;
            position: relative;
            overflow: hidden;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
            position: relative;
            z-index: 1;
        }
        
        .service-card {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            text-align: center;
            opacity: 0;
            transform: translateY(50px);
        }
        
        .service-card.animate {
            opacity: 1;
            transform: translateY(0);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(255, 107, 0, 0.1);
        }
        
        .service-icon {
            font-size: 3rem;
            color: var(--orange-primary);
            margin-bottom: 20px;
        }
        
        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }
        
        .service-card p {
            line-height: 1.6;
            color: #666;
        }
        
        /* Portfolio Section */
        .portfolio {
            padding: 100px 10%;
            position: relative;
            overflow: hidden;
        }
        
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .portfolio-item {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            height: 300px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .portfolio-item.animate {
            opacity: 1;
            transform: translateY(0);
        }
        
        .portfolio-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(255, 107, 0, 0.8) 0%, rgba(255, 107, 0, 0.2) 100%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 30px;
            opacity: 0;
            transition: opacity 0.3s;
        }
        
        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }
        
        .portfolio-item:hover .portfolio-image {
            transform: scale(1.1);
        }
        
        .portfolio-overlay h3 {
            color: white;
            font-size: 1.8rem;
            margin-bottom: 10px;
            transform: translateY(20px);
            transition: transform 0.3s;
        }
        
        .portfolio-overlay p {
            color: white;
            margin-bottom: 20px;
            transform: translateY(20px);
            transition: transform 0.3s 0.1s;
        }
        
        .portfolio-overlay a {
            align-self: flex-start;
            transform: translateY(20px);
            transition: transform 0.3s 0.2s;
        }
        
        .portfolio-item:hover .portfolio-overlay h3,
        .portfolio-item:hover .portfolio-overlay p,
        .portfolio-item:hover .portfolio-overlay a {
            transform: translateY(0);
        }
        
        /* Experience Section */
        .experience {
            padding: 100px 10%;
            background-color: var(--orange-primary);
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .experience-content {
            display: flex;
            align-items: center;
            gap: 50px;
            margin-top: 50px;
            position: relative;
            z-index: 1;
        }
        
        .experience-text {
            flex: 1;
        }
        
        .experience-text h3 {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        
        .experience-text p {
            margin-bottom: 30px;
            line-height: 1.8;
        }
        
        .skills-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        
        .skill-item {
            display: flex;
            align-items: center;
        }
        
        .skill-item i {
            margin-right: 10px;
            color: white;
        }
        
        .experience-image {
            flex: 1;
            position: relative;
            height: 400px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }
        
        .experience-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        /* Process Section */
        .process {
            padding: 100px 10%;
            background-color: #f9f9f9;
            position: relative;
            overflow: hidden;
        }
        
        .process-steps {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
            flex-wrap: wrap;
        }
        
        .step {
            width: 30%;
            text-align: center;
            padding: 40px 20px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            position: relative;
            transition: all 0.3s;
            opacity: 0;
            transform: translateY(50px);
        }
        
        .step.animate {
            opacity: 1;
            transform: translateY(0);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .step:nth-child(1).animate {
            transition-delay: 0.1s;
        }
        
        .step:nth-child(2).animate {
            transition-delay: 0.3s;
        }
        
        .step:nth-child(3).animate {
            transition-delay: 0.5s;
        }
        
        .step:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(255, 107, 0, 0.1);
        }
        
        .step-number {
            width: 60px;
            height: 60px;
            background-color: var(--orange-primary);
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 auto 20px;
        }
        
        .step h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--orange-primary);
        }
        
        .step p {
            line-height: 1.6;
            color: #666;
        }
        
        /* Awards Section */
        .awards {
            padding: 100px 10%;
            position: relative;
            overflow: hidden;
        }
        
        .awards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .award-card {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            opacity: 0;
            transform: translateY(50px);
        }
        
        .award-card.animate {
            opacity: 1;
            transform: translateY(0);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .award-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(255, 107, 0, 0.1);
        }
        
        .award-year {
            font-size: 1rem;
            color: var(--orange-primary);
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .award-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }
        
        .award-card p {
            line-height: 1.6;
            color: #666;
            margin-bottom: 20px;
        }
        
        .award-link {
            color: var(--orange-primary);
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
        }
        
        .award-link i {
            margin-left: 5px;
            transition: transform 0.3s;
        }
        
        .award-link:hover i {
            transform: translateX(5px);
        }
        
        /* Skills Section */
        .skills {
            padding: 100px 10%;
            background-color: #f9f9f9;
            position: relative;
            overflow: hidden;
        }
        
        .skills-bars {
            max-width: 800px;
            margin: 50px auto 0;
        }
        
        .skill-bar {
            margin-bottom: 30px;
        }
        
        .skill-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        
        .skill-name {
            font-weight: 600;
        }
        
        .skill-percent {
            color: var(--orange-primary);
            font-weight: 700;
        }
        
        .skill-progress {
            height: 10px;
            background-color: #e0e0e0;
            border-radius: 5px;
            overflow: hidden;
        }
        
        .skill-progress-bar {
            height: 100%;
            background-color: var(--orange-primary);
            border-radius: 5px;
            width: 0;
            transition: width 1.5s ease-out;
        }
        
        /* Quote Section */
        .quote {
            padding: 100px 10%;
            text-align: center;
            background-color: var(--orange-primary);
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .quote-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }
        
        .quote-text {
            font-size: 2rem;
            font-weight: 300;
            line-height: 1.6;
            margin-bottom: 40px;
            font-style: italic;
        }
        
        .quote-author {
            font-size: 1.2rem;
            font-weight: 600;
        }
        
        /* Footer */
        footer {
            background-color: var(--bg-dark);
            color: var(--text-light);
            padding: 50px 10% 20px;
            text-align: center;
            position: relative;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 40px;
            position: relative;
            z-index: 1;
        }
        
        .footer-column {
            width: 30%;
            margin-bottom: 30px;
        }
        
        .footer-column h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--orange-primary);
        }
        
        .footer-column p {
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        
        .social-links a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background-color: var(--orange-primary);
            transform: translateY(-5px);
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            position: relative;
            z-index: 1;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .hero-content {
                width: 100%;
                text-align: center;
            }
            
            .hero-image {
                display: none;
            }
            
            .about-content, .experience-content {
                flex-direction: column;
            }
            
            .footer-column {
                width: 100%;
                text-align: center;
            }
            
            .social-links {
                justify-content: center;
            }
            
            .circle {
                display: none;
            }
        }
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero h2 {
                font-size: 1.5rem;
            }
            
            .stats {
                flex-direction: column;
                gap: 20px;
            }
            
            .step {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">My Portofolio 2025</div>
        <nav>
            <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="#contact">Kontak</a></li>
                <li><a href="#portfolio">Proyek</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="hero">
        <!-- Elemen bulat estetik -->
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
        <div class="circle circle-3"></div>
        <div class="circle circle-4"></div>
        
        <div class="hero-content">
            <h1>Halo Semua, Saya <br>Yudha Adi Saputra</h1>
            <h2>Web Designer & Developer</h2>
            <p>Saya seorang desainer dan pengembang web dengan passion menciptakan pengalaman digital yang menarik dan fungsional. Dengan pendekatan berbasis komponen dan sistem desain, saya membantu klien mencapai tujuan bisnis mereka melalui solusi web yang inovatif.</p>
            <a href="#contact" class="cta-button">Hubungi Saya</a>
        </div>
        <div class="hero-image">
            <img src="{{ asset('img/fotoyd3.png') }}" alt="Web Designer">
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <h2 class="section-title">Tentang Saya</h2>
        <div class="about-content">
            <div class="about-text">
                <h3>Belajar Mengembangkan Situs dengan Komponen dan Sistem Desain</h3>
                <p>Saya percaya bahwa desain web yang baik dimulai dengan fondasi yang kuat. Dengan pendekatan berbasis komponen, saya menciptakan sistem desain yang konsisten dan skalabel yang memungkinkan pengembangan yang lebih cepat dan pengalaman pengguna yang lebih baik.</p>
                <div class="stats">
                    <div class="stat-item">
                        <div class="stat-number">2+</div>
                        <div class="stat-label">Tahun Pengalaman</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">17+</div>
                        <div class="stat-label">Klien Percaya</div>
                    </div>
                </div>
            </div>
            <div class="about-image">
                <img src="{{ asset('img/fotoyd2.jpeg') }}" alt="Team Work">
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <h2 class="section-title">Layanan dan Diskusi</h2>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-code"></i></div>
                <h3>Pemrograman</h3>
                <p>Solusi pengembangan web custom dengan teknologi terbaru seperti React, Next.js, dan Node.js untuk performa optimal.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-paint-brush"></i></div>
                <h3>Desain Web</h3>
                <p>Desain web yang responsif dan menarik yang tidak hanya indah tetapi juga meningkatkan konversi dan engagement.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-mobile-alt"></i></div>
                <h3>UI/UX</h3>
                <p>Fokus pada pengalaman pengguna yang mulus dan antarmuka yang intuitif untuk meningkatkan kepuasan pengguna.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-comments"></i></div>
                <h3>Konsultasi</h3>
                <p>Diskusi tentang strategi digital Anda dan bagaimana teknologi dapat membantu mencapai tujuan bisnis Anda.</p>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio" id="portfolio">
        <h2 class="section-title">Proyek Pilihan Saya</h2>
        <div class="portfolio-grid">
            <div class="portfolio-item">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="UI/UX Design" class="portfolio-image">
                <div class="portfolio-overlay">
                    <h3>Desain Antarmuka & Pengalaman Pengguna</h3>
                    <p>Solusi desain yang berfokus pada pengguna untuk meningkatkan engagement dan konversi.</p>
                    <a href="#" class="cta-button">Pesan Sekarang</a>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Mobile App" class="portfolio-image">
                <div class="portfolio-overlay">
                    <h3>Aplikasi Mobile & Pengembangan</h3>
                    <p>Aplikasi mobile cross-platform dengan performa native dan UX yang mulus.</p>
                    <a href="#" class="cta-button">Pesan Sekarang</a>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="React Next" class="portfolio-image">
                <div class="portfolio-overlay">
                    <h3>React Next & Pengkodean Responsif</h3>
                    <p>Situs web modern dengan React dan Next.js untuk performa dan SEO terbaik.</p>
                    <a href="#" class="cta-button">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="experience">
        <h2 class="section-title" style="color: white;">2 Tahun Pengalaman</h2>
        <div class="experience-content">
            <div class="experience-text">
                <h3>Menciptakan Solusi Berani dan Berorientasi Masa Depan</h3>
                <p>Dengan pengalaman selama satu dekade dalam industri ini, saya telah mengembangkan pendekatan unik yang menggabungkan estetika desain dengan solusi teknis yang kuat untuk menciptakan produk digital yang berdampak.</p>
                <div class="skills-list">
                    <div class="skill-item">
                        <i class="fas fa-check-circle"></i> Desain UI/UX
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-check-circle"></i> Desain & Pengembangan Website
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-check-circle"></i> Desain Aplikasi
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-check-circle"></i> Desain Landing Page
                    </div>
                </div>
            </div>
            <div class="experience-image">
                <img src="{{ asset('img/fotoyd3.jpeg') }}" alt="Experience">
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process" id="process">
        <h2 class="section-title">Proses Kerja Saya</h2>
        <div class="process-steps">
            <div class="step">
                <div class="step-number">1</div>
                <h3>Branding & Riset</h3>
                <p>Memahami merek dan audiens target melalui riset mendalam untuk menciptakan solusi yang tepat.</p>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <h3>Pengembangan</h3>
                <p>Menerjemahkan konsep menjadi produk nyata dengan teknologi terbaru dan praktik terbaik.</p>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <h3>Produk Akhir</h3>
                <p>Pengujian menyeluruh dan penyempurnaan sebelum peluncuran untuk memastikan kualitas terbaik.</p>
            </div>
        </div>
    </section>

    <!-- Awards Section -->
    <section class="awards" id="awards">
        <h2 class="section-title">Penghargaan Desainer Web Saya</h2>
        <div class="awards-grid">
            <div class="award-card">
                <div class="award-year">Penghargaan 2021</div>
                <h3>Desainer Awards 2021</h3>
                <p>Diakui sebagai salah satu desainer web paling inovatif tahun 2021 untuk pendekatan revolusioner dalam sistem desain komponen.</p>
                <a href="#" class="award-link">Lihat Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="award-card">
                <div class="award-year">Penghargaan 2022</div>
                <h3>Desainer Awards 2022</h3>
                <p>Memperoleh penghargaan untuk desain pengalaman pengguna terbaik dalam kategori e-commerce tahun 2022.</p>
                <a href="#" class="award-link">Lihat Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="skills" id="skills">
        <h2 class="section-title">Keahlian Pribadi Saya</h2>
        <div class="skills-bars">
            <div class="skill-bar">
                <div class="skill-info">
                    <span class="skill-name">Pengembangan Web</span>
                    <span class="skill-percent">85%</span>
                </div>
                <div class="skill-progress">
                    <div class="skill-progress-bar" style="width: 85%"></div>
                </div>
            </div>
            <div class="skill-bar">
                <div class="skill-info">
                    <span class="skill-name">Desain Aplikasi</span>
                    <span class="skill-percent">75%</span>
                </div>
                <div class="skill-progress">
                    <div class="skill-progress-bar" style="width: 90%"></div>
                </div>
            </div>
            <div class="skill-bar">
                <div class="skill-info">
                    <span class="skill-name">Desain Landing Page</span>
                    <span class="skill-percent">80%</span>
                </div>
                <div class="skill-progress">
                    <div class="skill-progress-bar" style="width: 80%"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <section class="quote">
        <div class="quote-content">
            <p class="quote-text">"Saya menciptakan produk, bukan hanya seni. Setiap masalah adalah hadiah, tanpa masalah kita tidak akan tumbuh."</p>
            <div class="quote-author">- Sebastian Bennett</div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="footer-content">
            <div class="footer-column">
                <h3>Portofolio 2025</h3>
                <p>Yudha Adi Saputra - Web Designer & Developer dengan passion menciptakan solusi digital yang indah dan fungsional.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-behance"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-column">
                <h3>Kontak</h3>
                <p>Email: yudhaadisaputra999@gmail.com</p>
                <p>Telepon: +62 878 6446 5253</p>
                <p>Alamat: Jawa Timur-Lumajang, Indonesia</p>
            </div>
            <div class="footer-column">
                <h3>Navigasi Cepat</h3>
                <p><a href="#about" style="color: white; text-decoration: none;">Tentang Saya</a></p>
                <p><a href="#services" style="color: white; text-decoration: none;">Layanan</a></p>
                <p><a href="#portfolio" style="color: white; text-decoration: none;">Portofolio</a></p>
                <p><a href="#contact" style="color: white; text-decoration: none;">Kontak</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Yudha Adi Saputra. All Rights Reserved. <br> 
            <span style="font-size: 1.2em;">🙏</span> Terima kasih sudah berkunjung!</p>
        </div>
    </footer>

    <script>
        // Animasi saat scroll
        document.addEventListener('DOMContentLoaded', function() {
            // Animasi skill bar
            const skillBars = document.querySelectorAll('.skill-progress-bar');
            
            const animateSkillBars = () => {
                skillBars.forEach(bar => {
                    const percent = bar.parentElement.previousElementSibling.querySelector('.skill-percent').textContent;
                    bar.style.width = percent;
                });
            };
            
            // Animasi elemen saat muncul di viewport
            const animateOnScroll = () => {
                const elements = document.querySelectorAll('.service-card, .portfolio-item, .step, .award-card');
                
                elements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.3;
                    
                    if (elementPosition < screenPosition) {
                        element.classList.add('animate');
                    }
                });
            };
            
            // Trigger animation when skills section is in view
            const skillsSection = document.querySelector('.skills');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateSkillBars();
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });
            
            observer.observe(skillsSection);
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
            
            // Jalankan animasi saat load dan scroll
            window.addEventListener('load', animateOnScroll);
            window.addEventListener('scroll', animateOnScroll);
            
            // Animasi hover emoticon sungkem
            const sungkemEmoji = document.querySelector('.footer-bottom span');
            if (sungkemEmoji) {
                sungkemEmoji.addEventListener('mouseover', function() {
                    this.style.transform = 'rotate(-15deg) scale(1.5)';
                });
                
                sungkemEmoji.addEventListener('mouseout', function() {
                    this.style.transform = 'rotate(0) scale(1)';
                });
            }
        });
    </script>
</body>
</html>