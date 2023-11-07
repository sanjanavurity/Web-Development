<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input from the login form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Establish a database connection (replace with your database credentials)
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
    $db_name = 'temp';

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // Perform a query to check the entered username
    $query = "SELECT username, password FROM test WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($dbUsername, $dbPassword);
    $stmt->fetch();

    if ($username === $dbUsername && password_verify($password, $dbPassword)) {
        // Successful login, set a session variable to remember the user
        $_SESSION['username'] = $username;

        // Redirect to a welcome page or display a success message
        header('Location: welcome.php');
        exit();
    } else {
        // Display an error message for incorrect credentials
        echo "Invalid username or password. Please try again.";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
