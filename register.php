<<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $passwords = $_POST['passwords'];
    $cv_file = $_FILES['cv_file']['name'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];
    $email = $_POST['email'];

    // Database connection
    $servername = "localhost";
    $dbusername = "root";
    //$password = "";
    $dbname = "db";
    
    // Create a connection
    $conn = new mysqli($servername, $dbusername, "", $dbname);
    
    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Insert data into the database
    $sql = "INSERT INTO register (first_name, middle_name, surname, username, passwords, cv_file, facebook, twitter, instagram, email) 
            VALUES ('$first_name', '$middle_name', '$surname', '$username', '$passwords', '$cv_file', '$facebook', '$twitter', '$instagram', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
           <nav>
            <ul class="nav-menu">
                <li><a href="home.php">Home</a></li>
                <li><a href="about me.php">About Me</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="cv.php">CV</a></li>
                <li><a href="community_engagement.php">Community Engagement</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="contacts.php">Contacts</a></li>
                <li><a href="library.php">Library</a></li>
                <li>
                    <!-- Add login/register button based on user account -->
                    <?php
                    $loggedIn = false; // Assuming the user is not logged in. Replace with your logic to check if the user is logged in.
                    if ($loggedIn) {
                        echo '<a href="logout.php">Logout</a>';
                    } else {
                        echo '<a href="login.php">Login</a>';
                    }
                    ?>
                </li>
            </ul>
        </nav></header>
    <div class="container">
        <h2>Registration Form</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                &nbsp; &nbsp; &nbsp;
                <input type="text" id="first_name" name="first_name" required>
            </div><br>
            <div class="form-group">
                <label for="middle_name">Middle Name:</label>
                &nbsp;
                <input type="text" id="middle_name" name="middle_name">
            </div><br>
            <div class="form-group">
                <label for="surname">Surname:</label>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="text" id="surname" name="surname" required>
            </div><br>
            <div class="form-group">
                <label for="username">Username:</label>
                &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="text" id="username" name="username" required>
            </div><br>
            <div class="form-group">
                <label for="password">Password:</label>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="password" id="password" name="passwords" required>
            </div><br>
            <div class="form-group">
                <label for="cv_file">CV File:</label>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="file" id="cv_file" name="cv_file" required>
            </div><br>
            <div class="form-group">
                <label for="facebook">Facebook:</label>
                &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="text" id="facebook" name="facebook">
            </div><br>
            <div class="form-group">
                <label for="twitter">Twitter:</label>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                <input type="text" id="twitter" name="twitter">
            </div><br>
            <div class="form-group">
                <label for="instagram">Instagram:</label>
                &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="text" id="instagram" name="instagram">
            </div><br>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
                <?php if (isset($errors['email'])) {
                    echo "<p class='error'>" . $errors['email'] . "</p>";
                } ?>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</body>

</html>
