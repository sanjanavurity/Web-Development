<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <style>
        body {
            height: 100%;
            font-family: Arial, sans-serif;
            text-align: left;
            background-image: linear-gradient(#fff, seagreen);
            background-size: 100% 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .container {
            max-width: 500px;      
            margin: 0,auto; 
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
            display:block;
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
            font-size:16px;
            border: 6px solid gray;
            border-radius: 20px;
            padding: 10px;
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
    font-size: 15px;
    border: 1px solid gray;
    border-radius: 10px;
    width: auto;
}

    </style>
 <script>
        function redirectToLogin() {
            window.location.href = "login.php";
        }
    </script>
</head>
<body>
    <div class="container">
        <h2 align="center">Sign Up</h2>
        <form action="javascript:void(0);" onsubmit="redirectToLogin()">   
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $name = $_POST['Fullname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirmPassword=$_POST['confirmPassword'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $bdate = $_POST['bdate'];

        }
        ?>
		<label for="Fullname">FullName</label>
		<input type="text" id="Fullname" name="Fullname" placeholder="Enter your full name" required>
<div>
		<label for="username">Username</label>
		<input type="text" id="username" name="username" placeholder="Enter a username" required>
</div>
<div>
                <label for="password">Create Password</label>
                <input type="password" id="pass" name="password" maxlength="8" placeholder="Enter your password" required>
    </div>
    <div>

                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" maxlength="8" placeholder="Confirm your password" required>
            </div>
<div>
		<label for="email">Email address</label>
		<input type="text" id="email" name="email" placeholder="sfdh@gmail.com" required>
</div>

<div>
		<label for="phone">Phone number</label>
		<input type="tel" id="phone" name="phone" placeholder="1234567890" required>
</div>

<div>
		<label for="bdate">Date of birth</label>
		<input type="date" id="bdate" name="bdate" >
</div>

<div>
<label for="terms-and-conditions">
        <input id="terms-and-conditions" type="checkbox" required name="terms-and-conditions" /> I accept the terms and conditions</a>
      </label>
</div>

<div>
		<center><input type="submit" value="Register" ></center>
	
</div>

</div>

</form>

    </div>
</body>
</html>
