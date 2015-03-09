<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Restaurant
 *
 * @author William
 */
class Restaurants extends MY_Model {

    // Constructor
    public function __construct() {
        parent::__construct('restaurants', 'dineOutId');
    }

    // Get a single image
    public function getRest($dineNum) {
        
        if ($dineNum <= $this->size())
        {
            //retrieve the specified image from the database
            return $this->get($dineNum);
        }
        else
        {
            return null;
        }
        
    }        

    // Get number of latest restaurant
    public function getlastRest($num) {       
        
        // Retrieve the newest $num blog posts        
        $highestVal = $this->highest();
        
        for ($i = 0; $i < $num && $i <= $this->size(); $i++)
        {
            $last[] = $this->get($highestVal - $i);
        }
        
        return last;
    }
    
    // Get all restaurants
    public function getAllRests() {
        return $this->all();
    }

    // Get the first restaurant
    public function getFirstRest() {
        return $this->get(1);
    }
}