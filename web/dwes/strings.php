<html> 
<head> 
   <title>STRINGS</title> 
</head> 
<body> 
      <!--abrimos php para que me haga la comprobacion de si esta vacio y sino (else) que me muestre el formulario y luego abajo hay q cerrar el php q quedo abierto-->
      <!---->
   <?php 
   /*
      Name: xxxxxxxxxx
      Surname: xxxxxxxxxx
      Name and surname: xxxxxxxxxxx  xxxxxxxxxxxx
      Your name has X characters.
      The first 3 characters of your name are: xxx
      The letter A has been found in your surname at the position: x
      Your name contains x characters A.
      Your name in capital letters is:
      Your surname in lowercase is:
      Your name and surname capitalized:
      Your name backwards:
   */

      //cojo el id del imput del nombre
      if(!empty($_POST['nombre'])){

         echo "Tu nombre es: ".$_POST['nombre']."<br>";
         echo "Tu nombre tiene: ".strlen($_POST['nombre'])." letras"."<br>";
         echo "Las tres primeras letras de tu nombre son: ".substr($_POST['nombre'],0,3)."<br>";
         echo "La letra A de tu apellido aparece en la posicion: ".strpos($_POST['apellido'],'a')."<br>";
         echo "Tu nombre contiene : ".substr_count($_POST['apellido'],'a')." letras A"."<br>";
         echo "Tu nombre en mayúsculas es: ".strtoupper($_POST['nombre'])."<br>";
         echo "Tu apellido en minúsculas es: ".ucwords($_POST['nombre'])." ".ucwords($_POST['apellido'])."<br>";
         echo "Tu nombre es: ".strrev($_POST['nombre'])."<br>";

       }else{
    
      ?> 
   <H3>WORKING WITH STRINGS</H3>
   <form name="formulario" method="post" action="">
      
      <p><LABEL for="nombre">Nombre </LABEL><INPUT type="text" name="nombre" id="nombre"/></p>
      <p><LABEL for="apellido">Apellido </LABEL><INPUT type="text" name="apellido" id="apellido"/></p>
      <p><LABEL for="email">E-mail </LABEL><INPUT type="text" name="email" id="email"/></p>
     
      <INPUT type="submit" value="Enviar" class="submit"/> 
   </form>
      <?php
     }
      ?>
      <!--cerramos la llave del else aqui y como es una llava d php abrimos y cerramos php-->
</body> 
</html>