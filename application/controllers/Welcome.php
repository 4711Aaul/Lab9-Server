<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{
         /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
         *
         * Initializes $this->data['remaining_tasks']
         *  to the appropriate number of tasks.
         * Initializes $this->data['display_tasks'] to 
         *  the appropriate list of tasks.
	 */
	public function index()
	{
            // produces the page to be displayed.
            $this->data['pagebody'] = 'homepage';
            $this->render();
	}
}
