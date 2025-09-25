<?php
class DeleteAuthor extends Controller {
    public function index($id = null) {
        if ($this->io->method() === 'post') {
            $id = $this->io->post('id');
            if (!empty($id)) {
                $this->db->table('authors')->where('id', $id)->delete();
                redirect('/author');
            } else {
                $data['error'] = 'ID is required.';
                $data['id'] = $id;
                $this->view('delete_author', $data);
                return;
            }
        } else if (!empty($id)) {
            $data['id'] = $id;
            $this->view('delete_author', $data);
        } else {
            redirect('/author');
        }
    }
}
