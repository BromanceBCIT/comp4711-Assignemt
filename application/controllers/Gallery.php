<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gallery
 *
 * @author Clemens
 */
class Gallery extends Application {

	public function index()
	{
            $pics = $this->Photos->getAllPhotos();
            foreach ($pics as $pictures)
            {
                $cells[] = $this->parser->parse('_cell', (array) $pictures, true);
            }
            
            $this->load->library('table');
            $parms = array (
                'table_open' => '<table class="gallery">', 
                'cell_start' => '<td class="oneimage">', 
                'cell_alt_start' => '<td class="oneimage">'
            );
            $this->table->set_template($parms);
            
            $rows = $this->table->make_columns($cells, 3);
            $this->data['gallerytable'] = $this->table->generate($rows);
            
            //render the data
            $this->data['pagebody']= 'gallery';
            $this->render();
	}
        
        public function image($id)
        {
            $this->data['pagebody'] = '_image';  
            $this->data = array_merge($this->data, (array) $this->Photos->get($id));

            $this->render();            
        }
        
}
