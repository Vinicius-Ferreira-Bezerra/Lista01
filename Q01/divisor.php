<?php
	$divisor = $_GET["divisor"];

    if ($divisor%10==0){
        echo "<h1>$divisor é divisivel por 10</h1>";
    }
    if ($divisor%5 == 0) {
        echo "<h1>$divisor é divisivel por 5</h>";
    }
    if ($divisor%2 == 0){
        echo "<h1>$divisor é divisel por 2</h>";
    }