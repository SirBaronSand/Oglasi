<?php

class Database
{
    private $host="localhost";
    private $db_name="oglasi";
    private $username="root";
    private $password="9001";
    private $conn;

    public function connect() //ovo je metoda
    {
        $this->conn=null;
        try
        {
            $this->conn=new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->username,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e)
        {
            echo "Greška prilikom spajanja".$e->getMessage();
        }
        return $this->conn;
    }
}




?>