<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="#" method="POST" enctype="multipart/form-data">
            <table id="formularioSubida" border="0">
                <thead>
                <th>Elige los archivos que quieras subir</th>
                </thead>
                <tr>
                    <td>
                        <div class="inputImagenModificado">
                            <input class="inputImagenOculto" name="imagen1" type="file">
                            <div class="inputParaMostrar">
                                <input>
                                <img src="imagenes/button_select2.gif">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td> 
                        <input type="button" id="botonAnnadir" onClick="agregarFila('formularioSubida', 'botonAnnadir')" value="Añadir archivo" style="width:138px;">        
                        <input type="submit" name="botonSubir" value="Subir"> 
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
