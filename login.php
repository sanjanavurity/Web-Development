<!DOCTYPE html>
<html>
<head>
    <title>Simple Login System</title>
    <style>
html, body {
    height: 100%;
    font-family: Arial, sans-serif;
    text-align: left;
    background: linear-gradient(to bottom, #fff, seagreen);
    background-size: 100% 100%;
}



        .container {
            max-width: 500px;
            margin: 0 auto;       
            padding: 30px;
            border-radius: 20px;
            box-shadow: 5px 5px 10px 0px #888888;
            background-color: mediumaquamarine;
        }

        h2 {
            font-family: "SHOWCARD GOTHIC";
            font-weight: bolder;
            color: rgb(43, 68, 43);
            position: relative;
        }
        h2::before, h2::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 33%; 
            height: 10px;
            background-image: linear-gradient(to right, rgb(43, 68, 43), darkcyan);
        }

        h2::before {
            left: 0;
        }

        h2::after {
            right: 0;
        }

        form {
         
            margin-top: 20px;

        }

        label {
            display:flex;
            margin: 10px 0;
            color: #333;
            font-weight: bold;
        }

        .password-container input[type="password"] {
            width: 38%; /* Set the width for each password field */
        }

        input[type="name"],input[type="username"],input[type="confirmPassword"],input[type="phone"],input[type="bdate"]
        input[type="password"],
        input[type="email"] {
            width: 100px;
            margin: 5px 0;
            font-size:30px;
            border: 6px solid gray;
            border-radius: 20px;
        }
        input{
            height:2em;
            width:28.5rem;
            border-radius: 20px;
        }
        input[type="submit"] {
            background-image: linear-gradient(to right, rgb(43, 68, 43), darkcyan);
            color: black;
            font-weight: bolder;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            width:30.8rem;
            cursor: pointer;
            font-size: 20px;
            font-family: "SHOWCARD GOTHIC";
        }
        input{
            padding:0.5rem;
            padding-right: 30px;
        
        }

        input[type="submit"]:hover {
            background-color: #fff, seagreen;
            transition: background-color 0.3s, color 0.3s;
            background: linear-gradient(to right, darkcyan, rgb(43, 68, 43)); 
            color: black; 
            font-family: "SHOWCARD GOTHIC";
        }

input[type="checkbox"] {
    margin: 5px 0;
    font-size: 5px;
    border: 1px solid gray;
    border-radius: 10px;
    width: auto;
}


    </style>
</head>

<body>

<?php
    // Initialize variables for error and success messages
    $error = "";
    $success = "";

    // Define an array of allowed credentials
    $allowed_credentials = [
        'registered_username' => 'registered_password'
    ];

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $entered_username = $_POST["username"];
        $entered_password = $_POST["password"];

        // Check if the entered credentials are in the allowed list
        if (array_key_exists($entered_username, $allowed_credentials) &&
            $allowed_credentials[$entered_username] == $entered_password) {
            $success = "Login Successful!";
        } else {
            $error = "Invalid username or password. Please try again.";
        }
    }
?>

<div class="container">
<center><h2>Login</h2></center>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <center><input type="submit" value="Login"></center>
</form>

<?php
    if (!empty($error)) {
        echo '<div style="color: red;">' . $error . '</div>';
    }

    if (!empty($success)) {
        echo '<div style="color: green;">' . $success . '</div>';
    }
?>
</div>
</body>
</html>