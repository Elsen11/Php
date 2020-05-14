<?php
$n = $_POST['in'];
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - ($i + 1); $j++) {
        echo "&nbsp ";
    }
    for ($k = 0; $k < 2 * $i + 1; $k++) {
        if ($i == 0) {
            echo nl2br("*\n&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*&nbsp *&nbsp *\n&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp* &nbsp*");
        } elseif ($i % 2 == 0) {
            echo "*";
        } else {
            echo "^";
        }
    }
    echo "<br>";
}
for ($i = $n / 2; $i < $n; $i++) {
    for ($j = 0; $j < $n - ($i + 1); $j++) {
        echo "&nbsp ";
    }
    for ($k = 0; $k < 2 * $i + 1; $k++) {
        if ($i % 2 == 0) {
            echo "^";
        } else {
            echo "*";
        }
    }
    echo "<br>";
}
for ($i = $n / 2; $i < $n; $i++) {
    for ($j = 0; $j < $n - ($i + 1); $j++) {
        echo "&nbsp ";
    }
    for ($k = 0; $k < 2 * $i + 1; $k++) {
        if ($i % 2 == 0) {
            echo "^";
        } else {
            echo "*";
        }
    }
    echo "<br>";
}
for ($i = 0; $i < 4; $i++) {
    for ($j = 1; $j < $n - 2; $j++) {
        echo "&nbsp ";
    }
    for ($k = 0; $k < 3; $k++) {
        echo " &nbsp|&nbsp ";
    }
    echo "<br>";
}
