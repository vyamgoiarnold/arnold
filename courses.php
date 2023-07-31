<!DOCTYPE html>
<html>
<head>
  <title>Courses</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="tryreg.js"></script>
</head>
<body>
  <header>
    <!-- Include navigation bar or any other elements as needed -->
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
    <h1>Course Registration</h1>
    <form id="courseForm" action="process.php" method="POST">
      <label for="courseName">Course Name:</label>
      <input type="text" id="courseName" name="courseName" maxlength="30" required>

      <label for="courseCode">Course Code:</label>
      <input type="text" id="courseCode" name="courseCode" required>

      <label for="courseDescription">Course Description:</label>
      <textarea id="courseDescription" name="courseDescription" maxlength="50" required></textarea>
      <br><br>

      <label for="department">Offering Department:</label>
      <select id="department" name="department">
        <option value="department1">computer science</option>
        <option value="department2">Finance</option>
        <option value="department3">Marketing</option>
        <option value="department4">Statistics</option>
        <option value="department5">DS</option>
        <!-- Add more department options as needed -->
      </select>

      <label for="semester">Semester:</label>
      <select id="semester" name="semester">
        <option value="spring">semester 1</option>
        <option value="summer">semester 2</option>
      </select>

      <label for="academicYear">Academic Year:</label>
      <select id="semester" name="semester">
        <option value="spring">first year</option>
        <option value="summer">second year</option>
        <option value="summer">third year</option>
      </select>
<br><br>
      <label for="instructor">Course Instructor:</label>
      <input type="text" id="instructor" name="instructor" maxlength="30" required>

      <label for="grade">Result (Grade):</label>
      <select id="grade" name="grade" required>
      <option value="spring">A</option>
      <option value="summer">B+</option>
      <option value="spring">B</option>
      <option value="spring">C</option>
      <option value="spring">D</option>
      <option value="spring">E</option>
      <option value="spring">F</option>
      
      </select>

      <button type="submit">Register Course</button>
    </form>

    <div id="courseTable">
      <!-- Display course information from the database in tabular form -->
    </div>
  </main>

  <footer>
    <p>&copy; 2023 Your Name. All rights reserved.</p>
  </footer>
</body>
</html>
