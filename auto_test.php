<?php
require 'auto.php';

//promenna $auto1, obsahujici nazev
$auto1 = new auto('Skoda');
echo 'Auto se jmenuje: ' . $auto1->jmeno . '<br />';
echo 'Auto zni: ' . $auto1->mluv() . '<br />';

//promenna $auto2, obsahujici nazev
$auto2 = new auto('BMW');
echo 'Auto se jmenuje: ' . $auto2->jmeno . '<br />';
echo 'Auto zni: ' . $auto2->mluv() . '<br />';