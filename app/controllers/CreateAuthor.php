<?php
class CreateAuthor extends Controller {
    public function index() {
        if ($this->io->method() === 'post') {
            $name = $this->io->post('name');
            if (!empty($name)) {
                $this->db->table('authors')->insert(['first_name' => $name]);
                redirect('/author');
            } else {
                $data['error'] = 'Name is required.';
                $this->view('create_author', $data);
                return;
            }
        }
        $this->view('create_author');
    }
}
