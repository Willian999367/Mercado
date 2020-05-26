<?php 

class Sql {

		public $conn;
		public $dbconn; 

		public function __construct(){
			$host = "localhost";
			$port = "5432";
			$dbname = "Teste";
			$user = "postgres";
			$password = "root";
			$pg_options = "--client_encoding=UTF8";					
			$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
			return $this->dbconn = pg_connect($connection_string);
		}
		
		public function query($string_query){
		return pg_query($this->dbconn, $string_query);
		}	




	} 	

?>