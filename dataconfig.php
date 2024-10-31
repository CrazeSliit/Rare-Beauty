<?php
include 'config.php'; // Include the database configuration

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $phone = htmlspecialchars(trim($_POST['phone']));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Validate password length
    if (strlen($password) < 6) {
        die("Password must be at least 6 characters long");
    }

    // Validate phone number (basic validation)
    if (!preg_match("/^[0-9]{10,15}$/", $phone)) {
        die("Invalid phone number");
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO users (username, email, password, dob, phone) VALUES (?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die("Error preparing the statement: " . $conn->error);
    }

    $stmt->bind_param("sssss", $username, $email, $hashed_password, $dob, $phone);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Form Submitted Successfully!";
    } else {
        die("Error: " . $stmt->error);  // Display SQL error
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
