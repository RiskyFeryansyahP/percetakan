<?php

class Supplier extends Controller
{
    public function getDataSupplier()
    {
        $nama_barang = $_POST['nama_barang'];

        $result = $this->model('SupplierModel')->findDataSupplier($nama_barang);

        $dataArr = array();

        foreach ($result as $data ) {
            $dataArr[] = array(
                "kode_supplier" => $data['kode_supplier'],
                "nama_supplier" => $data['nama_supplier']
            );
        };

        echo json_encode($dataArr);
    }

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
