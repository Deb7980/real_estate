<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Property Listings</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Real Estate Listing Service</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="listings.php">Listings</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="login_form.html">Login</a></li>
                <li><a href="registration_form.html">Register</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
        $sql = "SELECT * FROM properties";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="property-card">';
                echo '<img src="' . $row["image_path"] . '" alt="Property Image">';
                echo '<h2>' . $row["title"] . '</h2>';
                echo '<p>' . $row["description"] . '</p>';
                echo '<p>Price: $' . $row["price"] . '</p>';
                echo '<p>Location: ' . $row["location"] . '</p>';
                echo '</div>';
            }
        } else {
            echo "No properties found.";
        }

        $conn->close();
        ?>
    </main>
    <footer>
        <p>&copy; 2024 Real Estate Listing Service</p>
    </footer>
</body>
</html>
