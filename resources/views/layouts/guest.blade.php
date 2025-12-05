<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPKS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {
            --primary: #1a1a1a;
            --secondary: #2c2c2c;
            --accent: #4a4a4a;
            --text: #f0f0f0;
            --bg: #f4f4f4;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: #121212;
            line-height: 1.6;
        }
        .hero {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--text);
            padding: 150px 0;
            position: relative;
            overflow: hidden;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.05) 0%, transparent 70%);
            z-index: 1;
        }
        .hero-content {
            position: relative;
            z-index: 2;
        }
        /* Modern subtle pattern */
        .hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 200px;
            height: 150px;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 60"><path d="M10 50 Q20 40 30 50 Q40 60 50 50 Q60 40 70 50 Q80 60 90 50" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="4"/><circle cx="20" cy="25" r="12" fill="rgba(255,255,255,0.1)"/></svg>') no-repeat;
            opacity: 0.4;
            transform: rotate(-10deg);
        }
        .navbar {
            background: transparent !important;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 3;
            transition: background 0.3s ease;
        }
        .navbar.scrolled {
            background: linear-gradient(to right, var(--primary), var(--secondary)) !important;
        }
        .navbar-brand,
        .nav-link {
            color: var(--text) !important;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #ffffff !important;
        }
        .feature-icon {
            font-size: 3rem;
            color: var(--primary);
            transition: all 0.3s ease;
        }
        .feature-icon:hover {
            transform: translateY(-5px);
            color: var(--secondary);
        }
        .section-title {
            font-weight: 600;
            margin-bottom: 50px;
            color: #121212;
            position: relative;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .section-title::after {
            content: '';
            width: 80px;
            height: 3px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
        }
        .card {
            border: none;
            border-radius: 20px;
            background: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        .card:hover {
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }
        .btn-primary {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border: none;
            border-radius: 50px;
            padding: 12px 35px;
            font-weight: 500;
            transition: all 0.3s ease;
            color: var(--text);
        }
        .btn-primary:hover {
            background: linear-gradient(to right, var(--secondary), var(--primary));
            transform: translateY(-3px);
        }
        footer {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: var(--text);
            padding: 40px 0;
            position: relative;
            margin-top: 100px;
        }
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(to right, transparent, var(--accent), transparent);
        }
        /* Modern footer pattern */
        footer::after {
            content: '';
            position: absolute;
            bottom: 10px;
            left: 20px;
            width: 60px;
            height: 60px;
            background: radial-gradient(circle, rgba(255,255,255,0.05) 20%, transparent 20%), radial-gradient(circle, rgba(255,255,255,0.05) 30%, transparent 30%);
            background-position: 0 0, 25px 25px;
            opacity: 0.5;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn {
            animation: fadeIn 1s ease forwards;
        }
        .login-container {
            min-height: calc(100vh - 150px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 0;
        }
        /* Dark mode support */
        @media (prefers-color-scheme: dark) {
            :root {
                --bg: #121212;
                --text: #f0f0f0;
            }
            body {
                background-color: var(--bg);
                color: var(--text);
            }
            .card {
                background: #1e1e1e;
            }
            .section-title {
                color: var(--text);
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><i class="fas fa-cow me-2"></i>SPKS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing') }}" wire:navigate>Beranda</a>
                    </li>
                    <li class="nav-item">
                        @auth
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        @else
                            <a class="nav-link" href="{{ route('login') }}" wire:navigate>Login</a>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{ $slot }}
    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p class="mb-0">&copy; 2025 SPKS. Semua Hak Dilindungi.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add scrolled class to navbar
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
