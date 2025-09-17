<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: CrudController
 * 
 * Automatically generated via CLI.
 */
class CrudController extends Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = $this->UserModel->all();
        $this->call->view('View', $data);
    }

    public function create()
    {
        if ($this->io->method() === 'post') {
            $name = $this->io->post('name');
            $email = $this->io->post('email');
            $data = [
                'name' => $name,
                'email' => $email
            ];
            $this->UserModel->insert($data);
        }
        $this->call->view('Create');
    }

    public function edits($id)
    {
        if ($this->io->method() === 'post') {
            $name = $this->io->post('name');
            $email = $this->io->post('email');
            $data = [
                'name' => $name,
                'email' => $email
            ];
            $this->UserModel->update($id, $data);
        }
        $user = $this->UserModel->find($id);
        $this->call->view('Update', $user);
    }

    public function delete($id)
    {
        $this->UserModel->delete($id);
        redirect('/');
    }
}