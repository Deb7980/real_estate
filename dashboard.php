<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login_form.html");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Real Estate Listing Service</h1>
        <nav>
            <ul>
                <li><a href="add_property_form.html">Add Property</a></li>
                <li><a href="view_properties.php">View My Properties</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    </main>
    <footer>
        <p>&copy; 2024 Real Estate Listing Service</p>
    </footer>
</body>
</html>
