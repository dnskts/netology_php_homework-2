<?php

$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));

if (!is_numeric($a) || !is_numeric($b)) {
    fwrite(STDERR, "Введите, пожалуйста, число \n");
    exit;
}

$a = (int)$a;
$b = (int)$b;

if ($b == 0) {
    fwrite(STDERR, "Делить на 0 нельзя \n");
    exit;
}

echo $a / $b; 
