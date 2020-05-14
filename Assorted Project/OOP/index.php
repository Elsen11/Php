<?php
require_once 'Autoloading/init.php';

$comic = new Komik("naruto uzumaki", "Japan",  "rollins", 45000, 100);
$game = new Game("Sinchan", "Korea",  "rollins", 92000, 50);

echo $comic->getInfoProduk();
echo "<br>";
$cetak = new CetakInfoProduk();
$cetak->tambahProduk($comic);
$cetak->tambahProduk($game);
echo $cetak->cetak();
echo "<hr>";

use OOP\Service\User as ServiceUser;
use OOP\Autoloading\User as AutoUser;

new ServiceUser();
echo "<br>";
new AutoUser();
