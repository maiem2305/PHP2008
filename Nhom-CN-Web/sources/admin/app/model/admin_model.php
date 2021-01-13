<?php 
	namespace App\Model;
	require 'app/libs/PDODriver.php';
	use App\Libs\PDODriver;
	use \PDO;
	/**
	*
	*/
	class Admin_model extends PDODriver
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getAdminByKeyword($keyword ='',$start,$limit)
		{
			$data= [];
			$key = "%".$keyword."%";
			$sql = "SELECT f.* 
                   FROM admins as f 
                   WHERE f.username LIKE :keyword
                   ORDER BY f.create_time DESC
				   LIMIT :start,:limmit
				 ";
			$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindParam(':keyword',$key,PDO::PARAM_STR);
				$stmt->bindParam(':start',$start,PDO::PARAM_INT);
				$stmt->bindParam(':limmit',$limit,PDO::PARAM_INT);

				if ($stmt->execute()) {
					if ($stmt->rowCount()>0) {
						$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();

			}
			return $data;
		}

		public function getAllAdminByKeyword($keyword = '')
		{
			$data = [];
			$key = "%".$keyword."%";
			$sql = "SELECT f.* 
                   FROM admins as f 
                   WHERE f.username LIKE :keyword 
				   ORDER BY f.create_time DESC
				 ";
			$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindParam(':keyword',$key,PDO::PARAM_STR);

				if ($stmt->execute()) {
					if ($stmt->rowCount()>0) {
						$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();

			}
			return $data;
		}
		function myValidateAddAdmin($username,$password,$email,$phone,$fullname,$address,$status,$note)
		{
			$error 			   = [];
			$error['username'] = (!empty($username) ? '' :'Enter name Username');
			$error['password']   = (!empty($password) ? '':'Enter name Password');
			$error['email']= (!empty($email) ? '':'Enter name Email');
			$error['fullname']      = (!empty($fullname) ? '':'Enter name Fullname');
			$error['phone']   = (!empty($phone) ? '':'Enter detail Phone');
			$error['address']    = (!empty($address) ? '':'Enter address');
			$error['status']    = (is_numeric($status)) ? '':'Enter Status Admin';
			$error['note']    = (!empty($note) ? '':'Enter Status Note');
			//$error['fileName'] = ($fileName=='') ? "Enter Images" : '';
			//echo "<pre/>";print_r($error);die();
			return $error;
		}
		 public function getDataAdminById($table,$id)
		{
			//print_r($this->findDatabyId("comics",7));die();
			return $this->findDatabyId($table,$id);
		}
		public function addDataAdmin($data,$table)
		{
			//print_r($data);
			return $this->insert($table,$data);
		}
		public function updateDataAdmin($data,$table,$nameId)
		{
			//echo "<pre/>";print_r($data);die();
			return $this->update($table, $data, $nameId);
		}
		 public function deleteAdmin($table,$id)
		 {
		  return $this->delete($table,$id);
		 }

	}

?>