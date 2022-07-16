<?php
$x=5;
function Text(){
    echo  "following line shows an error since variable x is declared outside the function.";
   // echo "<p>Variable x inside function is: $x error </p>"
}
Text();
echo "<p> Variable x outside function is: $x</p>"
?>
