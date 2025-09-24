<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.html');
    exit();
}

$username = $_SESSION['username'];
$fullname = $_SESSION['fullname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo htmlspecialchars($username); ?></title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        .welcome-container {
            text-align: center;
        }
        
        .welcome-message {
            font-size: 2rem;
            color: #2d3748;
            margin-bottom: 1.5rem;
        }
        
        .user-info {
            color: #4a5568;
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        
        .logout-btn {
            background: #e53e3e;
        }
        
        .logout-btn:hover {
            background: #c53030;
        }

        .dashboard-card {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            margin-top: 2rem;
            text-align: left;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .greeting-time {
            font-size: 1.1rem;
            color: #667eea;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-container">
            <h1 class="welcome-message">Welcome, <?php echo htmlspecialchars($fullname); ?>!</h1>
            <p class="user-info">Logged in as: <?php echo htmlspecialchars($username); ?></p>
            
            <div class="dashboard-card">
                <p class="greeting-time">
                    <?php
                    $hour = date('H');
                    if ($hour >= 5 && $hour < 12) {
                        echo 'Good morning!';
                    } elseif ($hour >= 12 && $hour < 18) {
                        echo 'Good afternoon!';
                    } else {
                        echo 'Good evening!';
                    }
                    ?>
                </p>
                <p>You've successfully logged into your account. Here you can manage your profile and access your personalized content.</p>
            </div>

            <form action="logout.php" method="POST" style="margin-top: 2rem;">
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>