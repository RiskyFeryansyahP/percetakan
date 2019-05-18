<?php

class UserAuthentication extends Controller
{
    public function login()
    {
        // get data with POST
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = $this->model('UserAuth')->UserLogin($username, $password);
        if($result)
        {
            $_SESSION['user']['username'] = $username;
            header("Location: http://localhost:8888/percetakan/dashboard");
        }
        else
        {
            header("Location: http://localhost:8888/percetakan");
        }
    }

    public function logout()
    {
        if(session_destroy())
        {
            header("Location: http://localhost:8888/Percetakan");
        }
    }

}