<!-- cookie2.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Output</title>
</head>
<body>
    <?php
    // Check if 'name' and 'reminder' are set in the URL parameters
    if (isset($_GET['name']) && isset($_GET['reminder'])) {
        // Retrieve the URL parameters
        $name = $_GET['name'];
        $reminder = $_GET['reminder'];

        // Set cookies for name and reminder with a lifetime of 60 seconds
        setcookie("name", $name, time() + 60);
        setcookie("reminder", $reminder, time() + 60);

        // Display the name and reminder
        echo "Selamat Datang, " . htmlspecialchars($name) . "<br>";
        echo "Peringatan anda: " . htmlspecialchars($reminder) . "<br>";
    } else {
        echo "No name or reminder found.";
    }
    ?>
</body>
</html>
