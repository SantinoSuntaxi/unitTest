<?php
include('db.php');
include('function.php');
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM users
		WHERE id = '".$_POST["user_id"]."'
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["first_name"] = $row["first_name"];
		$output["last_name"] = $row["last_name"];
		$output["trabajo"] = $row["trabajo"];
		$output["trabajo_c"] = $row["trabajo_c"];
		$output["responsable"] = $row["responsable"];
		$output["gestiones"] = $row["gestiones"];
	    $output["observacion"] = $row["observacion"];
		$output["fecha_fin"] = $row["fecha_fin"];
		$output["id"] = $row["id"];
		if($row["image"] != '')
		{
			$output['user_image'] = '<img src="vistas/modulos/upload/'.$row["image"].'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_user_image" value="'.$row["image"].'" />';
		}
		else
		{
			$output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
		}
	}
	echo json_encode($output);
	$statement = $connection->prepare("UPDATE users SET  numerovisitas = numerovisitas+1 , fecha_tentativa = now() WHERE id = '".$_POST["user_id"]."'");
	$statement->execute();
}
?>
