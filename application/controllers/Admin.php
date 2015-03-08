<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Clemens
 */
class Admin extends Application {
        function __construct()
        {
            parent::__construct();
            $this->load->helper('formfields');
        }
        
	public function index()
	{
            $this->data['messages'] = $this->ContactMessages->all();
            $this->data['photos'] = $this->Photos->all();
            
            $this->data['pagebody'] = 'admin';

            $this->render();
	}
        
        function addMessage()
        {
            $Message = $this->ContactMessages->create();
            $this->showMessage($Message);
        }

        function showMessage($mes) 
        {
        
            $message = '';
            
            if (count($this->errors) > 0) {
                foreach ($this->errors as $error)
                {
                    $message .= $error . BR;
                }
            }
            
            $this->data['errorMessage'] = $message;

            $this->data['fName'] = makeTextField('Name', 'name', $mes->name);
            $this->data['fEmail'] = makeTextField('Email', 'email', $mes->email);
            $this->data['fSubject'] = makeTextArea('Subject', 'subject', $mes->subject);
            $this->data['fMessage'] = makeTextArea('Message', 'message', $mes->message);
            
            $this->data['pagebody'] = 'message_edit';

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

            redirect('/admin');
        }   
        
        function addPhoto()
        {
            $photo = $this->Photos->create();
            $this->showPhoto($photo);
        }

        function showPhoto($photo) {
            // Identify any errors
            $message = '';
            
            if (count($this->errors) > 0) {
                foreach ($this->errors as $error)
                {
                    $message .= $error . BR;
                }
            }
            
            $this->data['errorMessage'] = $message;

            // Fill the text fields
            $this->data['fAuthor'] = makeTextField('Author', 'author', $photo->author);
            $this->data['fDescription'] = makeTextField('Description', 'description', $photo->description);
            $this->data['fTitle'] = makeTextField('Title', 'title', $photo->title);
            $this->data['fPhoto'] = makeTextField('Photo', 'photo', $photo->photo);
            
            $this->data['pagebody'] = 'photo_edit';

            $this->data['bSubmit'] = makeSubmitButton('Submit Post', "Submit the "
                    . "updated photo", 'btn-success');

            $this->render();
        }

        function confirmPhoto() {
            $record = $this->Photos->create();      

            // Extract submitted fields
            $record->photoId = $this->input->post('photoId');
            $record->author = $this->input->post('author');
            $record->description = $this->input->post('description');
            $record->title = $this->input->post('title');
            $record->photo = $this->input->post('photo');

            // Error checking
            if (empty($record->author))
            {
                $this->errors[] = 'You must specify an author.';
            }
            
            if (empty($record->photo))
            {
                $this->errors[] = 'You must specify a photo.';
            }

            if (empty($record->title))
            {
                $this->errors[] = 'You must specify a title.';
            }

            if (empty($record->description))
            {
                $this->errors[] = 'You must specify a description.';
            }
            
            if (count($this->errors) > 0)
            {
                $this->showPhoto($record);
                return;
            }

            // Update the record's date
            $date = getdate();
            $dateString = $date['year'] . "-" . $date['mon'] . "-" . $date['mday'];
            $record->postDate = $dateString;
            
            // Add or update the record
            if (empty($record->id)) 
            {
                $newestPhoto = $this->Photos->getNewestPhotos(1);
                
                if (count($newestPhoto) != 0)
                {
                    // If there are pre-existing posts
                    $record->photoId = $newestPhoto[0]->photoId + 1;
                }
                else
                {
                    $record->photoId = 0;
                }
                
                $this->Photos->add($record);
            }
            else 
            {
                $this->Photos->update($record);
            }

            redirect('/admin');
        }
}
