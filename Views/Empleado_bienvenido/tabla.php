<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "<tr>
    <td>{$row['titulo']}</td>
    <td>{$row['hora_inicio']}</td>
    <td>{$row['hora_fin']}</td>
    <td>{$row['telefono']}</td>
    <td>{$row['correo']}</td>
    <td>{$row['ubicacion']}</td>
  
    <td><a class='glyphicon glyphicon-remove btn_eliminar'  href='#!' data-id='{$row['id_dato']}'></a></td>
    <td><a class='glyphicon glyphicon-refresh btn_modificar' href='#!' data-id='{$row['id_dato']}'></a></td></tr>";
?>
