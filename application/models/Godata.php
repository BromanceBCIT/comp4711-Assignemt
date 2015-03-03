<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of goData
 *
 * @author Clemens
 */
class Godata extends CI_Model{
    
    // Dummy data for go
    var $data = array(
        array('id' => '1', 'content' => 'Hop on Canada Line and you are there',
            'img' => '../img/go1.jpg'),
        
        array('id' => '2', 'content' => 'Say Hi to the heart of Vancouver on the cruise',
            'img' => 'img/go2.jpg'),
        
        array('id' => '3', 'content' => 'Get the birds eye view of Vancouver on the Grouse Mountain gondola',
            'img' => 'img/go3.jpg'),
        
        array('id' => '4', 'content' => 'Fly to Vancouver Island by Harbour Air Seaplanes',
            'img' => 'img/go4.jpg')
    );
    
    // Constructor
    public function __construct() {
        parent::__construct();
    }
    
    // Retrieve all go data
    public function getAllGo() {
        return $this->data;
    }
}
