<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_Officers_CI extends CI_Controller {

		public function manage_officers(){

			$this->load->model('adminModel/adminmodel');
			$data['userdata']=$this->adminmodel->getAllOfficersData();

			$this->load->view('adminviews/manage_officers',$data);
		}

		public function add_officer(){

			if(isset($_POST['submit'])){

					$name=$_POST['name'];
					$rank=$_POST['rank'];
					$location=$_POST['location'];
					$email=$_POST['email'];
					$number=$_POST['number'];

					$this->load->model('adminModel/adminmodel');
					
					if($this->adminmodel->add_officer($name,$rank,$location,$email,$number)){

						$this->session->set_flashdata('error',"Added Successfully");
						$this->load->view('adminviews/add_officer');

					}
					else{

						$this->session->set_flashdata('error',"Fail to add");
						$this->load->view('adminviews/add_officer');
					}


			}
			else{

				$this->load->view('adminviews/add_officer');
			}
			
		}

		public function terminate_officers(){

		}

		public function delete_officer($id){


			$this->load->model('adminmodel/adminmodel');
			
			if($this->adminmodel->delete_officer($id)){

				$this->session->set_flashdata('result',"Officer deleted Successfully");
				redirect('manage_officers');
			}
		}

		public function edit_profile(){

		}

}