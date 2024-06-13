<!DOCTYPE html>
<html>
<head>
    <title>Musical Valley - Confirmation</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        $options = htmlspecialchars($_POST['options']);
        
        echo "<p>Hi $name, your options is $options</p>";
        echo "<p>Our team will give you a call at $phone</p>";
    } else {
        echo "<p>Invalid request</p>";
    }
    ?>
</body>
</html>
