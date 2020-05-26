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




		public function select($string_query){

		$result = $this->query($string_query);

		$data = array();

	    while ($row = pg_fetch_array($result)) {
	        
	    	foreach ($row as $key => $value) {
	    		$row[$key] = utf8_encode($value);
	    	}

	        array_push($data, $row);

	    }

	    unset($result);

	    return $data;

	}



	} 	

?>