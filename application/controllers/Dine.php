<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dine
 *
 * @author Clemens
 */
class Dine extends Application{
    public function index()
	{
                $dines = $this->dinedata->getAllDine();
                $content = "";
                // Parse each dine section into html
                foreach($dines as $dine)
                {
                    $content .= $this->creatDines($dine);
                }
                // Place the dine html into the page
                $this->data['dinesection'] = $content;
                $this->data['pagebody'] = 'dine';
                $this->render();
	}
        // Parse the contents of a single post into the post template
        public function creatDines($dine)
        {
            $content = $this->parser->parse('_sectionTemp', (array) $dine, true);
            return $content;
        }
}
