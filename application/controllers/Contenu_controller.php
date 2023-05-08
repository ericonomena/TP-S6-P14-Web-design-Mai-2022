<?php
require_once(APPPATH . 'controllers/ORM_Controller.php');
defined('BASEPATH') OR exit('No direct script access allowed');
class Contenu_controller extends ORM_Controller {

	public function ajoutcontenu()
	{
		$data['listetype'] = parent::get_all('type');
		$this->load->view('insertContenu',$data);
	}	


	public function detail($slug)
	{
		$split = explode("-", $slug);
		$id = $split[count($split)-1];
		$data['resultat'] = parent::get_byId($id,'contenu');
		$this->load->view('detail',$data);
	}	

    public function insertContenu()
	{
		try{
        $data['introduction'] = $this->input->post('introduction');
		$data['titre'] = $this->input->post('titre');
		$title = $this->input->post('titre');
		$data['explication'] = $this->input->post('explication');
		$data['conclusion'] = $this->input->post('conclusion');
		$data['slug'] = $this->input->post('slug');
		$data['idtype'] = $this->input->post('idtype');
		$data['article'] = $this->input->post('article');
		// $data['date'] = $this->input->post('date');

		$data['slug'] = url_title($title, '-', true);
		$image_data = $this->input->post('file');
		if ($_FILES && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
			$image_data = file_get_contents($_FILES['file']['tmp_name']);
			$base64_image = base64_encode($image_data);
			$data['image'] = 'data:image/png;base64,' . $base64_image;
		  }	
	$this->db->insert('contenu', $data);
	} catch (Exception $e) {
		// TODO: handle exception
		$e->printStackTrace();
	}
    $this->ajoutcontenu();
        
	}	
    public function listecontenu()
	{
        $data['number_column'] = parent::number_column('contenu');
		$data['column_name'] = parent::column_name('contenu');
		$data['resultat'] = parent::get_all('contenu');
        $this->load->view('listeContenu', $data);
	}	

	public function contenus($slug)
	{
		$split = explode("-", $slug);
		$id = $split[count($split)-1];
		$data['resultat'] = parent::get_byIdType($id,'contenu');
		$this->load->view('listeContenu', $data);
	}	

	public function listetype()
	{
        $data['number_column'] = parent::number_column('type');
		$data['column_name'] = parent::column_name('type');
		$data['resultat'] = parent::get_all('type');
        $this->load->view('listeType', $data);
	}	

	public function indexIA()
	{
		$data['number_column'] = parent::number_column('type');
		$data['column_name'] = parent::column_name('type');
		$data['resultat'] = parent::get_all('type');	
		$this->load->view('indexIA',$data);
	}	

	

}








    