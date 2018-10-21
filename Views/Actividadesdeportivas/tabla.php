<?php
$datos=$datos[0];
$url=URL;
while($row=mysqli_fetch_array($datos))
    echo "
     
     <div class=\"col-lg-8 col-sm-6 portfolio-item\">
            <div class=\"card h-100\">
                <a href=\"#\"><img src=\"{$url}Public/imagenes /logo.png\" height=270\" width = \"300\"></a>
                <div class=\"card-body\">
                    <h3 class=\"card-title\">
                        {$row['titulo']}
                    </h3>
                    <p class=\"card-text\">
                    <h6>Descripcion</h6>
                    {$row['descripcion']}
                    <br>
                    <br>
                    Abrimos de {$row['hora_inicio']}hrs a {$row['hora_fin']}hrs
                    <br>
                    <br>
                    Telefono {$row['telefono']}
                    <br>
                    <br>
                    Correo  <a href='{$row['correo']}'>{$row['correo']}</a>
                    <br>
                    <br>
                    
                    
                   Ubicacion {$row['ubicacion']}
                    </p>
                </div>
            </div>
        </div>
";
?>