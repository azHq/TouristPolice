<?php
class usermodel extends CI_Model{

	 public function signup($name,$email,$password,$phone){

	 	$data['name']=$name;
	 	$data['email']=$email;
	 	$data['password']=md5($password);
	 	$data['phone_number']=$phone;

		return $this->db->insert('user_table',$data);
	}

	public function search_places($location){

			$this->db->where('location',$location);

			return $this->db->get('touristplace')->result();
	}
	public function search_officers($location){ 

		$this->db->select('name');
		$this->db->select('id');
		$this->db->from('officer_table');
		$this->db->where('location',$location);

		return $this->db->get()->result();

	}

	public function getOfficersData($location){

		$this->db->select('name');
		$this->db->select('id');
		$this->db->from('officer_table');
		$this->db->where('location',$location);

		return $this->db->get()->result();
	}

	public function getUserId($email,$password){


		$this->db->where('email',$email);
		$this->db->where('password',md5($password));
		$this->db->select('id');
		$this->db->select('name');
		$this->db->from('user_table');

		
		return $this->db->get()->row();
	}

	public function add_service($data){

		return $this->db->insert('security_booking_tb',$data);
	}
	public function get_serviceList($id){

		$this->db->where('user_id',$id);
		return $this->db->get('security_booking_tb');
	}

	public function cancelService($id){

		$this->db->where('booking_id',$id);

		return $this->db->delete('security_booking_tb');
	}

	public function get_AllData($id,$table_name){

		$this->db->where('id',$id);

		return $this->db->get($table_name);
	}

	public function user_logIn($email,$password){

		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$count=count($this->db->get('user_table')->result());
		
		return $count;
	}

	public function addReview($user_id,$comment,$rating,$place_id){

		$data['place_id']=$place_id;
		$data['user_id']=$user_id;
		$data['comment']=$comment;
		$data['rating']=$rating;
		return $this->db->insert('security_review_table',$data);
	}

	public function averageRating($id){
		$this->db->where('place_id',$id);
		$query = $this->db->select('AVG(rating) as average_rating')->from('security_review_table')->get();
		return $query->row()->average_rating;
	}

	public function getTransportList(){


		return $this->db->get('transport_table')->result();
	}

	public function add_blog($data){


		return $this->db->insert('blog_table',$data);
	}
	public function getBlogList(){

		return $this->db->get('blog_table')->result();
	}

	public function add_FAQ_answer($data){

		return $this->db->insert('faq_table',$data);
	}

}
?>