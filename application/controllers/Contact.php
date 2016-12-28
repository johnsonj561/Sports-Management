<?php

class Contact extends CI_Controller{

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
  public function form($errorMessage = ""){
    $data['errorMessage'] = $errorMessage;
    $this->load->view('templates/header', $data);
    $this->load->view('contact/index', $data);
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



  /*
  | -------------------------------------------------------------------
  | send_contact_message(name, telephone, email, message)
  | -------------------------------------------------------------------
  | Sends message info through use of php mail() function
  | 
  */  
  public function send_contact_message($data){

    // Define message details
    $recipients = 'jjohnson@ambrosiatc.com, johnsonj561@gmail.com';
    $subject = 'Jett Dev Message Center';

    // Build HTML Email
    $message = "
    <html>
      <head>
        <title>New Message from Jett Dev</title>
      </head>
      <body>";
    if(isset($contact_name)){
      $message .= "
        <h3>Name</h3>
        <p>$contact_name</p>";
    }
    if(isset($contact_telephone)){
      $message .= "
        <h3>Telephone</h3>
        <p>$telephone</p>";
    }
    if(isset($contact_email)){
      $message .= "
        <h3>Email</h3>
        <p>$email</p>";
    }
    if(isset($contact_message)){
      $message .= "
        <h3>Message</h3>
        <p>$message</p>";
    }
    $message .= "
      </body>
    </html>";

    // Set headers
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = 'From: Jett Dev Messaging <contact@jettdev.ddns.net>';

    // Mail message and return true if successful
    if(mail($recipients, $subject, $message, implode("\r\n", $headers))){
      return true;
    }

    // If Mail() failed, return false
    return false;
  }



}

?>