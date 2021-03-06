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
            $this->view('templates/admin/footer');
        }
        else
        {
            header("Location: http://localhost:8888/Percetakan/");
        }
    }

    public function barang()
    {
        $data['barang'] = $this->model('BarangModel')->getBarang();
        $data['supplier'] = $this->model('SupplierModel')->getAllDataSupplier();
        $data['judul'] = 'Data Barang';
        $data['username'] = $_SESSION['user']['username'];
        
        $this->view('templates/admin/header', $data);
        $this->view('templates/admin/navbar', $data);
        $this->view('dashboard/barang', $data);
        $this->view('templates/admin/footer');
    }

    public function supplier()
    {
        $data['supplier'] = $this->model('SupplierModel')->getAllDataSupplier();
        $data['judul'] = 'Data Supplier';
        $data['username'] = $_SESSION['user']['username'];

        $this->view('templates/admin/header', $data);
        $this->view('templates/admin/navbar', $data);
        $this->view('dashboard/supplier', $data);
        $this->view('templates/admin/footer');
    }

    public function barangmasuk()
    {
        $data['barangmasuk'] = $this->model('BarangMasukModel')->getAllBarangMasuk();
        $data['supplier'] = $this->model('SupplierModel')->getAllDataSupplier();
        $data['barang'] = $this->model('BarangModel')->getBarang();
        $data['judul'] = 'Barang Masuk';
        $data['username'] = $_SESSION['user']['username'];

        $this->view('templates/admin/header', $data);
        $this->view('templates/admin/navbar', $data);
        $this->view('dashboard/barangmasuk', $data);
        $this->view('templates/admin/footer');
    }
}
