<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #0c0c0c 0%, #1a1a1a 50%, #0f0f0f 100%);
            color: #ffffff;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* Animated Background */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.1;
        }

        .bg-animation::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 50%, #6366f1 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, #8b5cf6 0%, transparent 50%),
                        radial-gradient(circle at 40% 80%, #06b6d4 0%, transparent 50%);
            animation: backgroundMove 20s ease-in-out infinite;
        }

        @keyframes backgroundMove {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(10, 10, 10, 0.95);
            backdrop-filter: blur(20px);
            z-index: 1000;
            padding: 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border-bottom: 1px solid rgba(99, 102, 241, 0.1);
        }

        nav.scrolled {
            background: rgba(5, 5, 5, 0.98);
            box-shadow: 0 8px 32px rgba(99, 102, 241, 0.15);
            border-bottom: 1px solid rgba(99, 102, 241, 0.3);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
            height: 70px;
        }

        .nav-logo {
            font-size: 1.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #6366f1, #8b5cf6, #06b6d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .nav-logo:hover {
            transform: scale(1.05);
            filter: drop-shadow(0 0 10px rgba(99, 102, 241, 0.5));
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 0;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50px;
            padding: 0.5rem;
            border: 1px solid rgba(99, 102, 241, 0.2);
        }

        nav li {
            position: relative;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            display: block;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
        }

        nav a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.2), rgba(139, 92, 246, 0.2));
            border-radius: 25px;
            opacity: 0;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transform: scale(0.8);
        }

        nav a:hover::before {
            opacity: 1;
            transform: scale(1);
        }

        nav a.active::before {
            opacity: 1;
            transform: scale(1);
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.3), rgba(139, 92, 246, 0.3));
        }

        nav a:hover {
            color: #ffffff;
            transform: translateY(-1px);
            text-shadow: 0 0 10px rgba(99, 102, 241, 0.5);
        }

        nav a.active {
            color: #ffffff;
            text-shadow: 0 0 10px rgba(99, 102, 241, 0.7);
        }

        /* Mobile menu button */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: #ffffff;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .mobile-menu-btn:hover {
            background: rgba(99, 102, 241, 0.2);
            transform: scale(1.1);
        }

        /* Sections */
        section {
            min-height: 100vh;
            padding: 6rem 2rem 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease;
        }

        section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .container {
            max-width: 1200px;
            width: 100%;
            text-align: center;
        }

        /* Hero Section */
        .hero {
            position: relative;
            background: radial-gradient(ellipse at center, rgba(99, 102, 241, 0.1) 0%, transparent 70%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .profile-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: linear-gradient(45deg, #6366f1, #8b5cf6, #06b6d4);
            margin: 0 auto 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: float 3s ease-in-out infinite;
            position: relative;
            overflow: hidden;
        }

        .profile-image::before {
            content: '';
            position: absolute;
            top: 2px;
            left: 2px;
            right: 2px;
            bottom: 2px;
            background: #1a1a1a;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile-image img {
            width: 90%;
            height: 90%;
            object-fit: cover;
            border-radius: 50%;
            z-index: 1;
            position: relative;
        }

        .profile-placeholder {
            font-size: 4rem;
            color: #6366f1;
            z-index: 1;
            position: relative;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #6366f1, #8b5cf6, #06b6d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: titleGlow 2s ease-in-out infinite alternate;
        }

        @keyframes titleGlow {
            from { filter: drop-shadow(0 0 10px rgba(99, 102, 241, 0.5)); }
            to { filter: drop-shadow(0 0 20px rgba(139, 92, 246, 0.8)); }
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: #a0a0a0;
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 2rem;
            background: linear-gradient(45deg, #6366f1, #8b5cf6);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.4);
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .cta-button:hover::before {
            left: 100%;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(99, 102, 241, 0.6);
        }

        /* About Section */
        .about {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(10px);
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #6366f1;
        }

        .about-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #b0b0b0;
            margin-bottom: 1.5rem;
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 2rem;
        }

        .skill-tag {
            background: rgba(99, 102, 241, 0.1);
            border: 1px solid rgba(99, 102, 241, 0.3);
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .skill-tag:hover {
            background: rgba(99, 102, 241, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
        }

        .about-image {
            width: 100%;
            height: 400px;
            background: linear-gradient(45deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.1));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #6366f1;
            border: 2px solid rgba(99, 102, 241, 0.2);
        }

        /* Projects Section */
        .projects {
            background: rgba(0, 0, 0, 0.3);
        }

        .projects h2 {
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #6366f1;
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .project-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 2rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(99, 102, 241, 0.2);
            transition: all 0.3s ease;
            transform: translateY(20px);
            opacity: 0;
        }

        .project-card.visible {
            transform: translateY(0);
            opacity: 1;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(99, 102, 241, 0.3);
            border-color: rgba(99, 102, 241, 0.5);
        }

        .project-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #8b5cf6;
        }

        .project-card p {
            color: #b0b0b0;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .project-link {
            color: #6366f1;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .project-link:hover {
            color: #8b5cf6;
            text-shadow: 0 0 10px rgba(139, 92, 246, 0.5);
        }

        /* Achievements Section */
        .achievements {
            background: linear-gradient(135deg, rgba(139, 92, 246, 0.05) 0%, rgba(99, 102, 241, 0.05) 50%, rgba(6, 182, 212, 0.05) 100%);
            border-top: 1px solid rgba(99, 102, 241, 0.1);
            border-bottom: 1px solid rgba(99, 102, 241, 0.1);
        }

        .achievements h2 {
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #8b5cf6;
            text-align: center;
        }

        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .achievement-card {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 20px;
            padding: 2rem;
            backdrop-filter: blur(15px);
            border: 1px solid rgba(139, 92, 246, 0.2);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateY(30px);
            opacity: 0;
            position: relative;
            overflow: hidden;
        }

        .achievement-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(139, 92, 246, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .achievement-card:hover::before {
            left: 100%;
        }

        .achievement-card.visible {
            transform: translateY(0);
            opacity: 1;
        }

        .achievement-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 20px 40px rgba(139, 92, 246, 0.25);
            border-color: rgba(139, 92, 246, 0.4);
        }

        .achievement-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #8b5cf6, #6366f1);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .achievement-icon::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(from 0deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            animation: iconRotate 3s linear infinite;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .achievement-card:hover .achievement-icon::before {
            opacity: 1;
        }

        @keyframes iconRotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .achievement-card h3 {
            font-size: 1.4rem;
            margin-bottom: 0.75rem;
            color: #ffffff;
            font-weight: 600;
        }

        .achievement-date {
            color: #8b5cf6;
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .achievement-date::before {
            content: "📅";
            font-size: 0.8rem;
        }

        .achievement-card p {
            color: #b0b0b0;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .achievement-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(139, 92, 246, 0.15);
            border: 1px solid rgba(139, 92, 246, 0.3);
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-size: 0.85rem;
            color: #8b5cf6;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .achievement-badge:hover {
            background: rgba(139, 92, 246, 0.25);
            transform: scale(1.05);
        }

        .achievement-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
            padding: 2rem;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 20px;
            border: 1px solid rgba(139, 92, 246, 0.1);
        }

        .stat-item {
            text-align: center;
            padding: 1rem;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.02);
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            background: rgba(139, 92, 246, 0.1);
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #8b5cf6, #6366f1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #b0b0b0;
            font-size: 1rem;
            font-weight: 500;
        }

        .contact h2 {
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #06b6d4;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 2rem;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #b0b0b0;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(99, 102, 241, 0.3);
            border-radius: 10px;
            color: #ffffff;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 15px rgba(99, 102, 241, 0.3);
        }

        .submit-btn {
            background: linear-gradient(45deg, #06b6d4, #6366f1);
            color: white;
            border: none;
            padding: 1rem 3rem;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(6, 182, 212, 0.4);
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(6, 182, 212, 0.6);
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 2rem;
            background: rgba(0, 0, 0, 0.8);
            color: #666;
            border-top: 1px solid rgba(99, 102, 241, 0.2);
        }

        /* Contact Section */
        .contact {
            background: radial-gradient(ellipse at center, rgba(6, 182, 212, 0.1) 0%, transparent 70%);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .about-content { grid-template-columns: 1fr; }
            
            .nav-container {
                padding: 0 1rem;
            }
            
            nav ul {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: rgba(10, 10, 10, 0.98);
                flex-direction: column;
                padding: 1rem;
                border-radius: 0 0 20px 20px;
                border: 1px solid rgba(99, 102, 241, 0.2);
                border-top: none;
            }
            
            nav ul.mobile-active {
                display: flex;
            }
            
            nav a {
                padding: 1rem;
                text-align: center;
                border-radius: 10px;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .achievements-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .achievement-stats {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }
            
            section { padding: 4rem 1rem 2rem; }
        }

        /* Scroll indicators */
        .scroll-indicator {
            position: fixed;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            color: #6366f1;
            animation: bounce 2s infinite;
            z-index: 100;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
            40% { transform: translateX(-50%) translateY(-10px); }
            60% { transform: translateX(-50%) translateY(-5px); }
        }
    </style>
</head>
<body>
    <div class="bg-animation"></div>
    
    <nav id="nav">
        <div class="nav-container">
            <a href="#home" class="nav-logo">Portfolio</a>
            <ul id="nav-menu">
                <li><a href="#home" class="nav-link active">Beranda</a></li>
                <li><a href="#about" class="nav-link">Tentang</a></li>
                <li><a href="#projects" class="nav-link">Proyek</a></li>
                <li><a href="#achievements" class="nav-link">Prestasi</a></li>
                <li><a href="#contact" class="nav-link">Kontak</a></li>
            </ul>
            <button class="mobile-menu-btn" id="mobile-menu-btn">
                <span>☰</span>
            </button>
        </div>
    </nav>
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="profile-image">
                    {{-- <div class="profile-placeholder">👤</div> --}}
                    <img src="{{ asset('img/fotoqq.jpg') }}" alt="Foto Profil">
                </div>
                <h1>Nama Anda</h1>
                <p>Pengembang Web Full Stack | Designer UI/UX | Programmer</p>
                <a href="#about" class="cta-button">Pelajari Lebih Lanjut</a>
            </div>
        </div>
        <div class="scroll-indicator">
            <div style="font-size: 2rem;">↓</div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Tentang Saya</h2>
                    <p>Saya adalah seorang pengembang web yang passionate dengan pengalaman lebih dari 3 tahun dalam membangun aplikasi web modern dan responsif.</p>
                    <p>Saya memiliki keahlian dalam berbagai teknologi terkini dan selalu antusias untuk mempelajari hal-hal baru dalam dunia teknologi.</p>
                    <div class="skills">
                        <span class="skill-tag">JavaScript</span>
                        <span class="skill-tag">React</span>
                        <span class="skill-tag">Node.js</span>
                        <span class="skill-tag">PHP</span>
                        <span class="skill-tag">CSS/SCSS</span>
                        <span class="skill-tag">Laravel</span>
                        <span class="skill-tag">Git</span>
                        <span class="skill-tag">Figma</span>
                    </div>
                </div>
                <div class="about-image">
                    Gambar Tentang Saya
                    <img src="path/to/about-image.jpg" alt="Tentang Saya">
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="projects">
        <div class="container">
            <h2>Proyek Saya</h2>
            <div class="project-grid">
                <div class="project-card">
                    <h3>E-Commerce Platform</h3>
                    <p>Platform e-commerce lengkap dengan fitur pembayaran, manajemen inventori, dan dashboard admin yang intuitif.</p>
                    <a href="#" class="project-link">Lihat Proyek →</a>
                </div>
                <div class="project-card">
                    <h3>Task Management App</h3>
                    <p>Aplikasi manajemen tugas dengan fitur kolaborasi tim, deadline tracking, dan integrasi calendar.</p>
                    <a href="#" class="project-link">Lihat Proyek →</a>
                </div>
                <div class="project-card">
                    <h3>Portfolio Website</h3>
                    <p>Website portfolio responsif dengan desain modern dan animasi yang menarik untuk menampilkan karya seni digital.</p>
                    <a href="#" class="project-link">Lihat Proyek →</a>
                </div>
            </div>
        </div>
    </section>

    <section id="achievements" class="achievements">
        <div class="container">
            <h2>Prestasi & Pencapaian</h2>
            <div class="achievements-grid">
                <div class="achievement-card">
                    <div class="achievement-icon">🏆</div>
                    <h3>Juara 1 Hackathon Nasional</h3>
                    <div class="achievement-date">Maret 2024</div>
                    <p>Meraih juara pertama dalam kompetisi hackathon tingkat nasional dengan mengembangkan aplikasi smart city yang inovatif.</p>
                    <div class="achievement-badge">
                        <span>💎</span>
                        Gold Medal
                    </div>
                </div>
                
                <div class="achievement-card">
                    <div class="achievement-icon">🎓</div>
                    <h3>Certified Full Stack Developer</h3>
                    <div class="achievement-date">Januari 2024</div>
                    <p>Berhasil menyelesaikan sertifikasi Full Stack Web Development dari institusi terkemuka dengan nilai sempurna.</p>
                    <div class="achievement-badge">
                        <span>⭐</span>
                        Certified
                    </div>
                </div>
                
                <div class="achievement-card">
                    <div class="achievement-icon">🚀</div>
                    <h3>Startup Launch Success</h3>
                    <div class="achievement-date">Oktober 2023</div>
                    <p>Berhasil meluncurkan startup teknologi yang mendapat funding seed sebesar $50K dan 1000+ pengguna aktif.</p>
                    <div class="achievement-badge">
                        <span>💰</span>
                        Funded
                    </div>
                </div>
                
                <div class="achievement-card">
                    <div class="achievement-icon">🌟</div>
                    <h3>Open Source Contributor</h3>
                    <div class="achievement-date">2023 - Sekarang</div>
                    <p>Kontributor aktif di 15+ proyek open source populer dengan total 500+ commits dan 50+ pull requests yang diterima.</p>
                    <div class="achievement-badge">
                        <span>🔥</span>
                        Active
                    </div>
                </div>
                
                <div class="achievement-card">
                    <div class="achievement-icon">📱</div>
                    <h3>Mobile App Store Success</h3>
                    <div class="achievement-date">Agustus 2023</div>
                    <p>Aplikasi mobile yang dikembangkan mencapai 10K+ downloads dengan rating 4.8/5 di Google Play Store.</p>
                    <div class="achievement-badge">
                        <span>📈</span>
                        Popular
                    </div>
                </div>
                
                <div class="achievement-card">
                    <div class="achievement-icon">🎯</div>
                    <h3>Mentor of the Year</h3>
                    <div class="achievement-date">Desember 2023</div>
                    <p>Terpilih sebagai mentor terbaik di program bootcamp coding dengan tingkat keberhasilan siswa 95%.</p>
                    <div class="achievement-badge">
                        <span>👨‍🏫</span>
                        Mentor
                    </div>
                </div>
            </div>
            
            <div class="achievement-stats">
                <div class="stat-item">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Proyek Selesai</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">25+</div>
                    <div class="stat-label">Klien Puas</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">3</div>
                    <div class="stat-label">Tahun Pengalaman</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">10+</div>
                    <div class="stat-label">Sertifikasi</div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">
            <h2>Hubungi Saya</h2>
            <form class="contact-form">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Kirim Pesan</button>
            </form>
        </div>
    </section>
    </section>

    <footer>
        <p>&copy; 2025 Nama Anda. Semua hak dilindungi.</p>
    </footer>

    <script>
        // Scroll animations
        const sections = document.querySelectorAll('section');
        const projectCards = document.querySelectorAll('.project-card');
        const achievementCards = document.querySelectorAll('.achievement-card');
        const nav = document.getElementById('nav');
        const navLinks = document.querySelectorAll('.nav-link');
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const navMenu = document.getElementById('nav-menu');

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    
                    // Update active nav link
                    const sectionId = entry.target.getAttribute('id');
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === `#${sectionId}`) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }, observerOptions);

        sections.forEach(section => {
            observer.observe(section);
        });

        // Project cards animation with delay
        const projectObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, index * 200);
                }
            });
        }, observerOptions);

        projectCards.forEach(card => {
            projectObserver.observe(card);
        });

        // Achievement cards animation with stagger
        const achievementObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, index * 150);
                }
            });
        }, observerOptions);

        achievementCards.forEach(card => {
            achievementObserver.observe(card);
        });

        // Mobile menu toggle
        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('mobile-active');
            const icon = mobileMenuBtn.querySelector('span');
            icon.textContent = navMenu.classList.contains('mobile-active') ? '✕' : '☰';
        });

        // Close mobile menu when clicking a link
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('mobile-active');
                mobileMenuBtn.querySelector('span').textContent = '☰';
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const targetId = link.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                
                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Form submission
        document.querySelector('.contact-form').addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Animate button
            const submitBtn = document.querySelector('.submit-btn');
            submitBtn.style.transform = 'scale(0.95)';
            submitBtn.textContent = 'Mengirim...';
            
            setTimeout(() => {
                submitBtn.style.transform = 'scale(1)';
                submitBtn.textContent = 'Terkirim!';
                
                setTimeout(() => {
                    submitBtn.textContent = 'Kirim Pesan';
                    document.querySelector('.contact-form').reset();
                }, 2000);
            }, 1000);
        });

        // Parallax effect for background
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            
            document.querySelector('.bg-animation').style.transform = `translateY(${rate}px)`;
        });

        // Hide scroll indicator after first scroll
        let hasScrolled = false;
        window.addEventListener('scroll', () => {
            if (!hasScrolled && window.scrollY > 100) {
                hasScrolled = true;
                const indicator = document.querySelector('.scroll-indicator');
                if (indicator) {
                    indicator.style.opacity = '0';
                    indicator.style.transform = 'translateX(-50%) translateY(20px)';
                }
            }
        });

        // Add initial animation to first section
        window.addEventListener('load', () => {
            document.querySelector('#home').classList.add('visible');
        });
    </script>
</body>
</html>