<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Welcome to my home page!</h1>
    <p>Some text.</p>
    <p>Some more text.</p>
    <?php
    include 'menu.php'; // continue even file not found
    // require 'menus.php'; //halt when file not found
    echo "<br>";
    echo "I have a $color $car";
    echo "<br>";
    echo "I cannot eat $food";
    ?>
</body>

</html>

<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    // Set session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";
    ?>

</body>

</html>

<?php
