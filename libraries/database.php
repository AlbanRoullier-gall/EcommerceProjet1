<?php

class DatabaseConnection
{
	public ?PDO $database = null;

	public function getConnection(): PDO
	{
    	if ($this->database === null) {
        	$this->database = new PDO('mysql:host=localhost;dbname=4ipdw_sample;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    	}

    	return $this->database;
	}
}