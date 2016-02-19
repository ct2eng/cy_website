<?php 
class Main_page extends CI_Controller {
	function __construct() {
		parent::__construct();

		// Load url helper
		$this->load->helper('url');
	}

	// 首頁(cheng yao)
	public function index()
	{

		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');

	}

	// 關於我們(about us)
	public function about_us()
	{

		$this->load->view('header');
		$this->load->view('about_us');
		$this->load->view('footer');

	}

	// 新聞(news)
	public function news()
	{

		$this->load->view('header');
		$this->load->view('news');
		$this->load->view('footer');

	}

	// 新品上架(new arrival)
	public function new_arrival()
	{

		$this->load->view('header');
		$this->load->view('new_arrival');
		$this->load->view('footer');

	}

	// 問與答(FAQ)
	public function faq()
	{

		$this->load->view('header');
		$this->load->view('faq');
		$this->load->view('footer');

	}

	// 連我我們(contact us)
	public function contact_us()
	{

		$this->load->view('header');
		$this->load->view('contact_us');
		$this->load->view('footer');

	}

	// 商品清單
	public function project_list()
	{

		$this->load->view('header');
		$this->load->view('project_list');
		$this->load->view('footer');

	}

	// 商品個別資訊
	public function project()
	{

		$this->load->view('header');
		$this->load->view('project');
		$this->load->view('footer');

	}
}