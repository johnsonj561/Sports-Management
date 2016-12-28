<?php

class User extends CI_Controller{

  /*
  | -------------------------------------------------------------------
  | Constructor
  | -------------------------------------------------------------------
  | Calls parent constructor and loads url_helper
  | 
  */
  public function __construct(){
    parent::__construct();
    $this->load->helper('url_helper');
  }

  /*
  | -------------------------------------------------------------------
  | Form View
  | -------------------------------------------------------------------
  | Loads contact form
  | 
  */
  public function register($errorMessage = ""){
    $data['errorMessage'] = $errorMessage;
    $this->load->view('templates/header', $data);
    $this->load->view('user/register', $data);
    $this->load->view('templates/footer');
  }



  /*
  | -------------------------------------------------------------------
  | Form Submitted View
  | -------------------------------------------------------------------
  | Loads Form Submitted View
  | Strips tags and applies htmlentities to input
  | Calls send_contact_message() to send mail and stores result feedback
  | 
  */
  public function form_submitted(){
    $data = array(
      'contact_name' => htmlentities(strip_tags($this->input->post('name'))),
      'contact_email' => htmlentities(strip_tags($this->input->post('email'))),
      'contact_telephone' => htmlentities(strip_tags($this->input->post('telephone'))),
      'contact_message' => htmlentities(strip_tags($this->input->post('message')))
    );

    // If mail sent successful
    if($this->send_contact_message($data)){
      $data['mail_result'] = True;
      $data['title'] = "Mail Received";
      $data['description'] = "Thank you for your interest in Jett Dev Spots Management software. 
      Someone from our team will be reaching out to you very soon!";
    }
    else{
      $data['mail_result'] = False;
      $data['title'] = "Whoops! There Was An Error!";
      $data['description'] = "For some reason, you're message didn't reach us. Please try again, or contact us by calling today!";
    }
    $this->load->view('templates/header');
    $this->load->view('contact/form-submitted', $data);
    $this->load->view('templates/footer');
  }


}

?>