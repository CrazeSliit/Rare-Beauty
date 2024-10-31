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

// Fetch data from the users table
$sql = "SELECT id, username, email, dob, phone FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="table.css"> <!-- Optional CSS for styling -->
</head>
<body>
    <div class="container">
        <h2>User Details</h2>
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Phone Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data for each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id"]. "</td>
                                <td>" . $row["username"]. "</td>
                                <td>" . $row["email"]. "</td>
                                <td>" . $row["dob"]. "</td>
                                <td>" . $row["phone"]. "</td>
                                <td>
                                    <a href='update_user.php?id=" . $row["id"] . "' class='btn'>Update</a>
                                    <a href='delete_user.php?id=" . $row["id"] . "' class='btn' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No data found</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <br><br>
        <button onclick="window.location.href='home login.php'" class="btn">BACK</button>
    </div>
    
</body>
</html>

<?php
// Close the connection
$conn->close();
?>
