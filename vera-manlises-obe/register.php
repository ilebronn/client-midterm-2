<?php
// Start session to store form data
session_start();

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store form data in session variables
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['middlename'] = $_POST['middlename'];
    $_SESSION['lastname'] = $_POST['lastname'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['nationality'] = $_POST['nationality'];
    $_SESSION['contact'] = $_POST['contact'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['address'] = $_POST['address'];

    // Redirect to account.php
    header("Location: account.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="margin: 0; padding: 0; display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh; background-image: url('img/gyma.jpg'); background-size: cover; color: white; font-size: 1rem;">
    <div class="container">
    <div style="text-align: center;">
    <a href="index.php" style="display: inline-block;">
        <img src="img/logo.png" alt="Logo" style="max-width: 200px; margin-top: 20px;">
    </a>
    </div>
    <h2 class="text-center" style="font-weight: bold;">Registration Form</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>

            <div class="form-group">
                <label for="middlename">Middle Name:</label>
                <input type="text" class="form-control" id="middlename" name="middlename">
            </div>

            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nationality">Nationality:</label>
                <input type="text" class="form-control" id="nationality" name="nationality" required>
            </div>

            <div class="form-group">
                <label for="contact">Contact Number:</label>
                <input type="text" class="form-control" id="contact" name="contact" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Register</button>
        </form>
    </div>
</body>
</html>
