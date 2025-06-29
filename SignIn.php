<?php
session_start();
include 'dbconnection.php';
$error = "";

// Handle login
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (!$email || !$password) {
        $error = "All fields are required.";
    } else {
        $stmt = $conn->prepare("SELECT id, username, password, role FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($id, $username, $hashed_password, $role);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $id;
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $role;

                if ($role === 'admin') {
                    header("Location: dashboard.php");
                } else {
                    header("Location: index.php");
                }
                exit;
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "User not found.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/SignIn.css"/>
</head>
<body>
    <div class="main-container">
    <!-- Left Side -->
    <div class="left-section">
      <p>Unlock Beauty Access</p>
      <h2>Discover The<br/>Newest Beauty<br/>Trends</h2>
    </div>

    <!-- Right Side -->
    <div class="right-section">
      <div class="brand-text">
        <a href="index.php" style="color:#c80075;">Shivani’s<br/>Care</a>
      </div>

      <div class="w-100" style="max-width: 340px; margin: 0 auto;">
        <div class="signup-title">Sign In</div>
        <form method="post" action="">
          <input type="email" class="form-control" name="email" placeholder="Email" />
          <input type="password" class="form-control" name="password" placeholder="Password" />
          <button type="submit" class="btn btn-join mt-2">Join</button>
        </form>

        <!-- Sign In Redirect -->
        <div class="signin-text">
          Don’t have an account?
          <a href="SignUp.php">Sign Up</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>