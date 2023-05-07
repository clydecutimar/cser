<?php
session_start();

// Connect to database
$host = "localhost";
$user = "root";
$password = "";
$database = "user_info";

$conn = mysqli_connect($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username and password are valid
    $sql = "SELECT * FROM user_admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful, set session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("Location: premium.php"); // Redirect to dashboard page
    } else {
        // Login failed, display error message
        echo "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="lr.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Login</title>
    <script>
        function togglePassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</head>
<body>
<div class="lr">
    <img src="logo.png" alt="logo" width="200" height="150" style="display:block; margin:auto;">
    <h1>Login</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
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
</body>
</html>
