<?php

class Barang extends Controller
{

    public function selectBarang()
    {
        $data['barang'] = $this->model('BarangModel')->getBarang();
        return $data['barang'];
    }

    public function AddOneBarang()
    {
        $kode_barang    = $_POST['kode_barang'];
        $nama_barang    = $_POST['nama_barang'];
        $stock          = $_POST['stock'];
        $kode_supplier  = $_POST['kode_supplier'];
        $result = $this->model('BarangModel')->addBarang($kode_barang, $nama_barang, $stock, $kode_supplier);
        if($result)
        {
            header("Location: http://localhost:8888/Percetakan/dashboard/barang");
        }
        else
        {
            echo "Gagal";
        }
    }

    public function DeleteOneBarang($kode_barang)
    {
        $result = $this->model('BarangModel')->deleteBarang($kode_barang);
        if($result)
        {
            header("Location: http://localhost:8888/Percetakan/dashboard/barang");
        }
        else
        {
            echo "Gagal!";
        }
    }

    public function EditOneBarang()
    {
        $kode_barang    = $_POST['kode_barang'];
        $nama_barang    = $_POST['nama_barang'];
        $stock          = $_POST['stock'];
        $kode_supplier  = $_POST['kode_supplier'];
        $result = $this->model('BarangModel')->updateBarang($kode_barang, $nama_barang, $stock, $kode_supplier);
        if($result)
        {
            header("Location: http://localhost:8888/Percetakan/dashboard/barang");
        }
        else
        {
            echo "Gagal!";
        }
    }
}
