<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Author extends Controller {

    public function all() 
    {
        
        $page = 1;
        if(isset($_GET['page']) && ! empty($_GET['page'])) {
            $page = $this->io->get('page');
        }

        $q = '';
        if(isset($_GET['q']) && ! empty($_GET['q'])) {
            $q = trim($this->io->get('q'));
        }
    }
    public function index()
    {
        $data['authors'] = $this->Author_model->all();
        $this->call->view('user/author', $data);    
    }
    public function create()
    {
        if($this->io->method() == 'post') {
            $first_name = $this->io->post('Firstname');
            $last_name = $this->io->post('Lastname');
            $email = $this->io->post('email');
            $birthdate = $this->io->post('Birthdate');

            $data = [
                'Fisrtname' => $first_name,
                'Lastname' => $last_name,
                'email' => $email,
                'Birthdate' => $birthdate,

            ];

            $this->Author_model->insert($data);
            redirect('/');
            
        }else {
            $this->call->view('author/create');
        }
    }
    public function update($id)
    {

    $data['author'] = $this->Author_model->find($id);

    if ($this->io->method() == 'post') {    
        $data = [
            $first_name = $this->io->post('Firstname'),
            $last_name = $this->io->post('Lastname'),
            $email = $this->io->post('email'),
            $birthdate = $this->io->post('Birthdate')
        ];

        $this->UserModel->update($id, $data);

        redirect('/');
    } else {
        $this->call->view('user/update', $data);
    }
    }
    public function delete($id)
    {
        $this->Author_model->delete($id);
        redirect('/');
    }
}

        $records_per_page = 10;

        $all = $this->author_model->page($q, $records_per_page, $page);
        $data['all'] = $all['records'];
        $total_rows = $all['total_rows'];
        $this->pagination->set_options([
            'first_link'     => '⏮ First',
            'last_link'      => 'Last ⏭',
            'next_link'      => 'Next →',
            'prev_link'      => '← Prev',
            'page_delimiter' => '&page='
        ]);
        $this->pagination->set_theme('bootstrap'); // or 'tailwind', or 'custom'
        $this->pagination->initialize($total_rows, $records_per_page, $page, site_url('author').'?q='.$q);
        $data['page'] = $this->pagination->paginate();
        $this->call->view('authors', $data);

?>
