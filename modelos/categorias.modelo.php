<?php

require_once "conexion.php";

class ModeloCategorias{

	/*=============================================
	CREAR CATEGORIA
	=============================================*/

	static public function mdlIngresarCategoria($tabla, $datos , $datosIdentificador ){

        $trabajoView = $datosIdentificador.'_'.$datos;

		$stmt = ConexionLecciones::conectarLecciones()->prepare("INSERT INTO $tabla(trabajo , numerotrabajo , trabajoview ) 
                                                                VALUES (:categoria , :categoriaIdentificador , '$trabajoView'  )  ");

		$stmt->bindParam(":categoria", $datos, PDO::PARAM_STR);
        $stmt->bindParam(":categoriaIdentificador", $datosIdentificador, PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR CATEGORIAS
	=============================================*/

	static public function mdlMostrarCategorias($tabla, $item, $valor){

		if($item != null){

			$stmt = ConexionLecciones::conectarLecciones()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = ConexionLecciones::conectarLecciones()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	EDITAR CATEGORIA
	=============================================*/

	static public function mdlEditarCategoria($tabla, $datos){


		$stmt = ConexionLecciones::conectarLecciones()->prepare("UPDATE $tabla SET trabajo = :trabajo  WHERE idt = :idt");

		$stmt -> bindParam(":trabajo", $datos["trabajo"], PDO::PARAM_STR);
		$stmt -> bindParam(":idt", $datos["idt"], PDO::PARAM_INT);

        if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	BORRAR CATEGORIA
	=============================================*/

	static public function mdlBorrarCategoria($tabla, $datos){

		$stmt = ConexionLecciones::conectarLecciones()->prepare("DELETE FROM $tabla WHERE idt = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

}

