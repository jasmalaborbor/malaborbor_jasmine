<?php
class UpdateAuthor extends Controller {
    public function index($id = null) {
        if ($this->io->method() === 'post') {
            $id = $this->io->post('id');
            $name = $this->io->post('name');
            if (!empty($id) && !empty($name)) {
                $this->db->table('authors')->where('id', $id)->update(['first_name' => $name]);
                redirect('/author');
            } else {
                $data['error'] = 'ID and Name are required.';
                $data['id'] = $id;
                $this->view('update_author', $data);
                return;
            }
        } else if (!empty($id)) {
            $author = $this->db->table('authors')->where('id', $id)->get();
            $data['id'] = $id;
            $data['name'] = $author ? $author['first_name'] : '';
            $this->view('update_author', $data);
        } else {
            redirect('/author');
        }
    }
}
