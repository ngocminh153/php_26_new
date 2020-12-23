<?php
    $chuoi = "#";
    for ($i = 10; $i > 0; $i--) { 
        if ($i < 7) {
            for ($k = 0; $k < 7 - $i ; $k++) { 
                echo"&nbsp;&nbsp;&nbsp;";
            }
        }
        for ($j = 0; $j < $i ; $j++) { 
            echo "&nbsp;" . $chuoi;
        }
        echo "<br>";
    }
?>