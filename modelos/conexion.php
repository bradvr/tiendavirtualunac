<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=bnluin93in23qh8qqu8o",
						"umxuyzzpkgksvqil",
						"Dq9tfTzMS4pLVoyq378Q",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}



