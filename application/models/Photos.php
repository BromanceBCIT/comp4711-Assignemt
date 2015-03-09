<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Photos
 *
 * @author Clemens
 */
class Photos extends MY_Model {

    // Constructorrestaurants
    public function __construct() {
        parent::__construct('photos', 'photoId');
    }

    // Get a single photo
    public function getPhoto($photoNum) {
        
        if ($photoNum <= $this->size())
        {
            //retrieve the specified photo from the database
            return $this->get($photoNum);
        }
        else
        {
            return null;
        }
        
    }
        

    // Get number of newest photo
    public function getNewestPhotos($num) {       
        
        // Retrieve the newest $num blog posts        
        $highestVal = $this->highest();
        
        for ($i = 0; $i < $num && $i <= $this->size(); $i++)
        {
            $photos[] = $this->get($highestVal - $i);
        }
        
        return $photos;
    }
    
    // Get all photos
    public function getAllPhotos() {
        return $this->all();
    }

    // Get the first photo
    public function getFirstPhoto() {
        return $this->get(1);
    }
}
