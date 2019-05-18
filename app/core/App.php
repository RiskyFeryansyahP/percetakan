<?php

class App
{
    protected $controller = 'User';
    protected $method = 'index';
    protected $params = []; 

    public function __construct()
    {
        $url = $this->parseURL();
        
        if(file_exists('app/controller/' . $url[0] . '.php'))
        {
            $this->controller = $url[0]; // agar bisa memanggil controller yang berbeda tergangung kita 
            unset($url[0]); // menghapus array pertama agar bisa di isi kembali
        }

        // default controller
        require_once 'app/controller/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // method
        if(isset($url[1]))
        {
            if(method_exists($this->controller, $url[1]))
            {
                $this->method = $url[1]; // menimpa properti method dengan method yang baru
                unset($url[1]); 
            }
        }

        if(!empty($url))
        {
            $this->params = array_values($url);
        }

        // menjalankan controller dan method
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if(isset($_GET['url']))
        {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
