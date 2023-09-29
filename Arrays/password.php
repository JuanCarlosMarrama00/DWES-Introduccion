<?php
   
    function rand_Pass($upper, $lower, $numeric, $other){
        $password = array();

        for($i=0; $i<$upper; $i++) {
            $mayuscula = chr(rand(65,90));
            array_push($password, $mayuscula);     
        }

        for($i=0; $i<$lower; $i++) {
            $minuscula = chr(rand(97, 122));    
            array_push($password, $minuscula);     
        }

        for($i=0; $i<$numeric; $i++) {
            $numero = chr(rand(48,57));    
            array_push($password, $numero);     
        }

        for($i=0; $i<$other; $i++) {
            $otro = chr(rand(33,47));
            array_push($password, $otro);     
        }

        shuffle($password);
        return implode($password);
      
    }

    print(rand_Pass(2,3,5,2));
?>