<?php
session_start();
require_once '../app/config/db.php';
require_once '../app/models/User.php';

$userModel = new User($pdo);

// kalau user udah login, redirect ke dashboard sesuai role
if (isset($_SESSION['user'])) {
    $role = $_SESSION['user']['role'];
    if ($role === 'bidan') {
        header('Location: ../app/views/dashboard/admin/index.php');
        exit;
    } else {
        header('Location: ../app/views/dashboard/ibu/index.php');
        exit;
    }
}

// kalau punya cookie remember_token, auto-login
$userModel->checkRememberedUser();
if (isset($_SESSION['user'])) {
    $role = $_SESSION['user']['role'];
    if ($role === 'bidan') {
        header('Location: ../app/views/dashboard/admin/index.php');
        exit;
    } else {
        header('Location: ../app/views/dashboard/ibu/index.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kesehatan Ibu & Anak</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* === Base Reset === */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: #f9fafc;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* === Hero Section === */
        .hero {
            background: linear-gradient(135deg, #89cff0, #6fb1fc);
            color: white;
            text-align: center;
            padding: 60px 20px;
        }

        .hero h1 {
            font-size: 2.2rem;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 1rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        /* === Main Content === */
        .main-content {
            flex: 1;
            display: grid;
            place-items: center;
            padding: 50px 20px;
            gap: 40px;
        }

        .intro {
            max-width: 600px;
            text-align: center;
        }

        .intro h2 {
            font-size: 1.8rem;
            color: #2b2d42;
            margin-bottom: 10px;
        }

        .intro p {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
        }

        /* === CTA Section === */
        .cta {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s ease;
        }

        .btn-primary {
            background: #0077b6;
            color: white;
        }

        .btn-primary:hover {
            background: #005f87;
        }

        .btn-secondary {
            background: #e9ecef;
            color: #0077b6;
            border: 1px solid #0077b6;
        }

        .btn-secondary:hover {
            background: #dfe6eb;
        }

        /* === Footer === */
        .footer {
            text-align: center;
            padding: 15px;
            font-size: 14px;
            background: #f1f3f5;
            color: #555;
        }

        /* === Responsive Design === */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 1.8rem;
            }

            .intro h2 {
                font-size: 1.5rem;
            }

            .main-content {
                padding: 30px 15px;
                gap: 30px;
            }
        }

        @media (max-width: 480px) {
            .hero {
                padding: 40px 15px;
            }

            .btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <header class="hero">
        <h1>E-Kesehatan Ibu & Anak</h1>
        <p>Mendukung kesehatan ibu & anak dengan edukasi dan monitoring sederhana</p>
    </header>

    <main class="main-content">
        <section class="intro">
            <h2>Selamat Datang 👩‍🍼</h2>
            <p>
                Aplikasi ini membantu ibu dan bidan memantau jadwal pemeriksaan, membaca artikel edukatif, 
                dan mencatat kunjungan dengan mudah. Yuk mulai perjalanan sehat bersama kami!
            </p>
        </section>

        <section class="cta">
            <a href="../app/views/auth/login.php" class="btn btn-primary">Masuk</a>
            <a href="../app/views/auth/register.php" class="btn btn-secondary">Daftar</a>
        </section>
    </main>

    <footer class="footer">
        <p>© <?= date('Y'); ?> E-Kesehatan Ibu & Anak | Dibuat oleh Ardi</p>
    </footer>
</body>
</html>