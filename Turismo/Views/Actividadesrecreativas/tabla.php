<?php

$dato=$datos[0];
while($row=mysqli_fetch_array($dato))
{
    echo "
		<div class='col-sm'>
			<div class='card' style='width: 18rem;'>"
    ?><img height="300px" class='card-img-top' alt='Card image cap' src='data:image/jpg; base64, <?php echo base64_encode($row[10]); ?>'/><?php echo"
    	            <div class='card-body'>
	              	<h5 class='card-title'>{$row[2]}</h5>	
	              	<h5 class='card-title'>{$row[3]}</h5> 
	              	<h5 class='card-title'>{$row[4]}</h5>  
	              	<h5 class='card-title'>{$row[5]}</h5> 
	              	<h5 class='card-title'>{$row[6]}</h5> 
	              	<h5 class='card-title'>{$row[7]}</h5> 
	              	<h5 class='card-title'>{$row[8]}</h5> 
	              	<h5 class='card-title'>{$row[9]}</h5> 
	              	
		          	<div>
		          	    <a class='btn btn-primary btn_eliminar' href='#!' data-id='{$row['id_dato']}'>Eliminar</a>
		          	    <a href='".URL."Actividadesrecreativas/modificar/{$row['id_dato']}' class='btn btn-primary'> Modificar</a>
		             </div> 		              		        
	                </div>
	         </div>
        </div>";
}

?>