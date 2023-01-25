<?php

//  logic 1.6
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

// logic 2.4
for($x=1;$x<=9;$x++){
    for($y=1;$y<=9;$y++){
    if($x >= $y){
        echo "*";
    } else {
        echo "-";
    }
}
echo "\n";
}

// logic 2.4
for($x=1;$x<=9;$x++){
    for($y=1;$y<=9;$y++){
    if($x <= $y){
        echo "*";
    } else {
        echo "-";
    }
}
echo "\n";
}

// logic 2.6
for($x=2;$x<=10;$x++){
    for($y=1;$y<=9;$y++){
    if($x+$y<=10 || $x<=$y){
        echo "- ";
    } else {
        echo "* ";
    }
}
echo "\n";
}



?>