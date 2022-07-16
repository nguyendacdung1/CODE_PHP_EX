<?php
    $x1=25;
    $y1=10;
    function myText(){
        global $x1, $y1;
        $y1=$x1+$y1;
    }
    myText();
    echo $y1;
?>
