<!-- cookie1.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>
<body>
    <form method="POST" action="cookie1.php">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="reminder">Reminder:</label>
        <input type="text" id="reminder" name="reminder" required>
        <br>
        <input type="submit" value="Send">
    </form>

    <?php
    // Check if the form has been submitted and the 'name' field is set
    if (isset($_POST['name']) && isset($_POST['reminder'])) {
        // Retrieve the input values
        $name = $_POST['name'];
        $reminder = $_POST['reminder'];

        // Redirect to cookie2.php with the name and reminder as URL parameters
        header("Location: cookie2.php?name=" . urlencode($name) . "&reminder=" . urlencode($reminder));
        exit; // Ensure the script stops executing after the header redirection
    }
    ?>
</body>
</html>
