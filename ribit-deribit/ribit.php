<?php
$schum = 3000;
$ribit = 0.12; //4.2%
$years = 10;

$res = $schum * ((pow((1+$ribit/12),12*$years) -1)/($ribit/12));
echo $res." | Total Desposits: ".($schum*(12*$years))." | Clean Eranings: ".($res - ($schum*(12*$years)));
