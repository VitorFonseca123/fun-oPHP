<?php 
    $sal=0;
    $bonus=0;
    $string=0;
    for($i=0;$i<3;$i++){
        if($i==0){
            $sal = 5000;
            $bonus = 20;
            $string = "diretor";
        }else if($i == 1){
            $string = "comum";
            $sal = 1000;
            $bonus = 10;
        }else if($i == 2){
            $string = "estagiario";
            $sal = 800;
            $bonus = 5;
        }
        calc($sal, $bonus, $string);
    }
       
    

  function calc($salar, $b, $cargo){
    echo "$cargo  R$$salar e $b% <br>";
    $bonus = ($b/100)*$salar;
    echo "  O bonus é $bonus <br>";
  }
?>