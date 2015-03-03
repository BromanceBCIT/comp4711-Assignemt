<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of about data
 *
 * @author Clemens
 */
class Aboutdata extends CI_Model{
    
    // Dummy data for about
    var $data = array(
        array('id' => '1', 'content' => 'This a web application developed for the comp 4711
                    web application development course at British Columbia Institute of
                    Technology. ',
            'img' => '../img/dine1.jpg'),
    );
    
    // Constructor
    public function __construct() {
        parent::__construct();
    }
    
    // Retrieve all about data
    
    public function getAllAbout() {
        return $this->data;
    }
}
