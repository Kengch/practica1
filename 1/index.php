<?php 
    /* variables
    $nombre = 'keng';
    $apellido = 'chang';
    echo $nombre . ' ' . $apellido . '\n';

    $num = 123;
    $num1 = 456;
    $sum = $num + $num1;

    echo $sum 
*/

    $nombres1 = [];
    $nombres1[0] = 'lung';
    $nombres = ['keng', 'chayanne', 'luis miguel'];
    /*echo $nombres[2]*/
    /*for ($i=0; $i < count($nombres) ; $i++) { 
        echo $nombres[$i] . ' ';
    }*/

    foreach ($nombres as $key => $value) {
        if ($key == 2) {
            echo '<h1>Es ' . $value . '</h1>';
        }
    }

?>