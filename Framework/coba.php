<?php
require_once 'vendor/autoload.php';
// require_once '/vendor/fzaninotto/Faker/src/autoload.php';
// $faker = Faker\Factory::create();
$faker = Faker\Factory::create('id_ID');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar nama penduduk</h1>
    <?php
    for ($i = 0; $i < 20; $i++) { ?>
        <ul>
            <li><?= $faker->name . "<br>"; ?></li>
            <li><?= $faker->address . "<br>"; ?></li>
            <li><?= $faker->email . "<br>"; ?></li>
        </ul>
    <?php  } ?>

</body>

</html>