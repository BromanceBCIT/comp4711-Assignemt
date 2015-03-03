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
        array('id' => '1', 'content' => 'By Sea, Land & Air, We Prosper',
            'img' => '../img/bcg_slide-1.jpg'),
        
        array('id' => '2', 'content' => 'Vancouver has plenty: Vancity, The Terminal City, Hollywood North, Raincity, Vansterdam and the Left Coast',
            'img' => 'img/bcg_slide-2.jpg'),
        
        array('id' => '3', 'content' => 'Go anywhere. Learn anything. Read every day',
            'img' => 'img/bcg_slide-3.jpg'),
        
        array('id' => '4', 'content' => 'Vancouver: Pedalling into a carless future',
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
