<?php
include 'db_connect.php'; // Include the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Insert user into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful! <a href='login.php'>Login here</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link your CSS file here -->
</head>

<body>
    <!-- Taskbar Section -->
    <div class="taskbar">
        <div class="taskbar-left">
            <h1>Register Page</h1>
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
                <h2>Register</h2>
                <form action="" method="post">
                    <div class="textbox">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="textbox">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <input class="btn" type="submit" value="Register">
                </form>
            </div>
            <p class="register-link">Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
</body>

</html>
