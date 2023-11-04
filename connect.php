<?php
$name = $_POST['name'];
$username =$_POST['username']; 
$password = $_POST['password']; $email= $_POST['email'];
$confirmPassword= $_POST['confirmPassword'];
$phone = $_POST['phone']; 
$bdate = $_POST['bdate']; 
//Database connection
$conn = new mysqli('localhost', 'root',' 'test');
if($conn->connect_error) {
die('Connection Failed : '.)
}else{
$stmt $conn->prepare("insert into registration (name, username, password,email,confirmPassword,phone,bdate)values(?, ?, ?, ?, ?, ?,?)");
$stmt->bind_param("sssssi", $name, $username, $password, $confirmPassword, $email, $phone,$bdate);
$stmt->execute();
echo "registration Successfully...";
$stmt->close();
$conn->close();
}
?