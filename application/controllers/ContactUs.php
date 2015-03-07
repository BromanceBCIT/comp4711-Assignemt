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
    
    function showMessage($message) 
        {

            $this->data['fName'] = makeTextField('Name', 'name', $message->name);
            $this->data['fEmail'] = makeTextField('Email', 'email', $message->email);
            $this->data['fSubject'] = makeTextArea('Subject', 'subject', $message->subject);
            $this->data['fMessage'] = makeTextArea('Message', 'message', $message->message);
            
            $this->data['pagebody'] = 'contact_us';

            $this->data['bSubmit'] = makeSubmitButton('Submit', "Submit the "
                    . "updated message", 'btn-success');

            $this->render();
        }
        
    function confirmMessage() {
            $record = $this->ContactMessages->create();      

            
            $record->contactId = $this->input->post('contactId');
            $record->name = $this->input->post('name');
            $record->email = $this->input->post('email');
            $record->subject = $this->input->post('subject');
            $record->message = $this->input->post('message');

            // Error checking
            if (empty($record->name))
            {
                $this->errors[] = 'You must specify an name.';
            }
            
            if (empty($record->email))
            {
                $this->errors[] = 'You must specify an email.';
            }

            if (empty($record->subject))
            {
                $this->errors[] = 'You must specify a subject.';
            }

            if (empty($record->message))
            {
                $this->errors[] = 'You must specify a message.';
            }
            
            if (count($this->errors) > 0)
            {
                $this->showMessage($record);
                return;
            }
            
            // Add or update the record
            if (empty($record->id)) 
            {
                $newestMessage = $this->ContactMessages->getNewestMessages(1);
                
                if (count($newestMessage) != 0)
                {
                    // If there are pre-existing posts
                    $record->contactId = $newestMessage[0]->contactId + 1;
                }
                else
                {
                    $record->contactId = 0;
                }
                
                $this->ContactMessages->add($record);
            }
            else 
            {
                $this->ContactMessages->update($record);
            }

            redirect('/ContactUs');
        }
}
