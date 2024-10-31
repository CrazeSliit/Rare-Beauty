<?php
session_start();

// Include the database connection file
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Verify the password (hashed password)
        if (password_verify($password, $row['password'])) {
            // Password is correct, create session variables
            $_SESSION['email'] = $email;
            header("Location: home login.php");
            exit();
        } else {
            // Password is incorrect
            $_SESSION['error'] = "Incorrect password";
            header("Location: login.php");
            exit();
        }
    } else {
        // User not found
        $_SESSION['error'] = "User not found";
        header("Location: login.php");
        exit();
    }
}

// Close the database connection
mysqli_close($conn);
?>
