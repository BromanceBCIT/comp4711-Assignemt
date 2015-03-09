<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of homeData
 *
 * @author Clemens
 */
class Homedata extends CI_Model{
    
    // Dummy data for home
    var $data = array(
        array('id' => '1', 'content' => 'At any time of the year, Vancouver is sure to surprise and delight.',
            'img' => '../img/bcg_slide-1.jpg'),
        
        array('id' => '2', 'content' => 'A browse through the Tourism Vancouver photo and video gallery will introduce you to this city like nothing else can',
            'img' => 'img/bcg_slide-2.jpg'),
        
        array('id' => '3', 'content' => 'Vancouver is one of North America’s most under-rated tourist destinations.',
            'img' => 'img/bcg_slide-3.jpg'),
        
        array('id' => '4', 'content' => 'Everything is all waiting for you in Vancouver.',
            'img' => 'img/bcg_slide-4.jpg')
    );
    
    // Constructor
    public function __construct() {
        parent::__construct();
    }
    
    // Retrieve all home data
    public function getAll() {
        return $this->data;
    }
}
