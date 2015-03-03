<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of welcome 
 *
 * @author Clemens
 */

class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    function index() {
        
        /* Set content here */
        $homes = $this->homedata->getAll();
                $content = "";
                // Parse each welcome section into html
                foreach($homes as $home)
                {
                    $content .= $this->creatHomes($home);
                }
                // Place the welcome html into the page
                $this->data['homesection'] = $content;
                $this->data['pagebody'] = 'homepage';
                $this->render();
    }
    
    public function creatHomes($home)
        {
            $content = $this->parser->parse('_sectionTemp', (array) $home, true);
            
            return $content;
        }
}
