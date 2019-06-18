<?php

class SupplierModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDataSupplier()
    {
        $this->db->query("SELECT * FROM supplier");
        return $this->db->resultSet();
    }

    public function findDataSupplier($nama_barang)
    {
        $barang = explode(" ", $nama_barang);
        $this->db->query("SELECT supplier.kode_supplier, supplier.nama_supplier FROM supplier, barang WHERE supplier.kode_supplier = barang.kode_supplier AND barang.nama_barang LIKE '%$barang[0]%' ");
        return $this->db->resultSet();
    }

    public function addDataSupplier($kode_supplier, $nama_supplier, $no_telp, $alamat)
    {
        $this->db->query("INSERT INTO supplier VALUES(:kode_supplier, :nama_supplier, :no_telp, :alamat)");
        $this->db->bind('kode_supplier', $kode_supplier);
        $this->db->bind('nama_supplier', $nama_supplier);
        $this->db->bind('no_telp', $no_telp);
        $this->db->bind('alamat', $alamat);
        
        $result = $this->db->execute();
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function editDataSupplier($kode_supplier, $nama_supplier, $no_telp, $alamat)
    {
        $this->db->query("UPDATE supplier SET nama_supplier = :nama_supplier, no_telp = :no_telp, alamat = :alamat WHERE kode_supplier = :kode_supplier");
        $this->db->bind('kode_supplier', $kode_supplier);
        $this->db->bind('nama_supplier', $nama_supplier);
        $this->db->bind('no_telp', $no_telp);
        $this->db->bind('alamat', $alamat);

        $result = $this->db->execute();
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function deleteDataSupplier($kode_supplier)
    {
        $this->db->query("DELETE FROM supplier WHERE kode_supplier = :kode_supplier");
        $this->db->bind('kode_supplier', $kode_supplier);

        $result = $this->db->execute();
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
}
