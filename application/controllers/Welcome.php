<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function welcome_page()
	{
		$data=array();
		$data['navbar']=$this->load->view('navbar','',true);
		$this->load->view('welcome_page',$data);
	}
	public function home(){


		if($this->session->userdata('user_state')){


			$this->load->model('usermodel/usermodel');

			
			$id=$this->usermodel->getUserId($this->session->userdata('useremail'),$this->session->userdata('password'))->id;	
			$serviceList=$this->usermodel->get_serviceList($id)->result();
			$i=0;
			$row=array();
			if($serviceList!=null){

				foreach ($serviceList as $value) {

				

					$service_info=(array)$value;
					$touristplace_info=$this->usermodel->get_AllData($value->area_id,'touristplace')->row();
					$officers_info=$this->usermodel->get_AllData($value->officer_id,'officer_table')->row();
				
					$service_info['area_name']=$touristplace_info->name;
					$service_info['officer_name']=$officers_info->name;	
					$service_info['phone_number']=$officers_info->phone;
					$row[$i++]=$service_info;
				
				}
			}
			$data['service_info']=$row;
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->view('home',$data);

		}
		else{

			redirect('usersignup');
		}


	}
	public function touristplace(){
		$data=array();
		$data['navbar']=$this->load->view('navbar','',true);
		$this->load->view('touristplace',$data);
	}
	public function adminsignup(){

			$data=array();
			$data['navbar']=$this->load->view('navbar','',true);
			$this->load->view('adminviews/adminSignup',$data);
	}

	public function cancelService($id)
	{

		$this->load->model('usermodel/usermodel');

		if($this->usermodel->cancelService($id)){

			$this->session->set_flashdata('result','Servce Cancelled Successfully');
			redirect('home');
		}
	}
}
