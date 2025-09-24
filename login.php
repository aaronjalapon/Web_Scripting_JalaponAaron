<?php
session_start();
// Server-side login processing
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $error = '';
    if (!$username || !$password) {
        $error = 'Both fields are required.';
    } else {
        $usersFile = 'users.txt';
        $users = file_exists($usersFile) ? file($usersFile, FILE_IGNORE_NEW_LINES) : [];
        $found = false;
        foreach ($users as $user) {
            $fields = explode('|', $user);
            if (isset($fields[2]) && $fields[2] === $username && isset($fields[3]) && password_verify($password, $fields[3])) {
                $found = true;
                $fullname = $fields[0];
                // Store user data in session
                $_SESSION['username'] = $username;
                $_SESSION['fullname'] = $fullname;
                break;
            }
        }
        if (!$found) {
            $error = 'Invalid username or password.';
        }
    }
    if ($error) {
        echo "<div class='error'>$error</div><a href='login.html'>Back to Login</a>";
    } else {
        // Redirect to main page
        header('Location: main.php');
        exit();
    }
} else {
    header('Location: login.html');
    exit();
}
?>
