<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContactUs
 *
 * @author Clemens
 */
class ContactUs extends Application {
    function __construct()
        {
            parent::__construct();
            $this->load->helper('formfields');
        }
    public function index()
	{
            $message = $this->ContactMessages->create();
            $this->showMessage($message);
	}
    
    function showMessage($message) {

            $this->data['fName'] = makeTextField('Name', 'name', $message->name);
            $this->data['fEmail'] = makeTextField('Email', 'email', $message->email);
            $this->data['fSubject'] = makeTextArea('Subject', 'subject', $message->subject);
            $this->data['fMessage'] = makeTextArea('Message', 'message', $message->message);
            
            $this->data['pagebody'] = 'contact_us';

            $this->data['bSubmit'] = makeSubmitButton('Submit', "Submit the "
                    . "updated post", 'btn-success');

            $this->render();
        }
}
