<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
</head>
<body>
    <div class="container">
        <form action="register_process.php" method="post">
            <h2>Registration</h2>
        
        <lable for="username">Username</lable>
        <input type="text" id="username" name="username" required>

        <lable for="password">Password</lable>
        <input type="password" id="password" name="password" required>

        <button type="submit" name="register">Register</button>
        <p>Already have an account? <a href="login.php">Login</a></p>
        
        </form>
    </div>
</body>
</html>