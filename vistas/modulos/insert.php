<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}

// poner los valores a ingresar a la base

		$statement = $connection->prepare("
			INSERT INTO users (first_name, idtk, last_name, trabajo , trabajo_c , responsable , observacion , gestiones , image , fecha_ini, fecha_fin)
			VALUES (:first_name, 'AS', :last_name, :trabajo , 'no existe' , :responsable, :observacion , 0 ,  :image, now(), now() )
		");


//		$statement = $connection->prepare("
//			INSERT INTO users (first_name, idtk, last_name, trabajo , trabajo_c , responsable , observacion , gestiones , image , fecha_ini, fecha_fin)
//			VALUES (:first_name, 'AS', :last_name, :trabajo , :trabajo_c , :responsable, :observacion , :gestiones ,  :image, now(), now() )
//		");




//insertar en la base
// primera fila variables base de datos , variable es la que ingresa en la base
//tomar encuenta que no necesariamemnte se debe llamar igual que la variable de la base
// segunda fila post que viene del index

		$result = $statement->execute(
			array(
				':first_name'	=>	$_POST["first_name"],
				':last_name'	=>	$_POST["last_name"],
				':trabajo'	    =>	$_POST["tipo_trabajo"],
				//':trabajo_c'	=>	$_POST["tipo_falla"],
				':responsable'	=>	$_POST["responsable"],
				':observacion'	=>	$_POST["observacion"],
				//':gestiones'	=>	$_POST["gestiones"],
				':image'		=>	$image

			)

		);


		if(!empty($result))
		{





			header('Content-Type: text/html; charset=UTF-8');
			$conexion=mysql_connect("localhost","root","") or
			die("Problemas en la conexion");
			mysql_select_db("crudemo",$conexion) or
			die("Problemas en la selección de la base de datos");
			mysql_query ("SET NAMES 'utf8'");
			$clavebuscadah=mysql_query("SELECT MAX(id) AS id FROM users",$conexion) or
			die("Problemas en el select:".mysql_error());
			while($row = mysql_fetch_array($clavebuscadah))
			{

				$id = trim($row[0]);
				//echo $id ;
			 $sa = 'LEC';
			 $idsa = $sa.$id ;
			}


			$identificadorTipoTrabajo = $_POST["tipo_trabajo"];

			//$statementTrabajos = $connection->prepare("SELECT trabajoview , idt FROM trabajos  WHERE  idt= $identificadorTipoTrabajo");
			$statementTrabajos = $connection->prepare("SELECT trabajo FROM trabajos  WHERE  numerotrabajo = ? ");
			//Ejecutamos la consulta
			$statementTrabajos->execute([$identificadorTipoTrabajo]);
			if (!$statementTrabajos){
				echo "EROOR EN LA CONSULTA DEL TRABAJO ";
			}
			$vistaTrabajo = $statementTrabajos->fetch();




			header('Content-Type: text/html; charset=UTF-8');
			$conexion=mysql_connect("localhost","root","") or
			die("Problemas en la conexion");
			mysql_select_db("crudemo",$conexion) or
			die("Problemas en la selección de la base de datos");
			mysql_query ("SET NAMES 'utf8'");
			$clavebuscadah=mysql_query("UPDATE users SET idtk= '$idsa' , trabajo_t= '$vistaTrabajo[0]' WHERE id=$id  ",$conexion) or
			die("Problemas en el select:".mysql_error());


			echo 'LECCION INGRESADA:'.$idsa;
			//print_r ($vistaTrabajo[0]);


		}
	}
	if($_POST["operation"] == "Edit")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		else
		{
			$image = $_POST["hidden_user_image"];
		}



		$identificadorTipoTrabajoUpdate = $_POST["trabajo"];

		//$statementTrabajos = $connection->prepare("SELECT trabajoview , idt FROM trabajos  WHERE  idt= $identificadorTipoTrabajo");
		$statementTrabajosUpdate = $connection->prepare("SELECT trabajo FROM trabajos  WHERE  numerotrabajo = ? ");
		//Ejecutamos la consulta
		$statementTrabajosUpdate->execute([$identificadorTipoTrabajoUpdate]);
		if (!$statementTrabajosUpdate){
			echo "EROOR EN LA CONSULTA DEL TRABAJO ";
		}
		$vistaTrabajoUpdate = $statementTrabajosUpdate->fetch();




		$statement = $connection->prepare(
			"UPDATE users
			SET first_name = :first_name, last_name = :last_name, trabajo  = :trabajo , trabajo_t  = :trabajo_T , responsable  = :responsable ,  gestiones  = 0 , observacion  = :observacion ,image = :image, fecha_fin = now()
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':first_name'	=>	$_POST["first_name"],
				':last_name'	=>	$_POST["last_name"],
				':trabajo'	    =>	$_POST["trabajo"],
				':trabajo_T'	=>	$vistaTrabajoUpdate[0],
				':responsable'	=>	$_POST["responsable"],
				//':gestiones'	=>	$_POST["gestiones"],
				':observacion'	=>	$_POST["observacion"],
				':image'		=>	$image,
				':id'			=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'LECCION ACTUALIZADA';
			//echo $identificadorTipoTrabajoUpdate;
			//echo $vistaTrabajoUpdate[0];
		}
	}
}

?>
