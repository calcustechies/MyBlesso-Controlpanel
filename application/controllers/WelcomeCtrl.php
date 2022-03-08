<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeCtrl extends CI_Controller {

	//VIEW INDEX PAGE
	public function index()
	{
		//$this->load->view('header');
		$this->load->view('index');
		//$this->load->view('footer');
	}

	//VIEW  PAGE
	public function dashboard()
	{
		$userId =$this->session->userdata('RootID');
		if($userId>0)
		{
		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
		}
		else{
			$this->load->view('index');
		}
	}


	//VIEW JOBS DETAILS PAGE
	public function jobsdetails()
	{
		$userId =$this->session->userdata('RootID');
		if($userId>0)
		{
		$this->load->view('header');
		$this->load->view('jobsdetails');
		$this->load->view('footer');
		}
		else{
			$this->load->view('index');
		}

	}

		//VIEW EMPLOYEE USER PAGE
		public function employeeusers()
		{
			$userId =$this->session->userdata('RootID');
		if($userId>0)
		{
			$this->load->view('header');
			$this->load->view('employeeusers');
			$this->load->view('footer');
		}
		else{
			$this->load->view('index');
		}
	}
		
		//VIEW EMPLOYER USER PAGE
		public function employerusers()
		{
			$userId =$this->session->userdata('RootID');
			if($userId>0)
			{
			$this->load->view('header');
			$this->load->view('employerusers');
			$this->load->view('footer');
		}
		else{
			$this->load->view('index');
		}
		}

				
		//VIEW EMPLOYER USER PAGE
		public function companydetails()
		{
			$userId =$this->session->userdata('RootID');
			if($userId>0)
			{
			$this->load->view('header');
			$this->load->view('companydetails');
			$this->load->view('footer');
		}
		else{
			$this->load->view('index');
		}
		}

					
		//VIEW PAYMENT ORDER Client PAGE
		public function paymentordersclient()
		{
			$userId =$this->session->userdata('RootID');
			if($userId>0)
			{
			$apiPrefix = $this->config->item('url_prefix');
			$result['cashFlowEwallets']= $this->ctlib->url($apiPrefix .'cashFlowEwallet/0/0/0');
			//print_r($result);
			$this->load->view('header');
			$this->load->view('paymentordersclient',$result);
			$this->load->view('footer');
		}
		else{
			$this->load->view('index');
		}
		}

		//VIEW PAYMENT ORDER Company PAGE
		public function paymentorderscompany()
		{
			$userId =$this->session->userdata('RootID');
			if($userId>0)
			{
			$apiPrefix = $this->config->item('url_prefix');
			$result['AdminCashFlows']= $this->ctlib->url($apiPrefix .'AdminCashFlow/0/0/0/0');
			//print_r($result);
			$this->load->view('header');
			$this->load->view('paymentorderscompany',$result);
			$this->load->view('footer');
		}
		else{
			$this->load->view('index');
		}
		}

			//VIEW ADVERTISEMENT PAGE
			public function advertisement()
			{
				$userId =$this->session->userdata('RootID');
			if($userId>0)
			{
				$this->load->view('header');
				$this->load->view('advertisement');
				$this->load->view('footer');
			}
			else{
				$this->load->view('index');
			}
			}

			//add advertisement PAGE
			public function addadvertisement()
			{
				$userId =$this->session->userdata('RootID');
				if($userId>0)
				{
				$this->load->view('header');
				$this->load->view('addadvertisement');
				$this->load->view('footer');
				}
			else{
				$this->load->view('index');
			}
			}

				//Edit advertisement PAGE
				public function editadvertisement($id)
				{
				$userId =$this->session->userdata('RootID');
				if($userId>0)
				{
				$advertisementId =$this->uri->segment('2');
				
      			$apiPrefix = $this->config->item('url_prefix');
			$data['viewAdvertisements']= $this->ctlib->url($apiPrefix .'DisplayAdvertisement/'.$userId.'/'.$advertisementId.'/0');
					 //print_r($data);
					$this->load->view('header');
					$this->load->view('editadvertisement',$data);
					$this->load->view('footer');
				}
				else{
					$this->load->view('index');
				}
				}
	
				//Edit advertisement PAGE
				public function viewadvertisement($id)
				{
				$userId =$this->session->userdata('RootID');
				if($userId>0)
				{
				$advertisementId =$this->uri->segment('2');
				
      			$apiPrefix = $this->config->item('url_prefix');
			$data['viewAdvertisements']= $this->ctlib->url($apiPrefix .'DisplayAdvertisement/'.$userId.'/'.$advertisementId.'/0');
					 //print_r($data);
					$this->load->view('header');
					$this->load->view('viewadvertisement',$data);
					$this->load->view('footer');
				}
				else{
					$this->load->view('index');
				}
				}


			//VIEW PROFILE PAGE
			public function profile()
			{
				$userId =$this->session->userdata('RootID');
				if($userId>0)
				{
				$this->load->view('header');
				$this->load->view('profile');
				$this->load->view('footer');
			}
			else{
				$this->load->view('index');
			}
			}

			//EDIT  PROFILE PAGE
			public function editprofile()
			{
				$userId =$this->session->userdata('RootID');
				if($userId>0)
				{
				$this->load->view('header');
				$this->load->view('editprofile');
				$this->load->view('footer');
			}
			else{
				$this->load->view('index');
			}
			}


			//VIEW PROFILE PAGE
			public function category()
			{
				$userId =$this->session->userdata('RootID');
				if($userId>0)
				{
				$this->load->view('header');
				$this->load->view('category');
				$this->load->view('footer');
			}
			else{
				$this->load->view('index');
			}
			}





			//Edit advertisement PAGE
			public function editcategory($id)
			{
			$userId =$this->session->userdata('RootID');
			if($userId>0)
			{
			$jobCategoryID =$this->uri->segment('2');
			
			  $apiPrefix = $this->config->item('url_prefix');
		$data['DisplayjobCategories']= $this->ctlib->url($apiPrefix .'DisplayjobCategories/'.$jobCategoryID);
				 //print_r($data);
				$this->load->view('header');
				$this->load->view('editjobcategory',$data);
				$this->load->view('footer');
			}
			else{
				$this->load->view('index');
			}
			}


			//add category PAGE
			public function addcategory()
			{
				$userId =$this->session->userdata('RootID');
				if($userId>0)
				{
				$this->load->view('header');
				$this->load->view('addcategory');
				$this->load->view('footer');
				}
			else{
				$this->load->view('index');
			}
			}
			
			
			//view Job Details
			
			
			public function viewJobDetails($id)
			{
			$userId =$this->session->userdata('RootID');
			if($userId>0)
			{
			$data['i'] =$this->uri->segment('2');
			
			 
				$this->load->view('header');
				$this->load->view('viewJobDetails',$data);
				$this->load->view('footer');
			}
			else{
				$this->load->view('index');
			}
			}
			
			
				//view Job Details
			
			
			public function viewUserDetails($id)
			{
			$userId =$this->session->userdata('RootID');
			if($userId>0)
			{
			$data['i'] =$this->uri->segment('2');
			
			 
				$this->load->view('header');
				$this->load->view('viewOneUser',$data);
				$this->load->view('footer');
			}
			else{
				$this->load->view('index');
			}
			}
			
			
			
			
			
			
			

}
