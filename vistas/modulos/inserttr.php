<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{


$trabajotr = $_POST["first_name"] ;
$numerotr = $_POST["last_name"] ;

$trabajonumero = $numerotr.'_'.$trabajotr ;



	$statement = $connection->prepare (" INSERT INTO trabajos ( trabajo , numerotrabajo , trabajoview )
			VALUES (:first_name , :last_name , '$trabajonumero' )
		");


				$result = $statement->execute(
					array(
						':first_name'	=>	$_POST["first_name"],
						':last_name'	=>	$_POST["last_name"],


					)

				);

		if(!empty($result))
		{
			//echo $_POST["first_name"] ;
			echo 'TRABAJO INGRESADO:'.$trabajonumero;
		}


}

?>
