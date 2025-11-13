<?php
class User {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function register($name, $email, $password, $role = 'ibu') {
        // Cek apakah email sudah ada di database
        $check = $this->pdo->prepare("SELECT id FROM users WHERE email = ?");
        $check->execute([$email]);

        if ($check->rowCount() > 0) {
            // Email sudah digunakan
            return false;
        }

        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Masukkan data baru
        $stmt = $this->pdo->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$name, $email, $hashedPassword, $role]);
    }

    public function login($email, $password, $remember = false) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            session_regenerate_id(true);
            $_SESSION['user'] = [
                'id' => $user['id'],
                'name' => $user['name'],
                'role' => $user['role']
            ];

            // Kalau remember me dicentang
            if ($remember) {
                $token = bin2hex(random_bytes(32));
                $stmt = $this->pdo->prepare("UPDATE users SET remember_token = ? WHERE id = ?");
                $stmt->execute([$token, $user['id']]);

                setcookie(
                    'remember_token',
                    $token,
                    time() + (86400 * 7), // 7 hari
                    '/',
                    '',
                    false,
                    true // HttpOnly
                );
            }
            return true;
        }
        return false;
    }

    public function checkRememberedUser() {
        if (isset($_COOKIE['remember_token'])) {
            $token = $_COOKIE['remember_token'];
            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE remember_token = ?");
            $stmt->execute([$token]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'role' => $user['role']
                ];
                return true;
            }
        }
        return false;
    }

    public function logout() {
        // Hapus cookie juga
        if (isset($_COOKIE['remember_token'])) {
            setcookie('remember_token', '', time() - 3600, '/');
        }
        session_unset();
        session_destroy();
    }
}
?>
