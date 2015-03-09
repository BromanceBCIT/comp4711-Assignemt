<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dine
 *
 * @author William
 */
class Dine extends Application{
    public function index()
    {
        $rests = $this->Restaurants->getAllRests();

        foreach ($rests as $r)
        {
            $cells[] = $this->parser->parse('_restLink', (array) $r, true);
        }

        $this->load->library('table');
        $parms = array (
            'table_open' => '<table class="dine">', 
            'cell_start' => '<td class="oneRest">', 
            'cell_alt_start' => '<td class="oneRest">'
        );

        $this->table->set_template($parms);

        $rows = $this->table->make_columns($cells, 1);
        $this->data['RestaurantList'] = $this->table->generate($rows);
        $this->data['pagebody'] = 'dine';
        $this->render();
    }
    // Parse the contents of a single post into the post template
    public function restaurants($dineOutId)
    {
        $this->data['pagebody'] = '_restaurant';  
        $this->data = array_merge($this->data, (array) $this->Restaurants->get($dineOutId));

        $this->render(); 
    }
}