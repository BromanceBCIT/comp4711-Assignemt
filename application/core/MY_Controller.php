<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {

    protected $data = array();

    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */

    function __construct() {
        parent::__construct();
        $this->data = array();
        /* Set the page title, heading here */
        $this->data["title"] = "Vancouver Explorer -- COMP4711 Assignemt1";
        $this->data["pageTitle"] = "Vancouver Explorer";
    }

    /**
     * Render this page
     */
    function render() {
		/* Set up page */
        
        //$this->data['content'] = $this->parser->parse($this->data['content'], $this->data, true);
	$this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
        $this->data['data'] = &$this->data;
        $this->parser->parse("_template_info", $this->data);
    }

}

/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */