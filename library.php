<?php
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

// Fetch book records from the "library" table
$sql = "SELECT author, title, publisher, publication_year FROM library";
$result = $conn->query($sql);

// Generate HTML table rows dynamically
$tableRows = "";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $author = $row["author"];
        $title = $row["title"];
        $publisher = $row["publisher"];
        $year = $row["publication_year"];

        $tableRows .= "<tr>";
        $tableRows .= "<td>$author</td>";
        $tableRows .= "<td>$title</td>";
        $tableRows .= "<td>$publisher</td>";
        $tableRows .= "<td>$year</td>";
        $tableRows .= "</tr>";
    }
}

// Close the connection
$conn->close();
?>

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
                <!-- Your navigation menu items -->
            </ul>
        </nav>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Publisher</th>
                    <th>Year of Publication</th>
                </tr>
            </thead>
            <tr>
                    <th>Elizabeth Gilbert</th>
                    <th>"The Power of Now"</th>
                    <th>New Word Library</th>
                    <th>1997</th>
                </tr>
                <tr>
                    <th>Dale Carnegie</th>
                    <th>"You Can Heal Your Life"</th>
                    <th>Hay house</th>
                    <th>1984</th>
                </tr>
                <tr>
                    <th>Paulo Coelho</th>
                    <th>"The Archemist"</th>
                    <th>HarperOne</th>
                    <th>2004</th>
                </tr>
            <tbody>
                <?php echo $tableRows; ?>
            </tbody>
        </table>
    </main>
</body>

</html>
