<?php
abstract class Model
{
    private $conn;
    private $table = "";
    private $server = "localhost";
    private $username = 'root';
    private $password = '';
    private $db = 'projeto_mm_tecnologia';
    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host={$this->server};dbname={$this->db}", $this->username, $this->password);
        } catch (PDOException $ex) {
            exit("Não foi possível conectar com o banco de dados");
        }
    }
    public function getConn()
    {
        return $this->conn;
    }
    public function setTable(String $table)
    {
        $this->table = $table;
    }
    public function getTable()
    {
        return $this->table;
    }
    public function get()
    {
        try {
            $sql = "SELECT * FROM {$this->table}";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $ex) {
            return [];
        }
    }
}
