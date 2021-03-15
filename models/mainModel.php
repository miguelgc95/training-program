<?php

class MainModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getDayTraining(){
        $query = $this->db->connect()->prepare("SELECT * FROM original WHERE name='monday'");
        try {
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            echo $e;
            return $e;
        }
    }
}

?>
