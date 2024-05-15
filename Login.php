<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
</head>
<style>
body {
  
    font-family: Arial, sans-serif;

    background-color: #70e000;

    /* background-image: url(images/bg.jpg);
    background-repeat: no-repeat;
    background-size: cover; */
    /* background-position: center; */
    margin-top: 10%;
}
.top-right-button {
  position: fixed;
  height: 40px;
  width: 90px;
  top: 20px; /* Adjust the top position as needed */
  right: 20px; /* Adjust the right position as needed */
  padding: 10px 20px;
  background-color: #319801;
  color: black;
  font-weight: bolder;
  border: none;
  border-radius: 5px;
  z-index: 999; /* Ensure the button is above other content */
}
.top-right-button:hover{
    background-color: #277c00;
}
.top-right-button a{
    text-decoration: none;
    color: black;
  font-weight: bolder;
}

.login-container {
    
    max-width: 400px;
    margin: 100px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
}

input[type="text"],
input[type="email"],
input[type="password"],
button {
    display: block;
    width: 100%;
    margin-bottom: 10px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}


</style>

<body>
<button class="top-right-button"> <a href="home.php" >BACK</a></button>

<div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <button type="submit">Login</button>
    </form>
</div>
<?php
// Establish connection to MySQL database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "ecofriendlyshoppingwebsite";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate input fields (you can add more validation as needed)
    if ($password != $confirm_password) {
        echo "<p style='text-align: center; font-size: 2rem; color: green;font-weight: bold '>Passwords do not match!</p>";
    } else {
        // Hash the password before storing it in the database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into the database
        $sql = "INSERT INTO customer (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "<p style='text-align: center; font-size: 2rem; color: green; font-weight: bold '>User registered successfully! </p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

</body>
</html>
