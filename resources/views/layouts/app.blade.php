<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        /* RESET & VARIABLES */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #4361ee;
            --primary-dark: #3a56d4;
            --primary-light: #6384ff;
            --secondary: #6c757d;
            --success: #10b981;
            --danger: #ef476f;
            --warning: #ffd166;
            --info: #4ecdc4;
            --dark: #2b2d42;
            --light: #f8f9fa;
            --gray-50: #f9fafb;
            --gray-100: #f1f5f9;
            --gray-200: #e9ecef;
            --gray-300: #dee2e6;
            --gray-400: #ced4da;
            --gray-500: #adb5bd;
            --gray-600: #6c757d;
            --gray-700: #495057;
            --gray-800: #343a40;
            --gray-900: #212529;
            --shadow-sm: 0 2px 4px rgba(0,0,0,0.02);
            --shadow: 0 4px 6px -1px rgba(0,0,0,0.05), 0 2px 4px -1px rgba(0,0,0,0.02);
            --shadow-md: 0 10px 15px -3px rgba(0,0,0,0.05), 0 4px 6px -2px rgba(0,0,0,0.02);
            --shadow-lg: 0 20px 25px -5px rgba(0,0,0,0.05), 0 10px 10px -5px rgba(0,0,0,0.01);
            --shadow-xl: 0 25px 50px -12px rgba(0,0,0,0.15);
            --radius: 10px;
            --radius-lg: 16px;
            --radius-xl: 24px;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f5f7fb;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* HEADER */
        header {
            background: white;
            border-bottom: 1px solid rgba(0,0,0,0.03);
            padding: 16px 40px;
            position: sticky;
            top: 0;
            z-index: 50;
            box-shadow: var(--shadow);
        }

        .header-container {
            max-width: 1600px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* LOGO */
        .logo-container {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 4px 0;
        }

        .logo-container img {
            height: 56px;
            width: auto;
            object-fit: contain;
            transition: all 0.2s;
        }

        .logo-container:hover img {
            transform: scale(1.02);
        }

        /* ADMIN PROFILE */
        .admin-section {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 4px 0;
        }

        .admin-details {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .admin-name {
            font-weight: 600;
            font-size: 15px;
            color: var(--gray-800);
            line-height: 1.4;
        }

        .admin-role {
            font-size: 12px;
            color: var(--gray-500);
            background: var(--gray-100);
            padding: 4px 12px;
            border-radius: 30px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            margin-top: 2px;
        }

        .admin-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(145deg, var(--primary) 0%, #7209b7 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 18px;
            box-shadow: var(--shadow-md);
            position: relative;
            border: 3px solid white;
        }

        .admin-avatar .status-dot {
            position: absolute;
            bottom: 2px;
            right: 2px;
            width: 12px;
            height: 12px;
            background: var(--success);
            border: 2px solid white;
            border-radius: 50%;
            box-shadow: var(--shadow-sm);
        }

        /* LOGOUT BUTTON */
        .btn-logout {
            padding: 10px 24px;
            background: white;
            color: var(--gray-600);
            border: 1px solid var(--gray-200);
            border-radius: 40px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: var(--shadow-sm);
        }

        .btn-logout i {
            font-size: 14px;
            color: var(--danger);
            transition: all 0.2s;
        }

        .btn-logout:hover {
            background: #fef2f2;
            border-color: #fecaca;
            color: var(--danger);
            transform: translateY(-1px);
            box-shadow: var(--shadow-md);
        }

        .btn-logout:hover i {
            color: var(--danger);
        }

        .btn-logout:active {
            transform: translateY(0);
        }

        /* MAIN CONTENT */
        main {
            flex: 1;
            max-width: 1600px;
            width: 100%;
            margin: 32px auto;
            padding: 0 40px;
            animation: fadeIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* DASHBOARD CARDS STYLE (untuk dipake di dashboard) */
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            margin-bottom: 40px;
        }

        .dashboard-card {
            background: white;
            border-radius: var(--radius-lg);
            padding: 24px;
            box-shadow: var(--shadow);
            border: 1px solid rgba(0,0,0,0.02);
            transition: all 0.2s;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .dashboard-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }

        .card-icon {
            width: 48px;
            height: 48px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
            font-size: 24px;
        }

        .card-icon.dashboard {
            background: rgba(67, 97, 238, 0.1);
            color: var(--primary);
        }

        .card-icon.blog {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success);
        }

        .card-icon.event {
            background: rgba(239, 71, 111, 0.1);
            color: var(--danger);
        }

        .card-icon.casestudy {
            background: rgba(255, 209, 102, 0.1);
            color: var(--warning);
        }

        .card-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 8px;
        }

        .card-stats {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 12px;
        }

        .stat-item {
            flex: 1;
            min-width: 80px;
        }

        .stat-label {
            font-size: 12px;
            color: var(--gray-500);
            margin-bottom: 4px;
        }

        .stat-value {
            font-size: 24px;
            font-weight: 700;
            color: var(--gray-800);
        }

        .stat-detail {
            font-size: 12px;
            color: var(--gray-500);
            display: flex;
            align-items: center;
            gap: 4px;
        }

        /* QUICK ACTIONS */
        .quick-actions {
            background: white;
            border-radius: var(--radius-lg);
            padding: 24px;
            box-shadow: var(--shadow);
            border: 1px solid rgba(0,0,0,0.02);
            margin-top: 40px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .actions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
        }

        .action-btn {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px;
            background: var(--gray-50);
            border-radius: var(--radius);
            text-decoration: none;
            color: var(--gray-700);
            transition: all 0.2s;
            border: 1px solid var(--gray-200);
        }

        .action-btn:hover {
            background: white;
            border-color: var(--primary);
            color: var(--primary);
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        .action-btn i {
            font-size: 20px;
            color: var(--primary);
        }

        .action-btn span {
            font-weight: 500;
        }

        /* FOOTER */
        footer {
            background: white;
            border-top: 1px solid var(--gray-200);
            padding: 24px 40px;
            margin-top: auto;
        }

        .footer-container {
            max-width: 1600px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: var(--gray-500);
            font-size: 14px;
        }

        .footer-links {
            display: flex;
            gap: 32px;
        }

        .footer-links a {
            color: var(--gray-500);
            text-decoration: none;
            transition: all 0.2s;
            font-weight: 500;
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        .footer-links span {
            color: var(--gray-400);
            font-weight: 500;
            padding: 4px 12px;
            background: var(--gray-100);
            border-radius: 40px;
            font-size: 12px;
        }

        /* RESPONSIVE */
        @media (max-width: 1024px) {
            .dashboard-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            header {
                padding: 12px 20px;
            }

            .header-container {
                flex-direction: column;
                gap: 16px;
            }

            .admin-section {
                width: 100%;
                justify-content: space-between;
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }

            main {
                padding: 0 20px;
            }

            .footer-container {
                flex-direction: column;
                gap: 16px;
                text-align: center;
            }

            .footer-links {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo-container">
                <img src="{{ asset('images/logo.png') }}" alt="Disply Logo" onerror="this.src='https://via.placeholder.com/56x56?text=Disply'">
            </div>

            <div class="admin-section">
                <div class="admin-profile">
                    <div class="admin-details">
                        <span class="admin-name">Admin User</span>
                        <span class="admin-role">
                            <i class="fas fa-crown" style="color: var(--warning);"></i>
                            Super Admin
                        </span>
                    </div>
                    <div class="admin-avatar">
                        <span>A</span>
                        <span class="status-dot"></span>
                    </div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn-logout">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-container">
            <p>&copy; {{ date('Y') }} <span style="font-weight: 600; color: var(--primary);">Disply</span>. All rights reserved.</p>
            <div class="footer-links">
                <a href="#"><i class="fas fa-shield-alt" style="margin-right: 4px;"></i> Privacy</a>
                <a href="#"><i class="fas fa-file-contract" style="margin-right: 4px;"></i> Terms</a>
                <a href="#"><i class="fas fa-headset" style="margin-right: 4px;"></i> Support</a>
                <span>v2.0.0</span>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                setTimeout(() => {
                    alert.style.opacity = '0';
                    alert.style.transform = 'translateY(-10px)';
                    setTimeout(() => alert.remove(), 300);
                }, 5000);
            });
        });
    </script>
</body>
</html>