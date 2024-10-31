<?php
$servername = "localhost";
$username_db = "root"; // Your MySQL username
$password_db = ""; // Your MySQL password
$dbname = "userdetails";

// Create connection
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if 'id' is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the user with the specified ID
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
}

// Redirect to the table page after deletion
header("Location: table.php");
exit();

$conn->close();
?>
