<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website</title>
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
    
    <div class="profile-section">
        <img class="profile-photo" src="buzzo.jpg" alt="Profile Photo">
        <h1>Welcome to My Website!</h1>
    </div>

    <div class="info-section">
        <p>Hello, my name is ARNOLD BUZOHERA VYAMGOYE. I am a student at the University of Dar Es Salaam, Collage of Information Communication and Technologies (COICT) and passionate web developer with experience in HTML, CSS, and JavaScript.</p>
        <p>I have worked on various projects, ranging from small personal websites to large-scale web applications. My goal is to create engaging and user-friendly web experiences.</p>
    </div>

   


    </main>

    <footer>
        <p>&copy; 2023 Arnold Buzohera Vyamgoye</p>
    </footer>
</body>

</html>
