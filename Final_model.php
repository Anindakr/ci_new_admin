<?php
class Final_model extends CI_Model
{
	function saverecords($name,$email,$phone,$dob,$pass,$education,$gender,$language,$folder)
	{
		$sql="INSERT INTO `ci_final`(`uid`, `name`, `email`, `phone`, `dob`, `password`, `education`, `gender`, `language`, `picsource`) VALUES ('','$name','$email','$phone','$dob','$pass','$education','$gender','$language','$folder')";
		if($this->db->query($sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function displayrecords()
	{
		$sql=$this->db->query("SELECT * FROM ci_final");
		return $sql->result();
	}
	function deleterecords($id)
	{
		$sql="DELETE FROM `ci_final` WHERE uid=$id";
		if($this->db->query($sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function updaterecodrsbyid($id)
	{
		$query=$this->db->query("SELECT * FROM ci_final WHERE uid='$id'");
		return $query->result();
	}
	function updaterecords($name,$email,$phone,$dob,$education,$gender,$language,$folder,$id)
	{
		$sql="UPDATE `ci_final` SET `name`='$name',`email`='$email',`phone`='$phone',`dob`='$dob',`education`='$education',`gender`='$gender',`language`='$language',`picsource`='$folder' WHERE uid='$id'";
		if($this->db->query($sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function loginrecords($email,$pass)
	{
		// echo $email,$pass;
		$query=$this->db->query("SELECT * FROM `ci_final` WHERE `email`='$email'AND `password`='$pass'");
		if($query->num_rows())
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>