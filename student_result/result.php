<?php
$bangla = 100;
$english = 100;
$math = 100;
$socialSeance = 100;
$chemistry = 100;


$argv = ($bangla+$chemistry+$english+$math+$socialSeance)/5;

$grade = ' ';

switch($argv){
    case($argv >= 80):
        echo "A+";
        break;
        case($argv >= 70):
            echo "A";
            break;
         case($argv >= 60):
             echo "B";
              break;
         case($argv >= 50):
             echo "B";
                 break;

}

echo $argv ;
echo $grade;