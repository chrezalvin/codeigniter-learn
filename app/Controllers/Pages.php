<?php
    namespace App\Controllers;
    use CodeIgniter\Controller;

    class Pages extends Controller
    {
        public function index()
        {
            return view('Welcome_message');
        }

        public function view($page = 'home')
        {
            if(!is_file(APPPATH.'Views/pages/'.$page.'.php'))
            {
                // no page for that (yet)
                throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
            }

            $data['title'] = ucfirst($page); // capitalize the first character

            echo view('templates/header', $data);
            echo view('pages/'.$page, $data);
            echo view('templates/footer', $data);

        }
    }