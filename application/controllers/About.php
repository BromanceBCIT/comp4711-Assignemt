<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of about
 *
 * @author Clemens
 */
class About extends Application{
    public function index()
	{
                $abouts = $this->aboutdata->getAllAbout();
                $content = "";
                
                // Parse each about section into html
                foreach($abouts as $about)
                {
                    $content .= $this->creatAbout($about);
                }
                // Place the about into the page
                $this->data['aboutsection'] = $content;
                $this->data['pagebody'] = 'about';
                $this->render();
	}
        // Parse the contents of a single post into the post template
        public function creatAbout($about)
        {
            $content = $this->parser->parse('_aboutTemp', (array) $about, true);
            
            return $content;
        }
}
