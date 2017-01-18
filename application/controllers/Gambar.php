<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Gambar extends CI_Controller {
 
function __construct()
{
    parent::__construct();
 
/* ------------------ */ 
 
/* Standard Libraries of codeigniter are required */
$this->load->database();
$this->load->helper('url');
$this->load->library('image_CRUD');
$this->load->library('grocery_CRUD'); 
 
}

function example1()
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

function example2()
{
$image_crud = new image_CRUD();
 
$image_crud->set_table('example_2');
 
$image_crud->set_primary_key_field('id');
$image_crud->set_url_field('url');
$image_crud->set_ordering_field('priority')
    ->set_image_path('assets/uploads');
 
$output = $image_crud->render();
 
$this->_example_output($output);
}

function example3()
{
$image_crud = new image_CRUD();
 
$image_crud->set_table('example_3');
 
$image_crud->set_primary_key_field('id');
$image_crud->set_url_field('url');
 
$image_crud->set_relation_field('category_id')
    ->set_ordering_field('priority')
    ->set_image_path('assets/uploads');
 
$output = $image_crud->render();
 
$this->_example_output($output);
}

public function example4()
{
$image_crud = new image_CRUD();
 
$image_crud->set_table('example_2');
 
$image_crud->set_primary_key_field('image_id');
$image_crud->set_url_field('url');
$image_crud->set_title_field('title');
$image_crud->set_ordering_field('priority')
        ->set_image_path('assets/uploads');
 
$output = $image_crud->render();
 
$this->_example_output($output);
}

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */