<?php
$string = 'Labas PHP!';
$integer = 153;
$boolean = true;
$null = null;

$li_1 = "$string";
$li_2 = "$integer";
$li_3 = "$boolean";
$li_4 = "$null";
?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <ul>
            <li><?php print $li_1 ?></li>
            <li><?php print $li_2 ?></li>
            <li><?php print $li_3 ?></li>
            <li><?php print $li_4 ?></li>
        </ul>
    </body>
</html>