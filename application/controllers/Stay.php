<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of stay
 *
 * @author Clemens
 */
class Stay extends Application{
    public function index()
	{
                $stays = $this->staydata->getAllStay();
                $content = "";
                // Parse each stay section into html
                foreach($stays as $stay)
                {
                    $content .= $this->creatStays($stay);
                }
                // Place the stay html into the page
                $this->data['staysection'] = $content;
                $this->data['pagebody'] = 'stay';
                $this->render();
	}

        // Parse the contents of a single post into the post template
        public function creatStays($stay)
        {
            $content = $this->parser->parse('_sectionTemp', (array) $stay, true);
            return $content;
        }
}
