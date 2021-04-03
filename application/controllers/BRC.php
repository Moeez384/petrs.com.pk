
<?php  

class BRC extends CI_Controller
{
	public function __construct() {
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->helper(array('form'));
		$this->load->model('WebsiteModel');
	}

	public function index(){
      $this->load->view('layouts/header');
	  $this->load->view('website/index');
	  $this->load->view('layouts/footer');
	}

	// public function AboutUs() {
	// 	$this->load->view('layouts/header');
	// 	$this->load->view('website/about');
	// 	$this->load->view('layouts/footer');
	// }

	// public function Results(){
	// 	$this->load->view('layouts/header');
	// 	$this->load->view('layouts/header-boot');
	// 	$this->load->view('website/allresults');
	// 	$this->load->view('layouts/footer');
	// }

	// public function Services(){
	// 	$this->load->view('layouts/header');
	// 	$this->load->view('website/services');
	// 	$this->load->view('layouts/footer');
	// }

	// public function Tests(){
	// 	$this->load->view('layouts/header');
	// 	$this->load->view('website/services');
	// 	$this->load->view('layouts/footer');
	// }

	// public function Divisions(){
	// 	$this->load->view('layouts/header');
	// 	$this->load->view('website/divisions');
	// 	$this->load->view('layouts/footer');
	// }

	// public function Associates(){
	// 	$this->load->view('layouts/header');
	// 	$this->load->view('website/associates');
	// 	$this->load->view('layouts/footer');
	// }

	// public function CSR(){
	// 	$this->load->view('layouts/header');
	// 	$this->load->view('website/csr');
	// 	$this->load->view('layouts/footer');
	// }

	// public function FAQS(){
	// 	$this->load->view('layouts/header');
	// 	$this->load->view('website/faqs');
	// 	$this->load->view('layouts/footer');
	// }

	// public function ContactUs(){
	// 	$this->load->view('layouts/header');
	// 	$this->load->view('website/contact');
	// 	$this->load->view('layouts/footer');
	// }

	// public function CEO(){
	// 	$this->load->view('layouts/header');
	// 	$this->load->view('website/ceo');
	// 	$this->load->view('layouts/footer');
	// }

	// public function Projects(){
	// 	$this->load->view('layouts/header2');
	// 	$this->load->view('layouts/header-boot');
	// 	$this->load->view('website/allprojects');
	// 	$this->load->view('layouts/footer');
	// }

	// public function NewProjects(){
	// 	$this->load->view('layouts/header2');
	// 	$this->load->view('layouts/header-boot');
	// 	$this->load->view('website/newprojects');
	// 	$this->load->view('layouts/footer');
	// }

	// public function News(){
	// 	$this->load->view('layouts/header');
	// 	$this->load->view('website/allnews');
	// 	$this->load->view('layouts/footer');
	// }

	public function RollNoSlip(){
	 $this->load->view('layouts/header');
	 $this->load->view('website/allslips');
	 $this->load->view('layouts/footer');
	}

	public function QuettaRollNoSlip(){
	 $this->load->view('layouts/header');
	 $this->load->view('quettaResult');
     $this->load->view('layouts/footer');
	}

	public function LoralaiRollNoSlip(){
	 $this->load->view('layouts/header');
	 $this->load->view('CheckCnic');
     $this->load->view('layouts/footer');
	}

	// public function ApplyOnline(){
	// 	$this->load->view('layouts/header');
	// 	$this->load->view('website/signin');
	// 	$this->load->view('layouts/footer');
	// }
}

?>