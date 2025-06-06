<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soviki - Mahasiswa</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2ecc71;
            --secondary-color: #27ae60;
            --light-color: #ffffff;
            --dark-color: #34495e;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            color: var(--dark-color);
            min-height: 100vh;
        }
        
        .profile-card {
            background-color: var(--light-color);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(46, 204, 113, 0.1);
            transition: all 0.3s ease;
            border: none;
        }
        
        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(46, 204, 113, 0.15);
        }
        
        .profile-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        }
        
        .text-gradient {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #f1f8f4;
            border-radius: 50%;
            color: var(--primary-color);
            margin: 0 8px;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }
        
        .contact-item {
            padding: 12px;
            border-radius: 10px;
            transition: all 0.3s ease;
            border-left: 3px solid var(--primary-color);
        }
        
        .contact-item:hover {
            background-color: #f1f8f4;
            transform: translateX(5px);
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .divider {
            height: 2px;
            background: linear-gradient(to right, transparent, var(--primary-color), transparent);
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Profile Section -->
                <div class="profile-card p-4 p-md-5 mb-4 text-center">
                    <img src="https://ui-avatars.com/api/?name=Soviki&background=2ecc71&color=fff&size=150" alt="Soviki" class="profile-img rounded-circle mb-4 floating">
                    
                    <h1 class="text-gradient fw-bold mb-2">Soviki</h1>
                    <p class="lead mb-4">Mahasiswa</p>
                    
                    <div class="divider"></div>
                    
                    <p class="mb-4">
                        Halo Bro Saya suka Bakso ygy.
                    </p>
                    
                    <div class="social-links mb-4">
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                
                <!-- Contact Section -->
                <div class="profile-card p-4 p-md-5">
                    <h3 class="fw-bold mb-4 text-center"><i class="fas fa-id-card me-2 text-gradient"></i>Kontak Saya</h3>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="contact-item">
                                <div class="d-flex align-items-center">
                                    <div class="bg-light p-3 rounded-circle me-3">
                                        <i class="fas fa-envelope fa-lg text-gradient"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Email</h6>
                                        <p class="mb-0 small">sovikilmj@gmail..com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <div class="contact-item">
                                <div class="d-flex align-items-center">
                                    <div class="bg-light p-3 rounded-circle me-3">
                                        <i class="fas fa-phone fa-lg text-gradient"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Telepon</h6>
                                        <p class="mb-0 small">+6282147360978</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <div class="contact-item">
                                <div class="d-flex align-items-center">
                                    <div class="bg-light p-3 rounded-circle me-3">
                                        <i class="fas fa-map-marker-alt fa-lg text-gradient"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Alamat</h6>
                                        <p class="mb-0 small">Lumajang, Kunir</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <div class="contact-item">
                                <div class="d-flex align-items-center">
                                    <div class="bg-light p-3 rounded-circle me-3">
                                        <i class="fas fa-university fa-lg text-gradient"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Universitas</h6>
                                        <p class="mb-0 small">Widyagama</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-4">
                        <button class="btn gradient-bg text-white rounded-pill px-4 py-2">
                            <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-3">
        <div class="container">
            <p class="small text-muted mb-0">© 2023 Soviki. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>