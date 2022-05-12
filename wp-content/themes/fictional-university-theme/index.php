<?php
    $sheDoesSimpleArrays = array("Teeonah", "Floof", "Boopie", "Brad");
    
    $count = 0;

    while($count < count($sheDoesSimpleArrays)) {
        echo "<li>Hello my name is $sheDoesSimpleArrays[$count]</li>";
        $count++;
    }
?>


