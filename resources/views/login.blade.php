<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absenkeu Login</title>
    <style>
        :root {
            --primary-color: #4a6bff;
            --orange-color: #ff7b54;
            --text-color: #333;
            --light-gray: #f8fafc;
            --white: #ffffff;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            --error-color: #ff4757;
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
            padding: 20px;
            animation: fadeIn 0.8s ease-in-out;
        }
        
        .main-container {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
            min-height: calc(100vh - 40px);
            align-items: center;
            justify-content: center;
            gap: 60px;
        }
        
        .header {
            position: absolute;
            top: 30px;
            left: 30px;
            display: flex;
            align-items: center;
            gap: 12px;
            animation: slideDown 0.6s ease-out;
        }
        
        .logo {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #4a6bff, #667eea);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
            font-size: 20px;
            transform: rotate(-15deg);
        }
        
        .brand-name {
            color: white;
            font-size: 28px;
            font-weight: 600;
        }
        
        .illustration-container {
            flex: 1;
            max-width: 500px;
            animation: slideInLeft 0.8s ease-out;
        }
        
        .illustration {
            width: 100%;
            height: 400px;
            background: linear-gradient(135deg, #4a6bff, #667eea);
            border-radius: 50%;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .illustration::before {
            content: '';
            position: absolute;
            width: 80%;
            height: 60%;
            background: white;
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            bottom: 20%;
        }
        
        .people {
            position: absolute;
            bottom: 25%;
            z-index: 2;
        }
        
        .person {
            position: absolute;
            width: 40px;
            height: 60px;
        }
        
        .person-1 {
            left: -80px;
            animation: float 3s ease-in-out infinite;
        }
        
        .person-2 {
            left: -20px;
            animation: float 3s ease-in-out infinite 0.5s;
        }
        
        .person-3 {
            left: 40px;
            animation: float 3s ease-in-out infinite 1s;
        }
        
        .person-4 {
            left: 100px;
            animation: float 3s ease-in-out infinite 1.5s;
        }
        
        .person::before {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background: #ff7b54;
            border-radius: 50%;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .person::after {
            content: '';
            position: absolute;
            width: 30px;
            height: 35px;
            background: #4a6bff;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 15px 15px 5px 5px;
        }
        
        .charts {
            position: absolute;
            top: 20%;
            left: 20%;
            width: 60%;
            height: 40%;
            z-index: 3;
        }
        
        .chart-element {
            position: absolute;
            background: rgba(255, 123, 84, 0.8);
            border-radius: 4px;
            animation: pulse 2s ease-in-out infinite;
        }
        
        .chart-1 { width: 40px; height: 20px; top: 10px; left: 20px; }
        .chart-2 { width: 30px; height: 35px; top: 20px; right: 30px; }
        .chart-3 { width: 25px; height: 25px; bottom: 20px; left: 40px; }
        
        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
        }
        
        .float-item {
            position: absolute;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 4px;
            animation: floatAround 4s ease-in-out infinite;
        }
        
        .float-1 { top: 15%; right: 15%; animation-delay: 0s; }
        .float-2 { top: 30%; left: 10%; animation-delay: 1s; }
        .float-3 { bottom: 25%; right: 20%; animation-delay: 2s; }
        
        .login-container {
            background-color: var(--primary-color);
            border-radius: 20px;
            padding: 50px 40px;
            width: 100%;
            max-width: 450px;
            color: white;
            animation: slideInRight 0.8s ease-out;
            position: relative;
            overflow: hidden;
        }
        
        .login-container::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: shine 3s ease-in-out infinite;
        }
        
        .login-content {
            position: relative;
            z-index: 2;
        }
        
        h1 {
            color: white;
            margin-bottom: 5px;
            font-size: 48px;
            font-weight: 700;
            animation: slideDown 0.8s ease-out 0.2s both;
        }
        
        .welcome-text {
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 40px;
            font-size: 18px;
            line-height: 1.4;
            animation: slideDown 0.8s ease-out 0.4s both;
        }
        
        .form-group {
            margin-bottom: 25px;
            animation: slideUp 0.6s ease-out both;
        }
        
        .form-group:nth-child(3) { animation-delay: 0.6s; }
        .form-group:nth-child(4) { animation-delay: 0.7s; }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: white;
            font-weight: 500;
            font-size: 16px;
        }
        
        input {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 12px;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        
        input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        
        input:focus {
            border-color: var(--orange-color);
            outline: none;
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .login-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, var(--orange-color), #ff9500);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
            animation: slideUp 0.6s ease-out 0.8s both;
            position: relative;
            overflow: hidden;
        }
        
        .login-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transition: all 0.5s ease;
            transform: translate(-50%, -50%);
        }
        
        .login-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 123, 84, 0.4);
        }
        
        .login-btn:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .login-btn:active {
            transform: translateY(-1px);
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            margin-top: 25px;
            animation: fadeIn 0.8s ease-in 1s both;
        }
        
        .remember-me input[type="checkbox"] {
            width: 20px;
            height: 20px;
            margin-right: 12px;
            accent-color: var(--orange-color);
        }
        
        .remember-me label {
            margin-bottom: 0;
            font-size: 14px;
            cursor: pointer;
        }
        
        .copyright {
            text-align: center;
            margin-top: 40px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            animation: fadeIn 0.8s ease-in 1.2s both;
        }
        
        .alert {
            padding: 15px 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            animation: slideDown 0.5s ease-out;
            backdrop-filter: blur(10px);
        }
        
        .alert-error {
            background: rgba(255, 71, 87, 0.2);
            color: #ffcdd2;
            border: 1px solid rgba(255, 71, 87, 0.3);
        }
        
        .alert-success {
            background: rgba(46, 125, 50, 0.2);
            color: #c8e6c9;
            border: 1px solid rgba(46, 125, 50, 0.3);
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
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
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 0.6; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.05); }
        }
        
        @keyframes floatAround {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            25% { transform: translateY(-15px) rotate(90deg); }
            50% { transform: translateY(-10px) rotate(180deg); }
            75% { transform: translateY(-20px) rotate(270deg); }
        }
        
        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }
        
        @media (max-width: 1200px) {
            .main-container {
                gap: 40px;
                padding: 0 30px;
            }
        }
        
        @media (max-width: 1024px) {
            .main-container {
                flex-direction: column;
                gap: 30px;
                padding-top: 120px;
                justify-content: flex-start;
                min-height: auto;
            }
            
            .header {
                top: 40px;
                left: 50%;
                transform: translateX(-50%);
            }
            
            .illustration-container {
                max-width: 400px;
                order: 1;
            }
            
            .illustration {
                height: 320px;
            }
            
            .login-container {
                max-width: 450px;
                order: 2;
                margin-bottom: 40px;
            }
        }
        
        @media (max-width: 768px) {
            body {
                padding: 15px;
            }
            
            .header {
                top: 25px;
                left: 50%;
                transform: translateX(-50%);
            }
            
            .logo {
                width: 35px;
                height: 35px;
                font-size: 18px;
            }
            
            .brand-name {
                font-size: 24px;
            }
            
            .main-container {
                padding-top: 100px;
                gap: 25px;
            }
            
            .illustration-container {
                max-width: 320px;
            }
            
            .illustration {
                height: 280px;
            }
            
            .login-container {
                padding: 40px 30px;
                max-width: 400px;
                border-radius: 18px;
            }
            
            h1 {
                font-size: 42px;
            }
            
            .welcome-text {
                font-size: 16px;
                margin-bottom: 35px;
            }
            
            input {
                padding: 14px 18px;
                font-size: 15px;
            }
            
            .login-btn {
                padding: 15px;
                font-size: 17px;
            }
            
            .form-group {
                margin-bottom: 22px;
            }
        }
        
        @media (max-width: 480px) {
            body {
                padding: 10px;
            }
            
            .header {
                top: 20px;
            }
            
            .logo {
                width: 32px;
                height: 32px;
                font-size: 16px;
            }
            
            .brand-name {
                font-size: 22px;
            }
            
            .main-container {
                padding-top: 80px;
                gap: 20px;
            }
            
            .illustration-container {
                max-width: 260px;
            }
            
            .illustration {
                height: 220px;
            }
            
            .login-container {
                padding: 35px 25px;
                max-width: 100%;
                border-radius: 16px;
            }
            
            h1 {
                font-size: 36px;
                margin-bottom: 3px;
            }
            
            .welcome-text {
                font-size: 15px;
                margin-bottom: 30px;
                line-height: 1.3;
            }
            
            label {
                font-size: 15px;
                margin-bottom: 6px;
            }
            
            input {
                padding: 12px 16px;
                font-size: 14px;
                border-radius: 10px;
            }
            
            .login-btn {
                padding: 14px;
                font-size: 16px;
                border-radius: 10px;
            }
            
            .form-group {
                margin-bottom: 20px;
            }
            
            .remember-me {
                margin-top: 20px;
            }
            
            .remember-me input[type="checkbox"] {
                width: 18px;
                height: 18px;
                margin-right: 10px;
            }
            
            .remember-me label {
                font-size: 13px;
            }
            
            .copyright {
                margin-top: 30px;
                font-size: 13px;
            }
            
            .person {
                width: 32px;
                height: 48px;
            }
            
            .person::before {
                width: 16px;
                height: 16px;
            }
            
            .person::after {
                width: 24px;
                height: 28px;
            }
            
            .chart-1 { width: 32px; height: 16px; }
            .chart-2 { width: 24px; height: 28px; }
            .chart-3 { width: 20px; height: 20px; }
            
            .float-item {
                width: 16px;
                height: 16px;
            }
        }
        
        @media (max-width: 360px) {
            .main-container {
                padding-top: 70px;
            }
            
            .illustration-container {
                max-width: 220px;
            }
            
            .illustration {
                height: 180px;
            }
            
            .login-container {
                padding: 30px 20px;
            }
            
            h1 {
                font-size: 32px;
            }
            
            .welcome-text {
                font-size: 14px;
            }
            
            input {
                padding: 11px 14px;
                font-size: 13px;
            }
            
            .login-btn {
                padding: 13px;
                font-size: 15px;
            }
        }
        
        @media (min-width: 1025px) {
            .main-container {
                align-items: center;
                justify-content: center;
                min-height: 100vh;
            }
            
            .header {
                position: absolute;
                top: 30px;
                left: 30px;
                transform: none;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">A</div>
        <div class="brand-name">Absenkeu</div>
    </div>
    
    <div class="main-container">
        <div class="illustration-container">
            <div class="illustration">
                <div class="floating-elements">
                    <div class="float-item float-1"></div>
                    <div class="float-item float-2"></div>
                    <div class="float-item float-3"></div>
                </div>
                
                <div class="charts">
                    <div class="chart-element chart-1"></div>
                    <div class="chart-element chart-2"></div>
                    <div class="chart-element chart-3"></div>
                </div>
                
                <div class="people">
                    <div class="person person-1"></div>
                    <div class="person person-2"></div>
                    <div class="person person-3"></div>
                    <div class="person person-4"></div>
                </div>
            </div>
        </div>
        
        <div class="login-container">
            <div class="login-content">
                <h1>Hello!</h1>
                <p class="welcome-text">Welcome to Absenkeu<br>Let's Login to Your Account</p>
                
                <div class="alert alert-error" style="display: none;">
                    Error message here
                </div>
                
                <div class="alert alert-success" style="display: none;">
                    Success message here
                </div>
                
                <form method="POST" action="/login">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter your username" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    
                    <button type="submit" class="login-btn">Login</button>
                    
                    <div class="remember-me">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Ingat saya</label>
                    </div>
                </form>
                
                <div class="copyright">© Copyright Absenkeu 2025</div>
            </div>
        </div>
    </div>
</body>
</html>