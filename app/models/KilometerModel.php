<?php

class KilometerModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAutos()
    {
        $sql = "SELECT Id
                        ,Kenteken
                        ,Type
                FROM auto;";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
