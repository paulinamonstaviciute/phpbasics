<?php
$kates = rand(1, 3);
$sunys = rand(1, 3);
$katasuniai = 0;

for ($x = 1; $x <= $kates; $x++) {
    for ($y = 1; $y <= $sunys; $y++) {
        $pavyko = rand(0, 1);
        if ($pavyko) {
            $katasuniai++;
            break;
        }
    }
}
$h1 = 'Katašunių išeiga';
$h2 = " Dalyvavo $kates katės ir $sunys šunys";
$h3 = "Katašunių išeiga: $katasuniai";
?>
<html>
    <head>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
    </body>
</html>