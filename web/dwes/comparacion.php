<html> 
<head> 
   <meta charset="UTF-8">
   <title>Exemplo de PHP</title> 
</head> 
<body> 
<?php 
   $a = 8; 
   $b = 3; 
   $c = 3; 
   echo "<p>a = 8</p>";
   echo "<p>b = 3</p>";
   echo "<p>c = 3</p>";
   echo "<p>'a' é igual a 'b' ? ---- ";
   echo $a == $b."</p> "; 
   echo "<p>'a'' é distinto de 'b' ? ---- ";
   echo $a != $b."</p>";
   echo "<p>'a' é maior que 'b' ? ---- ";
   echo $a > $b."</p>";
   echo "<p>'a' é menor que 'b' ? ---- ";    
   echo $a < $b."</p>";
   echo "<p>'a' é maior ou igual a 'c' ? ---- ";    
   echo $a >= $c."</p>";
   echo "<p>'b' é menor ou igual a 'c' ? ---- "; 
   echo $b <= $c."</p>";  
   /*UNO SIGNIFICA SI/TRUE Y NADA CERO*/
?> 
</body> 
</html>