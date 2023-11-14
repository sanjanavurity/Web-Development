<?php
$name = $_POST['Fullname'];
$username =$_POST['username']; 
$password = $_POST['password']; $email= $_POST['email'];
$confirmPassword= $_POST['confirmPassword'];
$phone = $_POST['phone']; 
$bdate = $_POST['DOB']; 
//Database connection
$conn = new mysqli('localhost', 'root',' ','demo');
if($conn->connect_error) {
die('Connection Failed : '.$conn->connect_error);
}else{
$stmt = $conn->prepare("insert into test (Fullname, username, password,email,confirmPassword,phone,DOB)values(?, ?, ?, ?, ?, ?,?)");
$stmt->bind_param("sssssis", $name, $username, $password, $confirmPassword, $email, $phone,$DOB);
$stmt->execute();
if ($stmt->execute()) {
    echo "Registration successful";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
}
?>