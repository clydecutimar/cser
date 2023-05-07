<?php
session_start();
require_once('config.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user_info WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['start_date'] === null || $row['end_date'] === null) {
            echo "<div class='error-message'>Your account has not activated yet.</div>";
        } else {
            $current_date = date('Y-m-d');
            $end_date = $row['end_date'];
            if (strtotime($end_date) < time()) {
                echo "<div class='error-message'>Your account has expired.</div>";
            } else {
                $_SESSION['username'] = $username;
                header("Location: premium.php");
                exit();
            }
        }
    } else {
        echo "<div class='error-message'>Invalid username or password.</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="lr.css">
	<title>CSE ReviewBoost Login Form</title>
</head>

<body>

<div class="lr">
  <img src="logo.png" alt="logo" width="200" height="150" style="display:block; margin:auto;">
  <h1>Login</h1>
  <form method="POST" action="login.php">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <div style="position: relative;">
      <input type="password" id="password" name="password" required>
      <button type="button" onclick="togglePassword()">Show</button>
    </div><br>

    <input type="submit" value="Login">
  </form>
</div>

<script>
function togglePassword() {
  var password = document.getElementById("password");
  if (password.type === "password") {
    password.type = "text";
    document.querySelector("button").textContent = "Hide";
  } else {
    password.type = "password";
    document.querySelector("button").textContent = "Show";
  }
}
</script>

</body>
</html>
