<?php 	
	namespace App\Config;
	use \PDO;
	class Database//Design file ket noi CSDL
	{
		
		function __construct()
		{
			$this->connection();
		}
		function __destruct()
		{
			$this->disconnection();
		}
		protected $db;
		protected function connection()
		{
			try {
				$this->db = new PDO("mysql:host='localhost';dbname='comic';charset=utf8","root","");
			} catch (PDOException $e) {
				print_r("Error: " .$e->getMessage()."<br />");
				die("can't connect to database");
			}	
			// echo "Kết nối thành công";
		}
		protected function disconnection()
		{
			$this->db =  null;
		}
	}
	$huy = new  database();


?>