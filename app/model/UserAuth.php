<?php

class UserAuth
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $user = [
            [
                'nama' => 'Risky',
                'umur' => 20
            ]
            ];
        return $user;
    }

    public function UserLogin($username, $password)
    {
        $this->db->query("SELECT * FROM users WHERE username =:username && password =:password ");
        $this->db->bind('username', $username); // binding data
        $this->db->bind('password', $password); // binding data
        $count = $this->db->rowCount();
        if($count)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
