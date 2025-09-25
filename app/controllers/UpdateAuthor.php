<?php
class UpdateAuthor extends Controller {
    public function index($id) {
        // Logic for updating an author
        // ...
        $this->view('update_author', ['id' => $id]);
    }
}
