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
}
