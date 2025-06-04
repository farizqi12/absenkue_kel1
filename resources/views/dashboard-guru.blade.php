<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Guru - Absenkeu</title>
    <style>
        :root {
            --primary-color: #4a6bff;
            --orange-color: #ff7b54;
            --text-color: #333;
            --light-gray: #f8fafc;
            --white: #ffffff;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --danger-color: #ef4444;
            --sidebar-width: 280px;
            --purple-color: #8b5cf6;
            --teal-color: #14b8a6;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            overflow-x: hidden;
        }
        
        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }
        
        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-right: 1px solid rgba(255, 255, 255, 0.2);
            padding: 0;
            position: fixed;
            height: 100vh;
            left: 0;
            top: 0;
            transition: transform 0.3s ease;
            z-index: 1000;
            animation: slideInLeft 0.8s ease-out;
        }
        
        .sidebar-header {
            padding: 30px 25px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .logo {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, #4a6bff, #667eea);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
            font-size: 22px;
            transform: rotate(-15deg);
            animation: pulse 2s ease-in-out infinite;
        }
        
        .brand-info h2 {
            color: white;
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 2px;
        }
        
        .brand-info p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 12px;
        }
        
        .sidebar-nav {
            padding: 20px 0;
        }
        
        .nav-item {
            margin: 5px 20px;
            border-radius: 12px;
            transition: all 0.3s ease;
            animation: slideInLeft 0.6s ease-out both;
        }
        
        .nav-item:nth-child(1) { animation-delay: 0.1s; }
        .nav-item:nth-child(2) { animation-delay: 0.2s; }
        .nav-item:nth-child(3) { animation-delay: 0.3s; }
        .nav-item:nth-child(4) { animation-delay: 0.4s; }
        .nav-item:nth-child(5) { animation-delay: 0.5s; }
        .nav-item:nth-child(6) { animation-delay: 0.6s; }
        .nav-item:nth-child(7) { animation-delay: 0.7s; }
        
        .nav-item a {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .nav-item a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s ease;
        }
        
        .nav-item a:hover::before {
            left: 100%;
        }
        
        .nav-item a:hover,
        .nav-item.active a {
            background: rgba(255, 255, 255, 0.15);
            color: white;
            transform: translateX(5px);
        }
        
        .nav-icon {
            width: 20px;
            height: 20px;
            margin-right: 15px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }
        
        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            padding: 30px;
            animation: slideInRight 0.8s ease-out;
        }
        
        .header {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 25px 30px;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: slideDown 0.8s ease-out 0.2s both;
        }
        
        .header-left h1 {
            color: white;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .header-left p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
        }
        
        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
            background: rgba(255, 255, 255, 0.1);
            padding: 10px 15px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .user-avatar {
            width: 35px;
            height: 35px;
            background: linear-gradient(135deg, var(--orange-color), #ff9500);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }
        
        .user-details h4 {
            color: white;
            font-size: 14px;
            margin-bottom: 2px;
        }
        
        .user-details p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 12px;
        }
        
        .logout-btn {
            background: rgba(239, 68, 68, 0.2);
            color: #fca5a5;
            border: 1px solid rgba(239, 68, 68, 0.3);
            padding: 10px 15px;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
        }
        
        .logout-btn:hover {
            background: rgba(239, 68, 68, 0.3);
            transform: translateY(-2px);
        }
        
        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            animation: slideUp 0.6s ease-out both;
            position: relative;
            overflow: hidden;
        }
        
        .stat-card:nth-child(1) { animation-delay: 0.3s; }
        .stat-card:nth-child(2) { animation-delay: 0.4s; }
        .stat-card:nth-child(3) { animation-delay: 0.5s; }
        .stat-card:nth-child(4) { animation-delay: 0.6s; }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.05), transparent);
            transform: rotate(45deg);
            transition: transform 0.6s ease;
        }
        
        .stat-card:hover::before {
            transform: rotate(45deg) translate(50%, 50%);
        }
        
        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }
        
        .stat-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
        }
        
        .stat-icon.success { background: linear-gradient(135deg, var(--success-color), #059669); }
        .stat-icon.warning { background: linear-gradient(135deg, var(--warning-color), #d97706); }
        .stat-icon.danger { background: linear-gradient(135deg, var(--danger-color), #dc2626); }
        .stat-icon.primary { background: linear-gradient(135deg, var(--primary-color), #3b82f6); }
        .stat-icon.purple { background: linear-gradient(135deg, var(--purple-color), #7c3aed); }
        .stat-icon.teal { background: linear-gradient(135deg, var(--teal-color), #0f766e); }
        
        .stat-value {
            font-size: 32px;
            font-weight: 700;
            color: white;
            margin-bottom: 5px;
        }
        
        .stat-label {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            margin-bottom: 10px;
        }
        
        .stat-change {
            font-size: 12px;
            padding: 4px 8px;
            border-radius: 6px;
            display: inline-block;
        }
        
        .stat-change.positive {
            background: rgba(16, 185, 129, 0.2);
            color: #6ee7b7;
        }
        
        .stat-change.negative {
            background: rgba(239, 68, 68, 0.2);
            color: #fca5a5;
        }
        
        .stat-change.neutral {
            background: rgba(107, 114, 128, 0.2);
            color: #d1d5db;
        }
        
        /* Content Grid */
        .content-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .content-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: slideUp 0.8s ease-out both;
        }
        
        .content-card:first-child { animation-delay: 0.7s; }
        .content-card:last-child { animation-delay: 0.8s; }
        
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }
        
        .card-title {
            color: white;
            font-size: 20px;
            font-weight: 600;
        }
        
        .view-all {
            color: var(--orange-color);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .view-all:hover {
            color: #ff9500;
            transform: translateX(5px);
        }
        
        /* Activity Items */
        .activity-item {
            display: flex;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        
        .activity-item:hover {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            padding: 15px;
            margin: 0 -15px;
        }
        
        .activity-item:last-child {
            border-bottom: none;
        }
        
        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 16px;
            color: white;
        }
        
        .activity-content h4 {
            color: white;
            font-size: 14px;
            margin-bottom: 4px;
        }
        
        .activity-content p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 12px;
        }
        
        .activity-time {
            margin-left: auto;
            color: rgba(255, 255, 255, 0.5);
            font-size: 12px;
        }
        
        /* Savings Request */
        .savings-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .savings-item:last-child {
            border-bottom: none;
        }
        
        .savings-info h4 {
            color: white;
            font-size: 14px;
            margin-bottom: 4px;
        }
        
        .savings-info p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 12px;
        }
        
        .savings-amount {
            color: var(--success-color);
            font-weight: 600;
            font-size: 14px;
        }
        
        .status-badge {
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 500;
            margin-top: 4px;
        }
        
        .status-pending {
            background: rgba(245, 158, 11, 0.2);
            color: #fbbf24;
        }
        
        .status-approved {
            background: rgba(16, 185, 129, 0.2);
            color: #6ee7b7;
        }
        
        .status-rejected {
            background: rgba(239, 68, 68, 0.2);
            color: #fca5a5;
        }
        
        /* Bottom Grid */
        .bottom-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
        }
        
        /* Quick Actions */
        .quick-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        
        .quick-action {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            color: white;
        }
        
        .quick-action:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-5px);
        }
        
        .quick-action-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--orange-color), #ff9500);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            font-size: 20px;
        }
        
        .quick-action h4 {
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .quick-action p {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.7);
        }
        
        /* Class Schedule Table */
        .schedule-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .schedule-table th,
        .schedule-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .schedule-table th {
            color: white;
            font-weight: 600;
            font-size: 14px;
        }
        
        .schedule-table td {
            color: rgba(255, 255, 255, 0.8);
            font-size: 13px;
        }
        
        .schedule-table tbody tr:hover {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
        }
        
        .time-badge {
            background: rgba(74, 107, 255, 0.2);
            color: #93c5fd;
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 11px;
        }
        
        .class-badge {
            background: rgba(139, 92, 246, 0.2);
            color: #c4b5fd;
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 11px;
        }
        
        /* Mobile Sidebar Toggle */
        .mobile-toggle {
            display: none;
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1001;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            padding: 12px;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .mobile-toggle:hover {
            background: rgba(255, 255, 255, 0.2);
        }
        
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        
        /* Animations */
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-100px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(100px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes pulse {
            0%, 100% { transform: rotate(-15deg) scale(1); }
            50% { transform: rotate(-15deg) scale(1.1); }
        }
        
        /* Responsive Design */
        @media (max-width: 1200px) {
            .content-grid,
            .bottom-grid {
                grid-template-columns: 1fr;
            }
            
            .stats-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }
        }
        
        @media (max-width: 1024px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.open {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
                padding: 80px 20px 20px;
            }
            
            .mobile-toggle {
                display: block;
            }
            
            .overlay.show {
                display: block;
            }
            
            .stats-grid {
                grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
                gap: 20px;
            }
            
            .stat-card {
                padding: 25px;
            }
        }
        
        @media (max-width: 768px) {
            .main-content {
                padding: 80px 15px 15px;
            }
            
            .header {
                padding: 20px;
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .header-right {
                width: 100%;
                justify-content: center;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            
            .content-card {
                padding: 20px;
            }
            
            .quick-actions {
                grid-template-columns: 1fr;
            }
            
            .schedule-table {
                font-size: 12px;
            }
            
            .schedule-table th,
            .schedule-table td {
                padding: 8px;
            }
        }
        
        @media (max-width: 480px) {
            .sidebar {
                width: 100%;
            }
            
            .main-content {
                padding: 70px 10px 10px;
            }
            
            .header {
                padding: 15px;
                border-radius: 15px;
            }
            
            .header-left h1 {
                font-size: 24px;
            }
            
            .stat-card {
                padding: 20px;
            }
            
            .stat-value {
                font-size: 28px;
            }
            
            .content-card {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Mobile Toggle -->
        <div class="mobile-toggle" onclick="toggleSidebar()">
            ☰
        </div>
        
        <!-- Overlay -->
        <div class="overlay" onclick="toggleSidebar()"></div>
        
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="logo">A</div>
                <div class="brand-info">
                    <h2>Absenkeu</h2>
                    <p>Dashboard Guru</p>
                </div>
            </div>
            
            <nav class="sidebar-nav">
                <div class="nav-item active">
                    <a href="#dashboard">
                        <div class="nav-icon">📊</div>
                        Dashboard
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#attendance">
                        <div class="nav-icon">✅</div>
                        Absensi Saya
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#savings">
                        <div class="nav-icon">💰</div>
                        Tabungan
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#schedule">
                        <div class="nav-icon">📚</div>
                        Jadwal Mengajar
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#students">
                        <div class="nav-icon">🎓</div>
                        Data Siswa
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#reports">
                        <div class="nav-icon">📈</div>
                        Laporan
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#profile">
                        <div class="nav-icon">👤</div>
                        Profil
                    </a>
                </div>
            </nav>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <div class="header">
                <div class="header-left">
                    <h1>Selamat Datang, Pak/Bu Guru!</h1>
                    <p>Kelola aktivitas mengajar dan keuangan Anda dengan mudah</p>
                </div>
                <div class="header-right">
                    <div class="user-info">
                        <div class="user-avatar">JS</div>
                        <div class="user-details">
                            <h4>John Smith</h4>
                            <p>Guru Matematika</p>
                        </div>
                    </div>
                    <button class="logout-btn">Logout</button>
                </div>
            </div>
            
            <!-- Stats Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon success">💰</div>
                    </div>
                    <div class="stat-value">Rp 2.850.000</div>
                    <div class="stat-label">Saldo Tabungan</div>
                    <div class="stat-change positive">+Rp 150.000 bulan ini</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon primary">✅</div>
                    </div>
                    <div class="stat-value">96%</div>
                    <div class="stat-label">Kehadiran Bulan Ini</div>
                    <div class="stat-change positive">22 dari 23 hari kerja</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon purple">📚</div>
                    </div>
                    <div class="stat-value">18</div>
                    <div class="stat-label">Jam Mengajar/Minggu</div>
                    <div class="stat-change neutral">5 mata pelajaran</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon teal">🎓</div>
                    </div>
                    <div class="stat-value">156</div>
                    <div class="stat-label">Total Siswa</div>
                    <div class="stat-change positive">+12 siswa baru</div>
                </div>
            </div>
            
            <!-- Content Grid -->
            <div class="content-grid">
                <!-- Savings Requests -->
                <div class="content-card">
                    <div class="card-header">
                        <h3 class="card-title">Permohonan Tabungan</h3>
                        <a href="#" class="view-all">Lihat Semua →</a>
                    </div>
                    
                    <div class="savings-item">
                        <div class="savings-info">
                            <h4>Tabungan Bulanan Januari</h4>
                            <p>Diajukan pada 1 Januari 2024</p>
                            <div class="status-badge status-approved">Disetujui</div>
                        </div>
                        <div class="savings-amount">Rp 500.000</div>
                    </div>
                    
                    <div class="savings-item">