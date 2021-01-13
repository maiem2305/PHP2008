<?php 
	namespace App\Model;
	require 'application/libs/PDODriver.php';
	use Application\Libs\PDODriver;
	use \PDO;
	class Fav_Model extends PDODriver
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getAllDataComicById($id)
		{
			$data = [];
			$sql  = "SELECT a.* , b.name_author ,c.name FROM comics as a INNER JOIN author as b on a.id_author=b.id inner join editor as c on a.id_editor=c.id WHERE  a.id=:id";
			$stmt = $this->db->prepare($sql);
			if ($stmt){
				$stmt->bindPaRam(':id',$id,PDO::PARAM_INT);
				if ($stmt->execute()) 
				{
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetch(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
			// echo "<pre/>";print_r($data);die();
			return $data;
		}

	}
?>