<?php

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
