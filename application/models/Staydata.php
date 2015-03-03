<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of stayData
 *
 * @author Clemens
 */
class Staydata extends CI_Model{
    
    // Dummy data for stay
    var $data = array(
        array('id' => '1', 'content' => 'Live like a King',
            'img' => '../img/stay1.jpg'),
        
        array('id' => '2', 'content' => 'Stay with us, and feel like home…',
            'img' => 'img/stay2.jpg'),
        
        array('id' => '3', 'content' => 'Find your Freedom!',
            'img' => 'img/stay3.jpg'),
        
        array('id' => '4', 'content' => 'Unpretentiously luxurious',
            'img' => 'img/stay4.jpg')
    );
    
    // Constructor
    public function __construct() {
        parent::__construct();
    }
    
    // Retrieve all stay data
    public function getAllStay() {
        return $this->data;
    }
}
