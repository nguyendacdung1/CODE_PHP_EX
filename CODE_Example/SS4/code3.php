<?php
function static_variable(){
    static $x =10;
    $y=20;
    $x++;
    $y++;
    echo "Static: " .$x."<br>";
    echo "non-static: " .$y. "<br>";
}
static_variable();
static_variable();
?>
