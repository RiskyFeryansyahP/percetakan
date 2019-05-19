<?php

class BarangModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getBarang()
    {
        $this->db->query("SELECT * FROM barang");
        return $this->db->resultSet();
    }

    public function addBarang($kode_barang, $nama_barang, $stock)
    {
        $this->db->query("INSERT INTO barang VALUES(:kode_barang, :nama_barang, :stock)");

        $this->db->bind('kode_barang', $kode_barang);
        $this->db->bind('nama_barang', $nama_barang);
        $this->db->bind('stock', $stock);

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

    public function deleteBarang($kode_barang)
    {
        $this->db->query("DELETE FROM barang WHERE kode_barang=:kode_barang");

        $this->db->bind('kode_barang', $kode_barang);

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
