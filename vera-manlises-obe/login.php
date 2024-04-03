<?php
// Updated credentials for authentication
$valid_username = "admin";
$valid_password = "password12345";

// Check if form is submitted
if (isset($_POST['login'])) {
    // Retrieve user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate user input and authenticate
    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful
        session_start();
        $_SESSION['username'] = $username; // Store username in session
        header("Location: dashboard.php");
        exit;
    } else {
        // Authentication failed
        $error_message = '<div class="alert alert-danger mt-3">Invalid username or password. Please try again.</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="margin: 0; padding: 0; display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh; background-image: url('img/login-bg.jpg'); background-size: cover; color: white; font-size: 1rem;">
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Login</h2>
                        <?php if(isset($error_message)) echo $error_message; ?>
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="index.php">
        <img src="img/logo.png" alt="Your Logo" style="max-width: 200px;">
    </a>
</body>
</html>
