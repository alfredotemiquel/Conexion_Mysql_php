<?php   
     require_once "usuariosModelo.php"; 

    $usuarioModel = new usuariosModelo(); 
    $a_users = $usuarioModel->get_users(); 
?> 

<!DOCTYPE html> 
 <html> 
 <head> 
     <title>Usuarios registrados</title> 
 </head> 
 <body> 
     <table > 
            <tr> 
                <td> 
                    Id 
                </td> 
                <td > 
                    Nombre 
                </td> 
                <td> 
                    Correo 
                </td> 
            </tr><!-- /THEAD --> 

            <?php foreach ($a_users as $row): ?> 

            <tr> 
                <td><?php echo $row['id']; ?></td> 
                <td><?php echo $row['nombre']; ?></td> 
                <td><?php echo $row['correo']; ?></td> 
            </tr><!-- /TROW --> 
         
            <?php endforeach ?>     
                  
        </table> 
    
 </body> 
 </html> 
