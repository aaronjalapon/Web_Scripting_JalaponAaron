<?php
// Server-side registration processing
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = trim($_POST['fullname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirm_password'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $hobbies = isset($_POST['hobbies']) ? implode(',', $_POST['hobbies']) : '';
    $country = $_POST['country'] ?? '';
    $error = '';
    if (!$fullname || !$email || !$username || !$password || !$confirm || !$gender || !$country) {
        $error = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Invalid email format.';
    } elseif ($password !== $confirm) {
        $error = 'Passwords do not match.';
    } else {
        $usersFile = 'users.txt';
        $users = file_exists($usersFile) ? file($usersFile, FILE_IGNORE_NEW_LINES) : [];
        foreach ($users as $user) {
            $fields = explode('|', $user);
            if (isset($fields[2]) && $fields[2] === $username) {
                $error = 'Username already exists.';
                break;
            }
        }
    }
    if ($error) {
        echo "<div class='error'>$error</div><a href='register.html'>Back to Register</a>";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $line = "$fullname|$email|$username|$hash|$gender|$hobbies|$country\n";
        file_put_contents($usersFile, $line, FILE_APPEND);
        echo "<div class='success'>Registration successful! <a href='login.html'>Login here</a></div>";
    }
} else {
    header('Location: register.html');
    exit();
}
?>
