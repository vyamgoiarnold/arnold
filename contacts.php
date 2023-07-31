<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve contact information from the database
$sql = "SELECT email, mobile_number, twitter_account, instagram_account, facebook_account, physical_address FROM contact_info";
$result = $conn->query($sql);

$email = $mobileNumber = $twitterAccount = $instagramAccount = $facebookAccount = $physicalAddress = "";

if ($result->num_rows > 0) {
    // Fetch the data
    $row = $result->fetch_assoc();
    $email = $row['email'];
    $mobileNumber = $row['mobile_number'];
    $twitterAccount = $row['twitter_account'];
    $instagramAccount = $row['instagram_account'];
    $facebookAccount = $row['facebook_account'];
    $physicalAddress = $row['physical_address'];
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
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
        </nav>
    </header>

    <main>
        <div class="contact-section">
            <h2>Contact Information</h2>
            <ul>
                <li>Email: <?php echo $email; ?></li>
                <li>Mobile Number: <?php echo $mobileNumber; ?></li>
                <li>Twitter: <?php echo $twitterAccount; ?></li>
                <li>Instagram: <?php echo $instagramAccount; ?></li>
                <li>Facebook: <?php echo $facebookAccount; ?></li>
                <li>Physical Address: <?php echo $physicalAddress; ?></li>
            </ul>
        </div>
    </main>
</body>

</html>
