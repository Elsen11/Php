<?php

class contohStatic
{
    public static $angka = 1;
    public static function halo()
    {
        return "halo " . self::$angka++ . " kali.";
    }
}

// echo contohStatic::$angka;
// echo "<br>";
// echo contohStatic::halo();
// echo "<br>";
// echo contohStatic::halo();
// echo "<hr>";

class contoh
{
    public static $angka = 1;
    public  function halo()
    {
        return "halo " . self::$angka++ . " kali.<br>";
    }
}

$obj = new contoh();
// echo $obj->halo();
// echo $obj->halo();
// echo $obj->halo();
// echo "<hr>";
$obj2 = new contoh();
// echo $obj2->halo();
// echo $obj2->halo();
// echo $obj2->halo();


//--------------------------

define('NAMA', 'arthur fleck');
// echo NAMA;
echo "<br>";
const UMUR = 32;
// echo UMUR;

class Constanta
{
    const NAMA = "Arthur Fleck";
    public $kelas = __CLASS__;
}

echo Constanta::NAMA;
$obj = new Constanta();
echo "<br>";
echo $obj->kelas;
