<?php

function dateDiffindays($date1, $date2)
{
    $diff = strtotime($date2) - strtotime($date1);
    return abs(round($diff / 86400));
}


$date1 = "17-09-2019";
$date2 = "31-09-2018";
$daydiff = dateDiffindays($date1, $date2);
// echo $daydiff;
// echo '<br>';


function oneTimePassword($n)
{
    $generator = "1234567890";
    $result = "";
    for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand() % (strlen($generator))), 1);
        // echo $result;
        // echo '<br>';
    }
    return $result;
}
$n = 7;
// print_r(oneTimePassword($n));
// echo '<br>';

$string1 = "Welcome to w3resource.com";
// echo substr($string1, 11, 1);
// echo strlen($string1);
// echo '<br>';


function getName($n)
{
    $character = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = "";

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($character) - 1);
        $randomString .= $character[$index];
    }
    return $randomString;
}
// echo getName(10);
function DateandTime()
{
    echo "today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("l") . "<br>";
    echo "The time is " . date("h:i:sa");
    $d = mktime(11, 14, 54, 8, 12, 2014);
    echo "<br>";
    echo "Created date is " . date("Y-m-d h:i:sa", $d);

    echo "<br>";
    $d = strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d = strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d = strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d = strtotime("+10 weeks");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $startdate = strtotime("tuesday");
    $enddate = strtotime("+10 weeks", $startdate);
    // echo $enddate;
    while ($startdate < $enddate) {
        echo date("Y M d", $startdate) . "<br>";
        $startdate = strtotime("+1 week", $startdate);
    }

    $d1 = strtotime("April 06");
    $d2 = ceil(($d1 - time()) / 60 / 60 / 24);
    echo "There are " . $d2 . " days left";
}

// DateandTime();


class fileHandling
{
    public $myfile;
    function __construct($file)
    {
        $this->file = $file;
        $this->myfile = fopen($this->file, "r") or die("Unable to open the file");
    }
    function read()
    {
        echo fread($this->myfile, filesize($this->file));
    }
    function checkEOF()
    {
        while (!feof($this->myfile)) {
            echo fgets($this->myfile) . "<br>";
        }
    }
    function writefile($mynewFile, $txt)
    {
        $newFile = fopen($mynewFile, "w") or die("Unable to open File");
        fwrite($newFile, $txt);
    }
}

$item = new fileHandling('Text.txt');
// $item->read();
// $item->checkEOF();
// $item->writefile("NewText.txt", "Naruto Shippuden Op 4 - Closer┃Cover by Raon Lee");


// cookies

$cookie_name = "user";
$cookie_value = "john cena";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>

</body>

</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="Submit">
    </form>
</body>

</html>