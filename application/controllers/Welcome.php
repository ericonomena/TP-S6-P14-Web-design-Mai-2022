<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}	
	public function indexIA()
	{
		$this->load->view('indexIA');
	}	
	public function insertContenu()
	{
		$this->load->view('insertContenu');
	}	
	public function about()
	{
		$this->load->view('about');
	}	
	public function faqs()
	{
		$this->load->view('faqs');
	}	
	public function loginClient()
	{
		$this->load->view('loginClient');
	}	
	public function loginAdmin()
	{
		$this->load->view('loginAdmin');
	}	


	public function authentification()
	{
		$this->load->view('login');
	}	


	public function insertUser()
	{
		$data = array('idusers' => '5','nom' => 'John','prenom' => 'Doe','email' => 'john@example.com','dtn' => date('Y-m-d H:i:s'),'password' => 'root');
		$this->load->model('User_model');
		$this->db->insert('users', $data);
		echo 'miditra le izy';
	}	

	public function listeUser()
	{
		$this->load->model('User_model');
		$data['resultat'] = $this->User_model->get_users();
        $this->load->view('listeUser', $data);
	}	


	public function deleteUser($id)
	{
		$this->load->model('User_model');
		// $this->User_model->delete_user($id);
		$this->load->library('session');
		$data = array('alert' => 'Attention : suppression en cours de développement !');
		$this->session->set_flashdata($data);
		$this->listeUser();
	}	


	public function inscription()
	{
		$this->load->view('register');
	}
	public function historyback()
	{
		$this->load->view('profile2');
	}
	
	
	public function registration()
	{
		$this->load->view('registration');
	}	

	public function home()
	{
		$this->load->view('profile');
	}	

	 public function loginUsers()
    {
    	try {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('User_model');
		$result = $this->User_model->verif($email,$password);
		if($result!='false'){
			redirect(site_url('Contenu_controller/ajoutcontenu'));
		}else{
			throw new Exception('Erreur d authentification!');
		}
        } catch (Exception $e) {
			$data['error_message'] = $e->getMessage();
			$this->load->view('loginAdmin', $data);       
        }
    }

	// throw new Exception('Utilisateur ou mots de passe incorrecte!');
	// $e->getMessage();   
    // echo 'Error: ' . $e->getMessage();
	// redirect(site_url('Admin_Controller/Page_insertion_erreur/' . $IdEmploie . '/' . $e->getMessage()));
	// $email = isset($_POST['email']) ? $_POST['email'] : '';
    // $password = isset($_POST['password']) ? $_POST['password'] : '';
	// echo 'email: '.$email;
	// echo 'password: '.$password; 
	// throw new Exception('test throw exception !');
    // redirect(site_url('Welcome/home'));


     public function insertregister()
    {
    	try {
        $dtn = isset($_POST['dtn']) ? $_POST['dtn'] : '';
        $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
        $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $this->load->model('user');
        $this->user->insert($nom,$prenom,$email,$dtn,$password);
         throw new Exception('insertion effectuer');
        } catch (Exception $e) {
            $e->getMessage();
             echo  $e->getMessage();
        }
    }

	public function get_info()
	{
		$this->load->model('dbconnect');
		$data = array();
		$data['user_info']=$this->dbconnect->get_info();
		$this->load->view('vue',$data);
	}
	public function get_client()
	{
		$this->load->model('dbconnect');
		$data = array();
		$data['user_info']=$this->dbconnect->get_client();
		$this->load->view('vue',$data);
	}
	public function get_detail_client($id)
	{
		$this->load->model('dbconnect');
		$data = array();
		$data['user_info']=$this->dbconnect->get_detail_client($id);
		$this->load->view('fiche',$data);
	}
    public function recherche($val)
	{
		$this->load->model('dbconnect');
		$data = array();
		$data['user_info']=$this->dbconnect->recherche($val);
		$this->load->view('recherche',$data);	
	}
	public function int()
	{
		$this->load->model('dbconnect');
		$data['int']=$this->dbconnect->int();
		$this->load->view('vue',$data);
		
	}
	public function verif(){
		$this->load->model('dbconnect');
		$this->dbconnect->verif();
	}

}

