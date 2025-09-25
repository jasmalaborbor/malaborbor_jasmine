<?php
class DeleteAuthor extends Controller {
    public function index($id) {
        // Logic for deleting an author
        // ...
        $this->view('delete_author', ['id' => $id]);
    }
}
