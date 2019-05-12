<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Transport_Management extends CI_Controller {

	public function transport_view(){

		$this->load->model('transport_model/Transport_Model');
		$data['transport_list']=$this->Transport_Model->getTransportList();
		$this->load->view('transport_views/transport_view',$data);
	}

	public function add_transport(){

		if(isset($_POST['submit'])){

			$name=$_POST['name'];
			$location=$_POST['location'];
			$email=$_POST['email'];
			$phone=$_POST['number'];
			//$img_path=$_POST['pic'];

			$type=explode('.',$_FILES["pic"]["name"]);
    		$type=$type[count($type)-1];
    		$url="./assets/transport/".uniqid(rand()).'.'.$type;
			$error=array();
			
    		if($type){

	    		if(in_array($type,array("jpg","png","gif","jpeg"))){
	    			if(is_uploaded_file($_FILES["pic"]["tmp_name"])){
	    		
						move_uploaded_file($_FILES["pic"]["tmp_name"],$url);
						$img_path=$url;

						$data['name']=$name;
						$data['location']=$location;
						$data['email']=$email;
						$data['phone_number']=$phone;
						$data['img_path']=$img_path;

						$this->load->model('transport_model/Transport_Model');
						if($this->Transport_Model->add_transport($data)){

							
							$this->session->set_flashdata("result","Successfully added");
							redirect('Transport_Management/add_transport');
						}
						else{

							$this->session->set_flashdata("result","Failed to add new Transport");
							redirect('Transport_Management/add_transport');
						}

					}
				}
			}
			else{
				$this->session->set_flashdata("result","Failed1 to add new Transport");
				redirect('Transport_Management/add_transport');
				$url=null;
			}


			
			
		}
		else{

			$this->load->view('transport_views/add_transport');
		}

		
	}

	public function delete($id){

		$this->load->model('transport_model/Transport_Model');
		
		if($this->Transport_Model->delete($id)){

			$this->session->set_flashdata("result","Successfully Deleted");
			redirect('transport_management');
		}
		else{
			$this->session->set_flashdata("result","Fail to Delete");
			redirect('transport_management');
		}
	}

}

?>