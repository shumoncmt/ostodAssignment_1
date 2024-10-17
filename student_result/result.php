<?php
$bangla = 33;
$english = 33;
$math = 33;
$socialSeance = 33;
$chemistry = 33;


$argv = ($bangla+$chemistry+$english+$math+$socialSeance)/5;


echo "All Subject Average Mark $argv" ;
echo "\n";



switch($argv){
    case($argv >= 80 && $argv <= 100):
        echo "Average Grade A+";
        break;
        case($argv >= 70 && $argv <= 79):
            echo "Average Grade A";
            break;
         case($argv >= 60 && $argv <= 69):
             echo "Average Grade B";
              break;
        case($argv >= 50 && $argv <= 59):
            echo " Average Grade C";
            break; 
        case($argv >= 40 && $argv <= 49):
           echo " Average Grade D";
          break; 
        case($argv >= 33 && $argv <= 39):
            echo " Average Grade E";
            break; 
        default:
        echo "Average Grade fail";

}
echo "\n";




 


