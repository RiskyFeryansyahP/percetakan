<?php

class Supplier extends Controller
{
    public function addOneDataSupplier()
    {
        $kode_supplier = $_POST['kode_supplier'];
        $nama_supplier = $_POST['nama_supplier'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];

        $result = $this->model('SupplierModel')->addDataSupplier($kode_supplier, $nama_supplier, $no_telp, $alamat);
        if($result)
        {
            header("Location: http://localhost:8888/Percetakan/dashboard/supplier");
        }
        else
        {
            echo "Gagal!";
        }
    }

    public function editOneDataSupplier()
    {
        $kode_supplier  = $_POST['kode_supplier'];
        $nama_supplier  = $_POST['nama_supplier'];
        $no_telp        = $_POST['no_telp'];
        $alamat         = $_POST['alamat'];

        $result = $this->model('SupplierModel')->editDataSupplier($kode_supplier, $nama_supplier, $no_telp, $alamat);
        if($result)
        {
            header("Location: http://localhost:8888/Percetakan/dashboard/supplier");
        }
        else
        {
            echo "Gagal!";
        }
    }

    public function deleteOneDataSupplier($kode_supplier)
    {
        $result = $this->model('SupplierModel')->deleteDataSupplier($kode_supplier);
        if($result)
        {
            header("Location: http://localhost:8888/Percetakan/dashboard/supplier");
        }
        else
        {
            echo "Gagal!";
        }
    }
}
