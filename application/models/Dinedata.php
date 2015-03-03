<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dineData
 *
 * @author Clemens
 */
class Dinedata extends CI_Model{
    
    // Dummy data for dine
    var $data = array(
        array('id' => '1', 'content' => 'And we Vancouverites know our restaurants like we know our umbrellas. The two just go hand in hand.',
            'img' => '../img/dine1.jpg'),
        
        array('id' => '2', 'content' => 'Enjoy cuisine from different cultures or you are be open-minded to try some fusion',
            'img' => 'img/dine2.jpg'),
        
        array('id' => '3', 'content' => 'Find dining with sweet service and wonderful dining environment',
            'img' => 'img/dine3.jpg'),
        
        array('id' => '4', 'content' => 'Eat as much as you can and make sure you have enough money to buy a ticket to home',
            'img' => 'img/dine4.jpg')
    );
    
    // Constructor
    public function __construct() {
        parent::__construct();
    }
    
    // Retrieve all dine data
    public function getAllDine() {
        return $this->data;
    }
}
