<?php

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $stmt;


    public function __construct()
    {

        try {
            $this->dbh = new PDO('mysql:host='. $this->host .';dbname='. $this->db_name, $this->user, $this->password);
            // mengatur untuk mengaktifkan PDO error mode kepada exception
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Failed " . $e->getMessage();
        }
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    // untuk menanggulangi sql injection maka dibuatkan binding value
    public function bind($param, $value, $type = null)
    {
        if(is_null($type))
        {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }

            $this->stmt->bindValue($param, $value, $type);
        }
    }

    public function execute()
    {
        $this->stmt->execute();
    }

    // jika data yang ditampilkan banyak
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
        $this->execute();
        return $this->stmt->rowCount();
    }
}
