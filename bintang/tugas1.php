<?php

for($x=1;$x<=9;$x++) {
        for($y=1;$y<=9;$y++) {
            if ($x == 1 || $x == 5 || $x == 9){
                echo "*";
            } 
            else if($y == 1 || $y == 5 || $y == 9)
            {
                echo "*";
            } else {
                echo "-";
            }
        }
echo "\n";
    }