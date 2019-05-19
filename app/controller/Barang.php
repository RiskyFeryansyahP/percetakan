<?php

class Barang extends Controller
{
    public function AddOneBarang()
    {
        $kode_barang    = $_POST['kode_barang'];
        $nama_barang    = $_POST['nama_barang'];
        $stock          = $_POST['stock'];
        $result = $this->model('BarangModel')->addBarang($kode_barang, $nama_barang, $stock);
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
}
