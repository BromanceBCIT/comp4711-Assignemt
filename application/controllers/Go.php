<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of go
 *
 * @author Clemens
 */
class Go extends Application{
    public function index()
	{
                $gos = $this->godata->getAllGo();
                $content = "";
                // Parse each go section into html
                foreach($gos as $go)
                {
                    $content .= $this->creatGos($go);
                } 
                // Place the go html into the page
                $this->data['gosection'] = $content;
                $this->data['pagebody'] = 'go';
                $this->render();
	}
        // Parse the contents of a single post into the post template
        public function creatGos($go)
        {
            $content = $this->parser->parse('_sectionTemp', (array) $go, true);
            return $content;
        }
}
