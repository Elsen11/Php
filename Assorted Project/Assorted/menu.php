<?php

echo '<a href="/default.asp">home<a>-<a href="/html/default.asp">HTML Tutorial</a> -
<a href="/css/default.asp">CSS Tutorial</a> -
<a href="/js/default.asp">JavaScript Tutorial</a> -
<a href="default.asp">PHP Tutorial</a>';


$color = "Black";
$car = "Toyota innova Car";
$food = "pineapple";
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
    ?>

</body>

</html>