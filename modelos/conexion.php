<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=db;dbname=pos",
			            "root",
			            "test");

		$link->exec("set names utf8");

		return $link;

	}

}

class ConexionLecciones{

    static public function conectarLecciones(){

        $link = new PDO("mysql:host=db;dbname=crudemo",
            "root",
            "test");

        $link->exec("set names utf8");

        return $link;

    }

}