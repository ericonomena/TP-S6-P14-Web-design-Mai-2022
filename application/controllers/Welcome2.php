<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome2 extends CI_Controller {

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
		$this->load->view('welcome_message');
	}	
	public function test()
	{
		$this->load->view('test_message');	
	}
	public function manger($plat = '',$boisson ='')
	{
		echo 'voici le menu:</br>';
		echo $plat.'</br>';
		echo $boisson.'</br>';
		echo 'bon appetit';
	}
	public function bonjour($pseudo ='')
	{
		echo 'salut a toi:'.$pseudo.'<br/>';
		echo 'variable id:'.$this->input->get('id');
	}
	public function accueil()
	{
		$data=array();
		$data['pseudo']='anjara';
		$data['email']='mofogasy70@gmail.com';
		$data['en_ligne']=true;
		$this->load->view('vue',$data);
	}
	public function about()
	{
	// définition des données variables du template
	$data['title'] = 'Le titre de la page';
	$data['description'] = 'La description de la page pour les moteurs de recherche';
	$data['keywords'] = 'les, mots, clés, de, la, page';
	// on charge la view qui contient le corps de la page
	$data['contents'] = 'page_contenu_view';
	// on charge la page dans le template
	$this->load->view('templates/template', $data);
	}
}
