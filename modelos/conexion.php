<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=bhjvavlb25hvzeh8zd6y-mysql.services.clever-cloud.com;dbname=bhjvavlb25hvzeh8zd6y",
						"uztri5oygjrd8twk",
						"gQDg9jMBBBgp7aZJnJA7",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}



