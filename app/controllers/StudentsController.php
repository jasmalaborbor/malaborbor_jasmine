<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: StudentsController
 * 
 * Automatically generated via CLI.
 */
class StudentsController extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
        $this->call->model('StudentsModel');
    }

    function get_all()
    {
        var_dump($this->StudentsModel->all());
    }
    function create(){
        $data = array(
            'last_name' => 'genabe',
            'first_name' => 'joshane',
            'email' => 'genabejoshaneangelie@gmail.com'
        );
        if($this->StudentsModel->insert($data)){
            echo 'Inserted';
        }else{
            echo 'Failed';
        }   
    }
    function update(){
        $data = array(
            'first_name' => 'joshane',
            'last_name' => ' genabe',
            'email' => 'genabejoshane@gmail.com'
        );
        if($this->StudentsModel->update(1,$data)){
            echo 'updated';
        }else{
            echo 'not updated';
        } 
    }  
    function delete(){
      if($this->StudentsModel->delete(1)){
            echo 'success';
        }else{
            echo 'not success';
        }   
    }
}