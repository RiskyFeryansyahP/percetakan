<?php

class BarangMasukModel   
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarangMasuk() 
    {
        $this->db->query("SELECT barang.nama_barang, supplier.nama_supplier, barang_masuk.stock, barang_masuk.tgl_masuk 
                                    FROM barang_masuk, barang, supplier 
                            WHERE barang_masuk.kode_barang = barang.kode_barang AND barang_masuk.kode_supplier = supplier.kode_supplier");
        return $this->db->resultSet();
    }

    public function addOneBarangMasuk($kode_barang, $kode_supplier, $stock, $tgl_masuk)
    {
        $this->db->query("INSERT INTO barang_masuk(kode_barang, kode_supplier, stock, tgl_masuk) VALUES(:kode_barang, :kode_supplier, :stock, :tgl_masuk) ");
        $this->db->bind('kode_barang', $kode_barang);
        $this->db->bind('kode_supplier', $kode_supplier);
        $this->db->bind('stock', $stock);
        $this->db->bind('tgl_masuk', $tgl_masuk);
        
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
