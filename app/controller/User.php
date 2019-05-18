<?php
    /**
     * 
     * Class User Authentication
     * untuk mengatur user yang ingin login
     */
    class User extends Controller
    {
        public function index()
        {
            if(isset($_SESSION['user']['username']))
            {
                // echo $_SESSION['user']['username'];
                header("Location: http://localhost:8888/Percetakan/dashboard");
            }
            else
            {
                $data['judul'] = 'Login';
                $this->view('templates/header', $data);
                $this->view('login/index');
                $this->view('templates/footer');
            }
        }

    }