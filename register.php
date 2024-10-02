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
    <style>
        /* Global Styles */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap");

        :root {
            --main-color: #29d978;
            --primary: #f0fff7;
            --black: #141414;
            --white: #fff;
            --bg: #f2f2f2;
            --light-black: #666;
        }

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
            text-transform: capitalize;
            transition: .2s linear;
        }

        html {
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-behavior: smooth;
            scroll-padding-top: 6rem;
        }

        html::-webkit-scrollbar {
            width: 1rem;
        }

        html::-webkit-scrollbar-track {
            background: var(--white);
        }

        html::-webkit-scrollbar-thumb {
            background: var(--main-color);
        }

        /* Taskbar Section */
        .taskbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: var(--primary);
            box-shadow: 0 0.3rem 0.6rem rgba(0, 0, 0, 0.1);
        }

        .taskbar .taskbar-left h1 {
            font-size: 2.5rem;
            color: var(--main-color);
        }

        .navbar {
            display: flex;
            align-items: center;
        }

        .navbar a {
            font-size: 1.6rem;
            color: var(--black);
            text-decoration: none;
            margin-left: 2rem;
            transition: color 0.2s;
        }

        .navbar a:hover {
            color: var(--main-color);
        }

        /* Content Section */
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: var(--bg);
        }

        .container {
            background-color: var(--white);
            padding: 3rem;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 40rem;
            width: 100%;
        }

        .login-box {
            margin-bottom: 2rem;
        }

        .login-box h2 {
            color: var(--main-color);
            margin-bottom: 1.5rem;
            font-size: 3rem;
        }

        .textbox {
            margin-bottom: 1.5rem;
            text-align: left;
        }

        .textbox label {
            font-size: 1.7rem;
            color: var(--black);
            display: block;
            margin-bottom: 0.5rem;
        }

        .textbox input {
            width: 100%;
            padding: 1rem;
            border: 0.1rem solid var(--light-black);
            border-radius: 0.5rem;
            font-size: 1.6rem;
            color: var(--black);
        }

        .btn {
            display: inline-block;
            margin-top: 1rem;
            padding: 1rem 3rem;
            border: 0.1rem solid var(--main-color);
            border-radius: 0.5rem;
            cursor: pointer;
            font-size: 1.7rem;
            color: var(--main-color);
            background: transparent;
            transition: 0.2s;
        }

        .btn:hover {
            background: var(--main-color);
            color: var(--white);
        }

        .register-link {
            font-size: 1.6rem;
            margin-top: 1rem;
        }

        .register-link a {
            color: var(--main-color);
            text-decoration: none;
        }

        .register-link a:hover {
            color: darken(var(--main-color), 10%);
        }
    </style>
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
