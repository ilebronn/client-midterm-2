<?php
// Start session to access session variables
session_start();

// Function to get image URL based on gender
function getGenderImage($gender) {
    return ($gender === 'male') ? 'img/male.png' : 'img/female.png';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="margin: 0; padding: 0; height: 100vh; background-image: url('img/123.jpg'); background-size: cover; color: black; font-size: 1rem;">
    <div class="container text-center">
        <div style="text-align: center;">
            <a href="index.php" style="display: inline-block;">
                <img src="img/logo.png" alt="Logo" style="max-width: 200px; margin-top: 20px;">
            </a>
        </div>
        <div class="card mx-auto mb-5" style="width: 24rem;">
            <img src="<?php echo getGenderImage($_SESSION['gender']); ?>" class="card-img-top" alt="Gender Image">
            <div class="card-body">
                <h5 class="card-title">Account Information</h5>
                <ul class="list-group text-left">
                    <li class="list-group-item"><strong>First Name:</strong> <?php echo isset($_SESSION['firstname']) ? $_SESSION['firstname'] : ''; ?></li>
                    <li class="list-group-item"><strong>Middle Name:</strong> <?php echo isset($_SESSION['middlename']) ? $_SESSION['middlename'] : ''; ?></li>
                    <li class="list-group-item"><strong>Last Name:</strong> <?php echo isset($_SESSION['lastname']) ? $_SESSION['lastname'] : ''; ?></li>
                    <li class="list-group-item"><strong>Age:</strong> <?php echo isset($_SESSION['age']) ? $_SESSION['age'] : ''; ?></li>
                    <li class="list-group-item"><strong>Gender:</strong> <?php echo isset($_SESSION['gender']) ? $_SESSION['gender'] : ''; ?></li>
                    <li class="list-group-item"><strong>Nationality:</strong> <?php echo isset($_SESSION['nationality']) ? $_SESSION['nationality'] : ''; ?></li>
                    <li class="list-group-item"><strong>Contact Number:</strong> <?php echo isset($_SESSION['contact']) ? $_SESSION['contact'] : ''; ?></li>
                    <li class="list-group-item"><strong>Email:</strong> <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?></li>
                    <li class="list-group-item"><strong>Address:</strong> <?php echo isset($_SESSION['address']) ? $_SESSION['address'] : ''; ?></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
