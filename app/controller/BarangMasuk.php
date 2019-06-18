<?php

class BarangMasuk extends Controller
{
    public function addBarangMasuk()
    {
        $kode_barang = $_POST['kode_barang'];
        $kode_supplier = $_POST['kode_supplier'];
        $stock = $_POST['stock'];
        $tgl_masuk = $_POST['tgl_masuk'];

        $result = $this->model('BarangMasukModel')->addOneBarangMasuk($kode_barang, $kode_supplier, $stock, $tgl_masuk);
        
        if($result)
        {
            header("Location: http://localhost:8888/Percetakan/dashboard/barangmasuk");
        }
        else
        {
            echo "Gagal!";
        }
    }
}
