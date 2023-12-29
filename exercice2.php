<?php
 $nombreInitial = 456;
 $tirage = 0;
 $nombreTire =0;
 while ($nombreTire !== $nombreInitial){
    $nombreTire = rand (100,999);
    $tirage++; 
 }
 echo "Nombre initial : $nombreInitial <br>";
 echo "Nombre de tirages necessaires avec while : $tirage <br>";
 $tirage =0;
 $nombreTire =0;
 echo "Nombre initial : $nombreInitial<br>";
 echo "Nombre de tirage nécessaires avec for :$tirage <br>";

 ?>