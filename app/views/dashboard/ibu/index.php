<?php
require_once '../../../middleware/auth.php';
requireRole('ibu');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Ibu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        /* === Base === */
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

        header {
            background: linear-gradient(135deg, #89cff0, #6fb1fc);
            color: #fff;
            text-align: center;
            padding: 40px 20px;
        }

        header h1 {
            font-size: 1.8rem;
        }

        header p {
            font-size: 1rem;
            margin-top: 5px;
            opacity: 0.9;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 40px 20px;
        }

        .dashboard {
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        .dashboard h2 {
            color: #2b2d42;
            margin-bottom: 10px;
        }

        .dashboard p {
            color: #555;
            margin-bottom: 25px;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        nav ul li a {
            display: inline-block;
            padding: 12px 20px;
            border-radius: 8px;
            background: #0077b6;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.3s ease;
        }

        nav ul li a:hover {
            background: #005f87;
        }

        nav ul li:last-child a {
            background: #e63946;
        }

        nav ul li:last-child a:hover {
            background: #c71f2d;
        }

        footer {
            text-align: center;
            padding: 15px;
            font-size: 14px;
            background: #f1f3f5;
            color: #555;
        }

        /* === Responsiveness === */
        @media (max-width: 600px) {
            header h1 {
                font-size: 1.5rem;
            }

            .dashboard {
                padding: 25px;
            }

            nav ul {
                flex-direction: column;
                gap: 15px;
            }

            nav ul li a {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Halo, <?= htmlspecialchars($_SESSION['user']['name']); ?> 👩‍🍼</h1>
        <p>Selamat datang di aplikasi E-Kesehatan Ibu & Anak</p>
    </header>

    <main>
        <section class="dashboard">
            <h2>Dashboard Ibu</h2>
            <p>Silakan pilih menu di bawah untuk mulai menggunakan layanan.</p>
            <nav>
                <ul>
                    <li><a href="articles.php">📰 Baca Artikel Edukasi</a></li>
                    <li><a href="../../../controllers/AuthController.php?logout=true">Logout</a></li>
                </ul>
            </nav>
        </section>
    </main>

    <footer>
        <p>© <?= date('Y'); ?> E-Kesehatan Ibu & Anak | Dibuat oleh Ardi</p>
    </footer>
</body>
</html>