<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pets";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $name = isset($_POST['name']);
    $email = isset($_POST['email']);
    $password = isset($_POST['password']);

    // Additional validation (e.g., check if fields are not empty)
    if (empty($name) || empty($email) || empty($password)) {
        echo "Please fill in all fields.";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO signup (Name, Email, Password) VALUES ('$name','$email',$password)");
        $stmt->bind_param("sss", $name, $email, $hashed_password);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect upon successful insertion
            header("Location: home.html");
            exit();
        } else {
            // Error handling if execution fails
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

$conn->close();
