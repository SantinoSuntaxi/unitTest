<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=pos",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}

class ConexionLecciones{

    static public function conectarLecciones(){

        $link = new PDO("mysql:host=localhost;dbname=crudemo",
            "root",
            "");

        $link->exec("set names utf8");

        return $link;

    }

}