



<?php
include "db.php"; // Ensure the correct DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $conpas = $_POST['confirm_password']; 

    if ($Password != $conpas) {
        echo "Password does not match.";
        exit;
    }

    $hashedPassword = password_hash($Password, PASSWORD_BCRYPT);
    $sql = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");

    if ($sql->execute([$Name, $Email, $hashedPassword])) {
        echo "
        <script>
            alert('Registration successful!');
            setTimeout(function() {
                window.location.href = 'login.php';
            }, 1000); // 1 second delay
        </script>";
        exit;
    } else {
        echo "Data not sent.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div>
        <h1>Registration Form</h1>
    </div>
    <form action="registration.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter the name" required>

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter the Email" required>

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter the password" required>

        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" placeholder="Enter password again" required>

        <input type="submit" value="Register">
        <div class="c"><form action="registration.php" method="get">
        <a href="login.php" class="c"><button type="button">Login </button></a>
        </div>
    </form>
    </form>
  
</body>
</html>