<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection
    $servername = "localhost";
    $dbusername = "root"; // Replace with your database username
    $dbpassword = ""; // Replace with your database password
    $dbname = "db"; // Replace with your database name

    // Create a connection
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query
    $sql = "SELECT * FROM register WHERE username = '$username' AND passwords = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Username and password match, set session variables and redirect to home page
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;
        header("Location: home.php");
        exit();
    } else {
        // Invalid username or password, display an error message
        $error = "Invalid username or password";
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="form-section">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" name="login">Login</button>
            </form>
            <?php if (isset($error)) { ?>
                <p><?php echo $error; ?></p>
            <?php } ?>
            <p>If you don't have an account, <a href="register.php">register here</a>.</p>
        </div>
    </main>
    <footer>
        <p>&copy; 2023 Arnold Buzohera Vyamgoye</p>
    </footer>
</body>

</html>
