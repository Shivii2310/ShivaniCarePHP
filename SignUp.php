<?php
include 'dbconnection.php';
$success = "";
$error = "";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $role = 'user'; // default role

    if (!$username || !$email || !$password) {
        $error = "All fields are required.";
    } else {
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error = "Email already registered.";
        } else {
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $username, $email, $hashed, $role);

            if ($stmt->execute()) {
                $success = "Signup successful. <a href='signin.php'>Sign In</a>";
            } else {
                $error = "Signup failed. Try again.";
            }
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
        <div class="signup-title">Sign Up</div>
        
        <?php if ($success): ?>
          <div class="alert alert-success"><?php echo $success; ?></div>
        <?php elseif ($error): ?>
          <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <!-- Error Message -->
        <form method="post" action="">
          <input type="text" class="form-control" name="username" placeholder="username" />
          <input type="email" class="form-control" name="email" placeholder="Email" />
          <input type="password" class="form-control" name="password" placeholder="Password" />
          <button type="submit" class="btn btn-join mt-2">Join</button>
        </form>

        <!-- Sign In Redirect -->
        <div class="signin-text">
          Already have an account?
          <a href="SignIn.php">Sign In</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>