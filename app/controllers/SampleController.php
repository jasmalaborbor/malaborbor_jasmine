<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: SampleController
 * 
 * Automatically generated via CLI.
 */
class SampleController extends Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function view(){
        $data = $this->SampleModel->all();
        $this->call->view('Sview',$data);
    }

    public function Screate(){
        if($this->io->method() === 'post'){
            $name = $this->io->post('name');

            $data = [
                'name' => $name
            ];

            $this->SampleModel->insert($data);
        }
    }
}