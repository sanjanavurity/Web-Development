<?php
// Connect to the MySQL database
$db_host = 'localhost'; // Update with your database host if necessary
$db_user = 'root'; // Update with your database username
$db_password = 'root'; // Update with your database password
$db_name = 'temp'; // Update with your database name

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Fullname'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $bdate = $_POST['bdate'];

    // Prepare and execute an SQL INSERT statement to store user data
    $sql = "INSERT INTO test(Fullname, username, password, email, phone, bdate) VALUES ('$name', '$username', '$password', '$email', '$phone', '$bdate')";

    if ($conn->query($sql) === TRUE) {
        $success = "Registration Successful!";
    } else {
        $error = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
