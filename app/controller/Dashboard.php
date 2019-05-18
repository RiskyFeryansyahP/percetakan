<?php

class Dashboard extends Controller
{
    public function index()
    {
        if(isset($_SESSION['user']['username']))
        {
            $data['judul'] = 'Dashboard';
            $data['username'] = $_SESSION['user']['username'];
            $this->view('templates/admin/header', $data);
            $this->view('templates/admin/navbar', $data);
            $this->view('dashboard/index');
            $this->vire('templates/admin/footer');
        }
        else
        {
            header("Location: http://localhost:8888/Percetakan/");
        }
    }

    public function barang()
    {
        $data['barang'] = $this->model('BarangModel')->getBarang();
        $data['judul'] = 'Dashboard';
        $data['username'] = $_SESSION['user']['username'];
        $this->view('templates/admin/header', $data);
        $this->view('templates/admin/navbar', $data);
        $this->view('dashboard/barang', $data);
        $this->vire('templates/admin/footer');
    }
}
