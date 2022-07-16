<?php
    class Color{
        function Color(){
            $color_name = "green";
            echo "color is: " .$color_name;
        }
        function ChageColor(){
            $color_name = "Red";
            echo "<br> update color is:" .$color_name;
        }
    }
    $objColor = new Color();
    $objColor ->Color();
    $objColor -> ChageColor();
?>
