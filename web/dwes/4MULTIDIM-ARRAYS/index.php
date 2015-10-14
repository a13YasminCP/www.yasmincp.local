<html>
    <head>
        <title>Multidimensional Arrays</title>
    </head>
    <body>
        <table>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
    
        <?php
        
            $lista =  [  
            'John' => [
            'email' => 'john@demo.com',
            'website'=> 'www.john.com',
            'age' => 22,
            'password' => 'pass',
                ],
            'Anna' => [
            'email' => 'anna@demo.com',
            'website' => 'www.anna.com',
            'age' => 24,
            'password' => 'pass',
                ],
            'Peter' => [
            'email' => 'peter@mail.com',
            'website' => 'www.peter.com',
            'age' => 42,
            'password' => 'pass',
                ],
            'Max' => [
            'email' => 'max@mail.com',
            'website' => 'www.max.com',
            'age' => 33,
            'password' => 'pass',
                 ],
              ];
                    
            echo "<ul>";
            
            foreach ($lista as $l => $valor) //$lista es el array q he exo entonces a la hora
            // d recorrerlo le indico q me lo separe las claves en una variable y los valores en otro
            {
                echo "<li>";
                echo $l;  //claves
                echo "<ul>"; ///cerito)
                foreach ($valor as $l1 => $valor1) //y como valor es un array vuelvo a separar las claves y los valores
                    
                    echo "<li>". $l1 .":".$valor1."</li>"; 
                
                echo "</ul>";
                echo "</li>";
                
            }               
            
            echo "</ul>";
            
                    
        ?>
    </body>
</html>
