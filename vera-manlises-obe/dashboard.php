<?php
session_start();
if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit;
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="margin: 0; padding: 0; display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh; background-image: url('img/gym.jpg'); background-size: cover; color: black; font-size: 1rem;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Welcome to Dashboard, <?php echo $username; ?></h2>
                        <p>Welcome to our gym! At our fitness center, we're dedicated to helping you achieve your health and fitness goals. Whether you're a seasoned athlete or just beginning your fitness journey, our state-of-the-art facilities, expert trainers, and diverse range of classes cater to all levels and interests. With a supportive community and personalized workout plans, we're here to motivate and guide you every step of the way. Join us today and embark on a transformative experience towards a healthier, stronger you.</p>
                        <a href="index.php" class="btn btn-danger btn-block">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
