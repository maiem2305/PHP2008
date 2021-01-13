<?php 	
	namespace App\Config;//dinh danh cho db
	use \PDO;//bao rang su dung PDO
	class Database//tao class db
	{
		
		function __construct()
		{
			$this->connection();//ham khoi tao tro den connect
		}
		function __destruct()//ham huy
		{
			$this->disconnection();//goi den ham xoa rong db
		}
		protected $db;
		protected function connection()
		{
			try {
				$this->db = new PDO("mysql:host='localhost';dbname='comic';charset=utf8","root","");//ham ket noi toi CSDL
			} catch (PDOException $e) {//goi den ham PDOEX
				print_r("Error: " .$e->getMessage()."<br />");//neu khong connect dc thi in loi
				die("can't connect to database");//die to connect db
			}	
			// echo "Kết nối thành công";
		}
		protected function disconnection()//ham ngat ket noi
		{
			$this->db =  null;
		}
	}
	$huy = new  database();//khoi tao db->test


?>