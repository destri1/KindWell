<?php
if (isset($_GET['error'])) {
    echo "<p class='error-msg'>Email atau password salah.</p>";
}
if (isset($_GET['success'])) {
    echo "<p class='success-msg'>Registrasi berhasil! Silakan login.</p>";
}
?>
<form method="POST" action="../../controllers/AuthController.php" class="login-form">
    <h2>Login</h2>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Kata Sandi" required><br>
    <label class="remember-label">
        <input type="checkbox" name="remember"> Ingat saya
    </label><br>
    <button type="submit" name="login">Masuk</button>
</form>
<p class="register-link">Belum punya akun? <a href="register.php">Daftar</a></p>

<style>
    /* === Base === */
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

    /* === Messages === */
    .error-msg, .success-msg {
        width: 320px;
        text-align: center;
        padding: 10px 15px;
        border-radius: 6px;
        margin-bottom: 10px;
        font-size: 14px;
    }

    .error-msg {
        color: #e63946;
        background: #ffe6e6;
        border: 1px solid #e63946;
    }

    .success-msg {
        color: #2d6a4f;
        background: #d8f3dc;
        border: 1px solid #40916c;
    }

    /* === Login Form === */
    .login-form {
        background: #fff;
        padding: 30px 40px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 320px;
    }

    .login-form h2 {
        margin-bottom: 20px;
        color: #2b2d42;
    }

    .login-form input[type="email"],
    .login-form input[type="password"] {
        width: 100%;
        padding: 10px 12px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 14px;
        transition: 0.2s;
    }

    .login-form input:focus {
        border-color: #0077b6;
        outline: none;
        box-shadow: 0 0 4px rgba(0, 119, 182, 0.4);
    }

    .remember-label {
        font-size: 14px;
        color: #555;
        display: flex;
        align-items: center;
        gap: 6px;
        margin-top: 6px;
        margin-bottom: 10px;
    }

    .login-form button {
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
        margin-top: 5px;
    }

    .login-form button:hover {
        background: #005f87;
    }

    /* === Register Link === */
    .register-link {
        margin-top: 15px;
        font-size: 14px;
        color: #555;
    }

    .register-link a {
        color: #0077b6;
        text-decoration: none;
        font-weight: 500;
    }

    .register-link a:hover {
        text-decoration: underline;
    }

    /* === Responsive === */
    @media (max-width: 400px) {
        .login-form {
            width: 90%;
            padding: 25px;
        }

        .error-msg, .success-msg {
            width: 90%;
        }
    }
</style>