<?php

class MainModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getDayTraining($day){
        $query = $this->db->connect()->prepare("SELECT * FROM :day");
        try {
            $query->execute(['day' => $day]);
            return $query->fetch();
        } catch (PDOException $e) {
            return $e;
        }
    }
}

?>
