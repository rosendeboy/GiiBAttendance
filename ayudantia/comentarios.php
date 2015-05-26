<html>
    <head></head>
    
    <body>
        <form action="comentar.php" method="post">
            (Obligatorio)<b>Nombre</b>: <input name="nombre"> <br><br>
            <textarea name="comentario" cols="34">
                
            </textarea></br>
            <input type="submit" value="Enviar Comentario">
        </form>
        <br>
        <b>Comentario de los visitantes</b>
        
        <table border="2">
            <td>
                <?php
                include("data.txt"); ?>
            </td>
        </table>
        
        
        
        
    </body>
    
</html>