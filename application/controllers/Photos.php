<?php

defined('BASEPATH') OR exit('No direct script access allowed');


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
class Photos extends Application{
    public function index()
	{
            //get all the photos from the database
            $pics = $this->photos->getAllPhotos();
            
            //build array of formatted cells
            foreach ($pics as $picture)
            {
                $cells[] = $this->parser->parse('_cell', (array) $picture, true);
            }
            
            //prime the table class
            $this->load->library('table');
            $parms = array (
                'table_open' => '<table class="gallery">', 
                'cell_start' => '<td class="oneimage">', 
                'cell_alt_start' => '<td class="oneimage">'
            );
            $this->table->set_template($parms);
            
            $rows = $this->table->make_columns($cells, 3);
            $this->data['thetable'] = $this->table->generate($rows);
            
            //render the data
            $this->data['pagebody']= 'gallery';
            $this->render();
	}
}
