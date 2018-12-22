<?php

$dato=$datos[0];
while($row=mysqli_fetch_array($dato))
{
    echo "
		<div class='col-sm'>
			<div class='card' style='width: 18rem;'>"
    ?><img class='card-img-top' alt='Card image cap' src='data:image/jpg; base64, <?php echo base64_encode($row[11]); ?>'/><?php echo"
    	            <div class='card-body'>
	              	<h5 class='card-title'>{$row[2]}</h5>	
	              	<h5 class='card-title'>{$row[3]}</h5> 
	              	<h5 class='card-title'>{$row[4]}</h5>  
	              	<h5 class='card-title'>{$row[5]}</h5> 
	              	<h5 class='card-title'>{$row[6]}</h5> 
	              	<h5 class='card-title'>{$row[7]}</h5> 
	              	<h5 class='card-title'>{$row[8]}</h5> 
	              	<h5 class='card-title'>{$row[9]}</h5> 
	              	<h5 class='card-title'>{$row[10]}</h5> 
		          	<div>
		             	<button type='button' class='btn btn-primary' data-toggle='modal' id='cut'  data-id='{$row[0]}'>Eliminar</button>
		             	<button type='button' class='btn btn-primary' data-toggle='modal' id='out'  data-id='{$row[0]}'>Modificar</button>                
		             </div> 		              		        
	                </div>
	         </div>
        </div>";
}

?>