<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContactMessages
 *
 * @author Clemens
 */
class ContactMessages extends MY_Model{
    // Constructor
    public function __construct() {
        parent::__construct('contactmessages', 'contactId');
    }
    
    public function getMessage($messageNum) {
        
        if ($messageNum <= $this->size())
        {
            return $this->get($messageNum);
        }
        else
        {
            return null;
        }
      
    }
    
    public function getAllMessages() {
        return $this->all();
    }
    
    public function getNewestMessages($num) {    
        
        $val = $this->highest();
        for ($i = 0; $i < $num &&  $i <= $this->size(); $i++)
        {
            $messages[] = $this->get($val -$i);
        }
        
        return $messages;
    }
}
