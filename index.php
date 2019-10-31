<?php
$integer_1 = rand(1, 100);
$integer_2 = rand(101, 200);
$integer_3 = rand(201, 300);
$integer_4 = rand(301, 400);

$h1 = " $integer_1 ";
$h2 = " $integer_2 ";
$h3_1 = " $integer_3 ";
$h3_2 = " $integer_4 ";
?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <h1>Skolos skaičiuoklė<?php print $h1; ?></h1>
        <h2>Jei paėmei<?php print $h2; ?> jievru</h2>
        <h3>Su dviem kabančiais grąžinsi<?php print $h3_1; ?></h3>
        <h3>Su vienu kabančiu grąžinsi<?php print $h3_2; ?></h3>
    </body>
</html>