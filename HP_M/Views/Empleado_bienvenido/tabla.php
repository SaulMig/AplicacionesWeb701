<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "<tr>
    <td>{$row['nombre']}</td>
    <td>{$row['email']}</td>
    <td>{$row['telefono']}</td>
  
    <td><a class='glyphicon glyphicon-remove btn_eliminar'  href='#!' data-id='{$row['id_usuario']}'></a></td>
    <td><a class='glyphicon glyphicon-refresh btn_modificar' href='#!' data-id='{$row['id_usuario']}'></a></td></tr>";
?>
