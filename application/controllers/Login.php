<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once getcwd() ."/application/libraries/securimage/securimage.php";

class Login extends Public_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('admin');
	}

	public function index(){
		$this->load->library('user_agent');
		//if(preg_match("/i54tech Ind0n3si@/i", $this->agent->agent_string())){
			// for load and save to session template variable
			admin_template();
			if(login_check()){
				redirect(base_url_admin().'dashboard');
			}
			
			$data = array();
			$data['title'] 		= 'Login';
			$this->load->view($this->session->userdata('template_login'), $data);
		//}else{
		//	$this->load->view('errors/cli/error_access');
		//}
	}

	public function tes_genpass(){
		echo genpass("admin");
		exit;
		
	}
	public function signin(){
		$data = $this->input->post();
		$this->load->model('User_model', 'user');
		$this->user->select('user.*, group.name as group_name');
		$this->user->join('group');
		$user = $this->user->get_by(array('username' => $data['username']));
		// check user exist
		if($user != NULL){
			// check captcha
			$captcha = true;

			if($this->session->login_attempt > 1){
				$securimage = new securimage;
				$captcha = $securimage->check($this->input->post('captcha_code'));
			}

			if($captcha == true){
				if($user['password'] === genpass($data['password'])){
					$this->session->set_userdata('user_login', true);
					// user information
					foreach ($user as $field => $value) {
						if($field != 'password' && $field != 'create_date' && $field != 'create_by' && $field != 'update_date' && $field != 'update_by'){
							$this->session->set_userdata($field, $value);
						}
					}
					set_menu($user['group_id']);
					$this->session->set_userdata('login_attempt', 0);
					$this->user->update($user['id'], array('last_login' => date('Y-m-d H:i:s')));
					redirect(base_url_admin().'dashboard');
				}else{
					$this->session->set_flashdata('notif_status', false);
					$this->session->set_flashdata('notif_msg', 'User & password missmatch');
					$this->session->set_userdata('login_attempt', $this->session->userdata('login_attempt') + 1);
				}
			}else{
				$this->session->set_flashdata('notif_status', false);
				$this->session->set_flashdata('notif_msg', 'Captcha incorrect');
				$this->session->set_userdata('login_attempt', $this->session->userdata('login_attempt') + 1);
			}
		}else{
			$this->session->set_flashdata('notif_status', false);
			$this->session->set_flashdata('notif_msg', 'User not registered');
			$this->session->set_userdata('login_attempt', $this->session->userdata('login_attempt') + 1);
		}
		redirect(base_url_admin().'login');
	}

	public function signout(){
		$this->session->set_userdata('user_login', false);
		$this->session->sess_destroy();
		$this->db->close();
		
		$this->session->set_flashdata('notif_status', true);
		$this->session->set_flashdata('notif_msg', "You're logout now.");
		redirect(base_url_admin().'login');
	}

	public function gen_captcha(){
		$img = new securimage;
		$img->text_color  = new Securimage_Color("#000000");
		$img->image_width = 160;
		$img->image_height = 80;
		$img->font_ratio = 0.35;
		return $img->show();
	}
}
