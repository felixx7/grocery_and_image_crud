<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
function __construct()
{
        parent::__construct();
 
/* Standard Libraries of codeigniter are required */
$this->load->database();
$this->load->helper('url');
/* ------------------ */ 
 
$this->load->library('grocery_CRUD');
$this->load->library('image_CRUD'); 
 
}
 
public function index()
{
echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
die();
}
 
public function employees()
{
$this->grocery_crud->set_table('employees');
$output = $this->grocery_crud->render();
 
$this->_example_output($output);        
}

public function biodata()
{
			$crud = new grocery_CRUD();

			$crud->set_table('biodata');


			$crud->set_subject('BIODATA');

			$crud->required_fields('nama','umur');

			$crud->set_field_upload('file_url','assets/uploads/files');

			$output = $crud->render();

			$this->_example_output($output);       
}



public function example1()
{
$image_crud = new image_CRUD();
 
$image_crud->set_table('example_1');
 
//If your table have by default the "id" field name as a primary key this line is not required
$image_crud->set_primary_key_field('id');
 
$image_crud->set_url_field('url');
$image_crud->set_image_path('assets/uploads');
 
$output = $image_crud->render();
 
$this->_example_output($output);
}



function _example_output($output = null) 
{
$this->load->view('our_template.php',$output);    
}



}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */