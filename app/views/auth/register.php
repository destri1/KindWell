<?php
if (isset($_GET['error'])) {
    echo "<p class='error-msg'>Gagal mendaftar. Email mungkin sudah digunakan.</p>";
}
?>
<form method="POST" action="../../controllers/AuthController.php" class="register-form">
    <h2>Register</h2>
    <input type="text" name="name" placeholder="Nama Lengkap" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Kata Sandi" required><br>
    <button type="submit" name="register">Daftar</button>
</form>
<p class="login-link">Sudah punya akun? <a href="login.php">Masuk di sini</a></p>

<style>
    /* === Reset & Base === */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        background: #f5f8fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }

    /* === Error Message === */
    .error-msg {
        color: #e63946;
        background: #ffe6e6;
        border: 1px solid #e63946;
        padding: 10px 15px;
        border-radius: 6px;
        margin-bottom: 10px;
        text-align: center;
        width: 320px;
    }

    /* === Register Form === */
    .register-form {
        background: #fff;
        padding: 30px 40px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 320px;
    }

    .register-form h2 {
        margin-bottom: 20px;
        color: #2b2d42;
    }

    .register-form input {
        width: 100%;
        padding: 10px 12px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 14px;
        transition: 0.2s;
    }

    .register-form input:focus {
        border-color: #0077b6;
        outline: none;
        box-shadow: 0 0 4px rgba(0, 119, 182, 0.4);
    }

    .register-form button {
        width: 100%;
        padding: 10px;
        background: #0077b6;
        color: #fff;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 15px;
        font-weight: 500;
        transition: background 0.3s ease;
        margin-top: 10px;
    }

    .register-form button:hover {
        background: #005f87;
    }

    /* === Login Link === */
    .login-link {
        margin-top: 15px;
        font-size: 14px;
        color: #555;
    }

    .login-link a {
        color: #0077b6;
        text-decoration: none;
        font-weight: 500;
    }

    .login-link a:hover {
        text-decoration: underline;
    }

    /* === Responsiveness === */
    @media (max-width: 400px) {
        .register-form {
            width: 90%;
            padding: 25px;
        }

        .error-msg {
            width: 90%;
        }
    }
</style>