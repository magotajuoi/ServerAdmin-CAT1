<?php
session_start(); // Start the session
include 'db_connect.php'; // Include the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Check if user exists
    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $user;
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link your CSS file here -->
</head>

<body>
    <!-- Taskbar Section -->
    <div class="taskbar">
        <div class="taskbar-left">
            <h1>Login Page</h1>
        </div>
        <div class="navbar">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
    </div>

    <!-- Content Section -->
    <div class="content">
        <div class="container">
            <div class="login-box">
                <h2>Login</h2>
                <form action="" method="post">
                    <div class="textbox">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="textbox">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <input class="btn" type="submit" value="Login">
                </form>
            </div>
            <p class="register-link">Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </div>
</body>

</html>
