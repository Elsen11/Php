<?php

function myTest1()
{
    $txt = "Hello world!";
    $x = 5;
    $y = 10.5;
    echo "sum of ", $x + $y;
}
$x = 5;
$y = 10.5;
function myTest2()
{
    global $x, $y;
    $x = $x * $y;
    echo "<p> Variable x inside function is : $x </p>";
}
function myStatic()
{
    static $x = 0;
    echo $x;
    $x++;
}
// myTest1();
// myTest2();
// myStatic();
// myStatic();
// myStatic();

class car
{
    function car()
    {
        $this->model = "VW";
    }
}
// $herbie = new car();
// echo $herbie->model;

function String($x)
{
    echo strlen($x);
    echo "<br>";
    echo str_word_count($x);
    echo "<br>";
    echo strrev($x);
    echo "<br>";
    echo strpos($x, "world");
    echo "<br>";
    echo str_replace("world", "Dolly", $x);
}
// String("Halloo world");

function cast()
{
    // Cast float to int
    $x = 23465.768;
    $int_cast = (int) $x;
    echo $int_cast;

    echo "<br>";

    // Cast string to int
    $x = "23465.768";
    $int_cast = (int) $x;
    echo $int_cast;
    echo "<br>";
    define("GREETING", "Welcome to W3Schools.com!", true);
    echo GREETING;
    echo "<br>";
    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
    ]);
    echo cars[0];
}
// cast();
function operator()
{
    $x = array("a" => "red", "b" => "green");
    $y = array("c" => "blue", "d" => "yellow");
    $a = array("Ram", "Shita", "Geeta");
    print_r(each($x));
    echo "<br>";
    print_r($x + $y);
}
// operator();

function assignmentOperator()
{
    // if empty($user) = TRUE, set $status = "anonymous"
    echo $status = (empty($user)) ? "anonymous" : "logged in";
    echo ("<br>");

    $user = "John Doe";
    // if empty($user) = FALSE, set $status = "logged in"
    echo $status = (empty($user)) ? "anonymous" : "logged in";
    // variable $user is the value of $_GET['user']
    // and 'anonymous' if it does not exist
    echo $user = $_GET["user"] ?? "anonymous";
    echo ("<br>");

    // variable $color is "red" if $color does not exist or is null
    echo $color = $color ?? "red";
}
// assignmentOperator();

function condition()
{
    $t = date('H');
    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    echo "<br>";
    echo $t;
    $favcolor = "red";
    echo "<br>";
    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
}
// condition();
function loop()
{
    $x = 1;
    while ($x <= 5) {
        echo "While The number is: $x <br>";
        $x++;
    }
    echo "<br>";

    $x = 1;
    do {
        echo "do-while the number is  : $x <br>";
        $x++;
    } while ($x <= 5);
    echo "<br>";

    for ($x = 0; $x <= 10; $x += 2) {
        echo " For The Number Is $x <br>";
    }
    $colors = array("red", "green", "blue", "yellow");
    echo "<br>";
    foreach ($colors as $value) {
        echo "$value <br>";
    }

    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    foreach ($age as $x => $val) {
        echo "$x=>$val <br>";
    }
}
// loop();

function addNumbers(int $a, int $b)
{
    return $a + $b;
}
// echo addNumbers(5, "5");
echo "<br>";
function setHeight(int $minheight = 50)
{
    echo "The height is : $minheight <br>";
}

// setHeight(350);
// setHeight(); // will use the default value of 50
// setHeight(135);

function addNumbersfloat(float $a, float $b)
{
    return (int) ($a + $b);
}
// echo addNumbersfloat(1.2, 5.2);
function array_function()
{
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );
    for ($row = 0; $row < count($cars); $row++) {
        for ($col = 0; $col < count($cars[0]); $col++) {
            echo  $cars[$row][$col] . ' ';
        }
        echo "</br>";
    }
}
// array_function();
function sorting_array()
{
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    echo "key sorted ascending";
    echo "<br>";
    ksort($age);
    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    echo "value sorted ascending";
    echo "<br>";
    asort($age);
    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    echo "key sorted descending";
    echo "<br>";
    krsort($age);
    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    echo "value sorted descending";
    echo "<br>";
    arsort($age);
    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
}
// sorting_array();

class fruit
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct()
    {
        echo "this fruit is {$this->name} and the color is 
        {$this->color}.";
        echo "</br>";
    }
    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
    function getColor()
    {
        return $this->color;
    }
}

class Strawberry extends fruit
{
    public function mesage()
    {
        echo "am i fruit or a berry ? ";
    }
}
$apple = new fruit("apple", "Red");
$apple->setName("apple");
$apple->name = "apple pen";
echo $apple->getName();
// $banana = new fruit("banana", "Yellow");
// echo $banana->getName();
// echo "</br>";
// echo $banana->getColor();
// echo "</br>";
// $strawberry = new Strawberry("strawberry", "pink");
// echo "</br>";
// echo $strawberry->getName();
// echo "</br>";

abstract class Cars
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro(): string;
}

// Child classes
class Audi extends Cars
{
    public function intro(): string
    {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends Cars
{
    public function intro(): string
    {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

class Citroen extends Cars
{
    public function intro(): string
    {
        return "French extravagance! I'm a $this->name!";
    }
}

// Create objects from the child classes
$audi = new audi("Audi");
// echo $audi->intro();
// echo "<br>";

$volvo = new volvo("Volvo");
// echo $volvo->intro();
// echo "<br>";

$citroen = new citroen("Citroen");
// echo $citroen->intro();

abstract class ParenClass
{
    abstract protected function prefixName($name);
}

class childClass extends ParenClass
{
    public function prefixName($name, $separator = ".", $greet = "Dear")
    {
        if ($name == "John Doe") {
            $prefix = "Mr.";
        } elseif ($name == "Jane Doe") {
            $prefix = "Mrs.";
        } else {
            $prefix = "";
        }
        return "{$greet} {$prefix}{$separator} {$name}";
    }
}
$class = new childClass;
// echo $class->prefixName("John Doe");
// echo "<br>";
// echo $class->prefixName("john doe");

trait message1
{
    public function msg1()
    {
        echo "OOP is Fun!";
    }
}
trait message2
{
    public function msg2()
    {
        echo "OOP reduce code duplication!";
    }
}
class welcome
{
    use message1;
}
class welcome2
{
    use message1, message2;
}
// $obj = new Welcome();
// $obj->msg1();
// echo "<br>";
// $obj2 = new Welcome2();
// $obj2->msg1();
// echo "<br>";
// $obj2->msg2();

class StaticMethod
{
    public static function welcome()
    {
        echo "Hello World!";
    }
    public function __construct()
    {
        self::welcome();
    }
}

// Call static method
StaticMethod::welcome();
echo "<br>";
new StaticMethod();

class domain
{
    protected static function getWebsiteName()
    {
        return "www.facebook.com";
    }
}
class Client extends domain
{
    public $websiteName = "halo";
    public function __construct()
    {
        $this->websiteName = domain::getWebsiteName();
    }
}

// $gateway = new Client();
// echo $gateway->websiteName;
// echo domain::getWebsiteName();//protected

class pi
{
    public static $value = 3.14159;
}

class x extends pi
{
    public function xStatic()
    {
        return parent::$value;
    }
}

// Get value of static property directly via child class
echo x::$value;
// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
