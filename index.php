<?php

$months=12;
$wallet=1000;
$month_income =700;

for($x=1; $x<=$months; $x++){
    $month_expences=rand(1,1700);
    $wallet=$wallet+$month_income-$month_expences;
    if($wallet<0) {
        break;
    }
}
$h1 = ' Wallet forecast ';
$h2 = " Atsargiai, $x mėnesį gali baigtis pinigai";

?>
<html>
    <head>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
    </body>
</html>