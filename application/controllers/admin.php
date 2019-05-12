<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class admin extends CI_Controller {


	public function admin_signin(){

		if(isset($_POST['submit'])){

			$this->load->model('adminModel/adminmodel');

			if($this->adminmodel->admin_signin($_POST['email'],md5($_POST['password']))>0)
			{
				$this->session->set_userdata('admin','1');
				$this->session->set_userdata('admin_email',$_POST['email']);
				$this->session->set_userdata('admin_password',$_POST['password']);
				redirect('adminpanel');
			}
			else{

				$this->session->set_flashdata("result","Invalid username or password");
				redirect('adminsignup');
			}
		}
	}
	public function admin_logout(){

		$this->session->set_userdata('admin','0');
		//$this->session->set_userdata('admin','0');
		redirect('adminsignup');

	}
	protected function clearCache(){
	    $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
	    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
	    $this->output->set_header('Pragma: no-cache');
	    $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	}
	public function adminSignUp(){

		
		if(!$this->session->userdata('admin')){


				if(isset($_POST['submit'])){
					$this->form_validation->set_rules('username','Username','required');
					$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user_table.email]',
                       array('is_unique' => 'The email address %s provided already exists. Please signup.'));
					$this->form_validation->set_rules('password','Password','required|min_length[5]');
					$this->form_validation->set_rules('phone','Phone','required');
					$this->form_validation->set_rules('type','Usertype','required');

					if($this->form_validation->run()==TRUE){

						

						$this->load->model('adminModel/adminmodel');

						$name=$_POST['username'];
						$email=$_POST['email'];
						$password=$_POST['password'];
						$phone=$_POST['phone'];
						$type=$_POST['type'];

						$this->load->model('adminModel/adminmodel');

						if($this->adminmodel->signup($name,$email,$password,$phone,$type)){

							$this->session->set_userdata('admin','1');
							$this->session->set_userdata('admin_email',$email);
							$this->session->set_userdata('admin_password',$password);
							redirect('adminpanel');
						}
					}
					else{

						
					}
				}
				else{

						$data=array();
						$data['navbar']=$this->load->view('navbar','',true);
						$this->load->view('adminviews/adminSignup',$data);
				}
				
					
		}
		else{

			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->view('adminviews/adminpanel',$data);
		}
	}

	public function manageuser(){

		
		if($this->session->userdata('admin')==1){

			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->model('adminModel/adminmodel');
			$query=$this->adminmodel->getAllUserData();
			$data['userdata']=$query->result();
			$this->load->view('adminviews/manageuser',$data);
		}
		else{
			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->view('adminviews/adminSignup',$data);
			
		}
	}

	public function delete($id){
 

			if(isset($id)){

				$this->load->model('adminModel/adminmodel');
				$result=$this->adminmodel->delete($id);

				if($result){

					$this->session->set_flashdata('successs','User deleted successfully');
				}
				else{

					$this->session->set_flashdata("successs","Fail to delete user");
				}

				redirect('manageuser');
			}
			
		
	}

	public function touristplace(){

		if($this->session->userdata('admin')==1){

			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->model('adminModel/adminmodel');
			$query=$this->adminmodel->getAllTouristPlace();
			$data['placeinfo']=$query->result();
			$this->load->view('adminviews/touristplace',$data);
		}
		else{
			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->view('adminviews/adminSignup',$data);
			
		}
	}

	public function addplace(){

		if($this->session->userdata('admin')==1){

			if(isset($_POST['submit'])){

				$type=explode('.',$_FILES["pic"]["name"]);
    			$type=$type[count($type)-1];
    			$url="./assets/upload/".uniqid(rand()).'.'.$type;

    			$error=array();
    			if($type){

	    			if(in_array($type,array("jpg","png","gif","jpeg"))){
	    				if(is_uploaded_file($_FILES["pic"]["tmp_name"])){

							move_uploaded_file($_FILES["pic"]["tmp_name"],$url);

	    					$name=$_POST['placename'];
	    					$description=$_POST['description'];
	    					$location=$_POST['location'];
	    					$path=$url;
		    				$this->load->model('adminModel/adminmodel');

		    				if($this->adminmodel->addPlace($name,$description,$location,$path)){

								

		    					redirect('touristplace');
								/*$error['error']="New Tourist Place Added successfully";
								$this->load->view('adminviews/addplace',$error);*/
		    				}

		    				
	    				}
	    				else{

	    					
							$error['error']="fail to upload image";
							$this->load->view('adminviews/addplace',$error);

	    				}

	    			}
	    			else{
	    				
	    				$error['error']="Error in format or You didn't select any file.You can upload only .jpg, .png, .jpeg, .gif file";
	    				$this->load->view('adminviews/addplace',$error);
	    			}
	    		}
	    		else{

					$error['error']="You didn't select any image.";
	    			$this->load->view('adminviews/addplace',$error);
	    		}
			}
			else{

				$error['error']=null;
				$this->load->view('adminviews/addplace',$error);
			}
	    		
			
			
		}
		else{

			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->view('adminviews/adminSignup',$data);
			
		}

	}

	public function deploy(){

		if($this->session->userdata('admin')==1){
			
			$data=array();
			$this->load->model('adminModel/adminmodel');
			$query=$this->adminmodel->getAllDeployedData();
			$data['deployinfo']=$query->result();
			$this->load->view('adminviews/deploy',$data);
		}
		else{

			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->view('adminviews/adminSignup',$data);
		}
	}

	public function newdeploy(){

		if($this->session->userdata('admin')==1){
			$error['error']=null;
			$error['type']="add";
			$this->load->view('adminviews/newdeploy',$error);

		}else{


			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->view('adminviews/adminSignup',$data);
		}
	}

	public function add_deploy(){

		
			if(isset($_POST['submit'])){

				$district=$_POST["district"];
				$areaname=$_POST["areaname"];
				$officer_name=$_POST["officer_name"];
				$routename=$_POST["routename"];
				$phone=$_POST["phone"];
				$type=$_POST["type"];
				

				$this->load->model('adminModel/adminmodel');
				
				echo $type;
				if($type=='edit'){
					$id=$_POST["id"];
					echo $id."dddd";
					if($this->adminmodel->editDeploy($district,$areaname,$officer_name,$routename,$phone,$id)){

						redirect('deploy');
					}
				}
				else{

					if($this->adminmodel->addNewDeploy($district,$areaname,$officer_name,$routename,$phone)){

						/*$data=array();
						$query=$this->adminmodel->getAllDeployedData();
						$data['deployinfo']=$query->result();
						$data['error']="successfully Added New Duty";
						$this->load->view('adminviews/deploy',$data);*/
						redirect('deploy');
						
					}
				}
				



			}
		
	}
	public function edit_deploy($id){


		$this->load->model('adminModel/adminmodel');
		$query=$this->adminmodel->getSingleDeployedData($id);
		$data=(array)$query->row();


		$data['type']="edit";
		$data['id']=$id;
		$this->load->view('adminviews/newdeploy',$data);

		/*$arr=(array) $data;
		print_r($arr);*/
	}

	public function delete_deploy($id){

		$this->load->model('adminModel/adminmodel');
		$query=$this->adminmodel->delete_deploy($id);
		if($query){

			redirect('deploy');
		}
	}

	public function view_blog(){

		$this->load->model('usermodel/usermodel');
		$data['blog_list']=$this->usermodel->getBlogList();
		$this->load->view('adminviews/blog',$data);
	}
	public function add_blog(){

		$this->load->model('usermodel/usermodel');
		$this->load->model('adminModel/adminmodel');
		$data['title']=$_POST['title'];
		$data['body']=$_POST['body'];
		$data['writer_type']="admin";

		$data['writer_id']=$this->adminmodel->get_adminId($this->session->userdata('admin_email'),$this->session->userdata('admin_password'))->id;
		
		$data['writer_name']=$this->adminmodel->get_adminId($this->session->userdata('admin_email'),$this->session->userdata('admin_password'))->name;

		
		date_default_timezone_set("Asia/Dhaka");
		$data['date']=date("Y-m-d");
		$data['time']=date("h:i a");
		
		if($this->usermodel->add_blog($data)){

			
			echo "Blog added successfully";
		}
		else{
			echo "Fail to add blog";
		}
	}

	public function view_FAQ(){

		$this->load->model('adminModel/adminmodel');
		$data['FAQ_list']=$this->adminmodel->getFAQList();
		$this->load->view('adminviews/FAQ',$data);
	}

	public function add_FAQ_answer(){

		$this->load->model('adminModel/adminmodel');
		$data['answer']=$_POST['answer'];
		$question_id=$_POST['question_id'];
		$data['answer_id']=$this->adminmodel->get_adminId($this->session->userdata('admin_email'),$this->session->userdata('admin_password'))->id;
		

		if($this->adminmodel->add_FAQ_answer($data,$question_id)){

			echo 'Answer added successfully';
		}
		else{

			echo 'Failed to added answer';
		}

	}


}
