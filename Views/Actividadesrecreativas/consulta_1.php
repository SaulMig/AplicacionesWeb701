<style type="text/css">
    tr.resaltar {
        background-color: #F5FFD7;
        cursor: pointer;
    }
</style>

<br>
<br>
<div>
    <table class="table" id="tabla">
        <thead class="thead-light">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">City</th>
        </tr>
        </thead>
<?php
$datos=$datos[0];
$url=URL;
$var;
while($row=mysqli_fetch_array($datos))
    echo "
            <tbody onload=\"ini()\">
            <tr {$row['id_dato']} onmouseover=\"this.className = 'resaltar'\" onmouseout=\"this.className = null\">
                <td>{$row['nombre']}</td>
                <td>{$row['email']}</td>
                <td>{$row['age']}</td>
                <td>{$row['city']}</td>
            </tr>
            </tbody>
";
?>
</table>
        </div>

<script type="text/javascript">
    $(document).ready(function(){
        $(".editar").click(function(){
            var id=$(this).attr('id');
            $.post("<?php echo URL ?>Calificaciones/get/"+id,{},function(data){
                if(data){
                    data=JSON.parse(data)
                    $("#id").val(data['id_usuario'])
                    $("#nombre").val(data['nombre'])
                    $("#ap_p").val(data['ap_p'])
                    $("#ap_m").val(data['ap_m'])
                    $("#myModal").modal('show');
                }
            })
        })
    })
</script>

