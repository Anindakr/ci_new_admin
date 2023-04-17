<?php
class Myfinalcontroller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("Final_model");
	}
	function savedata()
	{
		$this->load->view("form");
		if($this->input->post("submit"))
		{
			$name=$this->input->post("name");
			$email=$this->input->post("email");
			$phone=$this->input->post("phone");
			$dob=$this->input->post("dob");
			$pass= md5($this->input->post("password"));
			$education=$this->input->post("education");
			$gender=$this->input->post("gender");
			$language=implode(",",$this->input->post("language"));
			$filename= $_FILES["uploadimage"]["name"];
			$tempname= $_FILES["uploadimage"]["tmp_name"];
			$folder= "image/".$filename;
			move_uploaded_file($tempname, $folder);
			// echo $name,$email,$phone,$pass,$education,$gender,$language,$folder;
			// die();
			if($this->Final_model->saverecords($name,$email,$phone,$dob,$pass,$education,$gender,$language,$folder))
			{
				// echo "inserted";
				redirect("Myfinalcontroller/logindata");
			}
			else
			{
				echo "not inserted";
			}
		}		
	}
	function dispdata()
	{
		$result["data"]=$this->Final_model->displayrecords();
		// print_r($result);
		$this->load->view("display",$result);
	}
	function deletedata()
	{
		$id=$this->input->get("del");
		// echo $id;
		// die();
		if($this->Final_model->deleterecords($id))
		{
			// echo "Deleted";
			redirect("Myfinalcontroller/dispdata");
		}
		else
		{
			echo "Not Deleted";
		}
	}
	function editdata()
	{
		$id=$this->input->get("ep");
		// echo $id;
		$result["data"]=$this->Final_model->updaterecodrsbyid($id);
		// print_r($result);
		$this->load->view("edit",$result);
		if($this->input->post("submit"))
		{
			$name=$this->input->post("name");
			$email=$this->input->post("email");
			$phone=$this->input->post("phone");
			$dob=$this->input->post("dob");
			$education=$this->input->post("education");
			$gender=$this->input->post("gender");
			$language=implode(",",$this->input->post("language"));
			$filename= $_FILES["uploadimage"]["name"];
			$tempname= $_FILES["uploadimage"]["tmp_name"];
			$folder= "image/".$filename;
			move_uploaded_file($tempname, $folder);
			// echo $name,$email,$phone,$education,$gender,$folder;
			// die();
			if($this->Final_model->updaterecords($name,$email,$phone,$dob,$education,$gender,$language,$folder,$id))
			{
				// echo "Updated";
				redirect("Myfinalcontroller/logindata");
			}
			else
			{
				echo "Not Updated";
			}
		}
	}
	function logindata()
	{
		$this->load->view("login");
		if($this->input->post("submit"))
		{
			$email=$this->input->post("email");
			$pass=md5($this->input->post("password"));
			// echo $email,$pass;
			// die();
			if($this->Final_model->loginrecords($email,$pass))
			{
				// echo "login";
				redirect("Myfinalcontroller/dispdata");
			}
			else
			{
				echo "Not login";
			}
		}
	}
}
?>