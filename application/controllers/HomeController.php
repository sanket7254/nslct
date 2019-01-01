<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller
{
	public function index()
	{
		$this->load->view('include/home_page_header');
		$this->load->view('frontend/index');
		$this->load->view('include/footer');
	}

	public function about()
	{
		$this->load->view('include/header');
		$this->load->view('frontend/about');
		$this->load->view('include/footer');
	}

	public function contactus()
	{
		$this->load->view('include/header');
		$this->load->view('frontend/contact');
		$this->load->view('include/footer');
	}

	public function project()
	{
		$this->load->view('include/header');
		$this->load->view('frontend/project');
		$this->load->view('include/footer');
	}

	public function services()
	{
		$this->load->view('include/header');
		$this->load->view('frontend/service');
		$this->load->view('include/footer');
	}

	public function gallery()
	{
		$this->load->view('include/header');
		$this->load->view('frontend/gallery');
		$this->load->view('include/footer');
	}

	public function clients()
	{
		$this->load->view('include/header');
		$this->load->view('frontend/clients');
		$this->load->view('include/footer');
	}

	public function careers()
	{
		$this->load->view('include/header');
		$this->load->view('frontend/career');
		$this->load->view('include/footer');
	}

	public function careerinfo()
	{
		$config=[
               		'upload_path'=>'assets/',
                	'allowed_types'=>'doc|docx|pdf|txt',
                ];

        $this->load->library('upload');
        $this->upload->initialize($config);
        $this->load->helper('form');

        $name = $this->input->post("name");
		$mail = $this->input->post("email");
		$phone = $this->input->post("phone");
		$message = $this->input->post("comments");

        if($this->upload->do_upload('resume'))
		{
			$data=$this->upload->data();
	        $attachment_path=$data["raw_name"].$data['file_ext'];	

			$this->load->library('email');

			$this->email->from($mail);
			$this->email->to('sanketchidrawar@gmail.com.com');
			$this->email->cc('p.ahire04@gmail.com');

			$this->email->subject('Email Test');
			$this->email->message('Testing the email class.');
			$this->email->attach($attachment_path);

			if($this->email->send())
			{
				$success="Enquiry Successful...!";
	            $this->session->set_flashdata('success',$success);
	            $this->session->set_flashdata('status','btn-success');
	            redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$unsuccess="Enquiry Unsuccessful...!";
	            $this->session->set_flashdata('success',$unsuccess);
	            $this->session->set_flashdata('status','btn-success');
	            redirect($_SERVER['HTTP_REFERER']);
			}
		}
		else
		{
			$this->load->library('email');

			$this->email->from($mail);
			$this->email->to('sanketchidrawar@gmail.com.com');
			$this->email->cc('p.ahire04@gmail.com');

			$this->email->subject('Email Test');
			$this->email->message('Testing the email class.');
			$this->email->send();

			$success="Enquiry Successful...!";
            $this->session->set_flashdata('success',$success);
            $this->session->set_flashdata('status','btn-success');
            redirect($_SERVER['HTTP_REFERER']);
		}
	}
}
