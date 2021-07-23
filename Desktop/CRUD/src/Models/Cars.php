<?php
require __DIR__ . '/Model.php';
class Cars extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->setTable("cars");
    }
    public function save(String $brand, String $model, String $version, String $observation)
    {
        try {
            $sql = "INSERT INTO {$this->getTable()} (brand, model, version, observation) VALUES (:brand, :model, :version, :observation)";
            $stmt = $this->getConn()->prepare($sql);
            $stmt->bindParam(':brand', $brand);
            $stmt->bindParam(':model', $model);
            $stmt->bindParam(':version', $version);
            $stmt->bindParam(':observation', $observation);
            $stmt->execute();
            return true;
        } catch (PDOException $ex) {
            return false;
        }
    }

}
