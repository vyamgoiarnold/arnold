
<!DOCTYPE html>
<html>
<head>
    <title>Your CV</title>
    <!-- Add any necessary CSS styling here -->
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
    <h1>Your CV</h1>
    <h2>Contact Information</h2>
    <p>Full Name: Vyamgoye Arnold</p>
    <p>Phone Number: 0759924160</p>
    <p>Email: vyamgoiarnold@gmail.com </p>
    <p>Address: Mecco, MWANZA, TANZANIA</p>
    
    <h2>Professional Summary/Objective</h2>
    <p>Experienced computer expert with a strong technical aptitude and a proven track record of effectively solving complex technical challanges.</p>
    
    <h2>Education</h2>
    <p>University Of Dar Es Salaam, BIT, 2023</p>
    <p>COICT, BIT, 2024</p>
    
    <h2>Work Experience</h2>
    <p>Software Engneering, EKU COMPANY, 2024</p>
    <p>WEBSITE DEVELOPER:</p>
   
    
    <h2>Skills</h2>
    <ul>
        <li>Skill 1: DRIVING</li>
        <li>Skill 2: COOKING EXPERT</li>
        <li>Skill 3: CODDING</li>
    </ul>
    
    <h2>Achievements/Projects</h2>
    <ul>
        <li>Achieved in developing alot of different websites </li>
        <li>Phone Application development</li>
        <li>Online Business Expert</li>
    </ul>
</body>
</html>
