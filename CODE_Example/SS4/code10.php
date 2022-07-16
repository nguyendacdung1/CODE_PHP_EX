<?php
function myText(){
    static $x = 0;
    echo $x;
    $x++;
}
myText();
echo "<br>";
myText();
echo "<br>";
myText();
?>
