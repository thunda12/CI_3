<?php 
class Pages extends CI_Controller {

    public function index()
	{
		$this->load->view('welcome_message');
	}

    public function view($page = 'home')
    {
        // if(!is_file(APPPATH . 'view/pages/' . $page . '.php')){
        //     print_r(APPPATH . 'view/pages/' . $page . '.php');
        //     show_404();
        // }

        $data['title'] = ucfirst($page);
        // print_r(APPPATH . 'view/pages/' . $page . '.php');
        $this->load->view('templates/header',$data);
        $this->load->view('pages/'.$page);
        $this->load->view('templates/footer');

        // $this->load->view('test101');
    }
}