<?php

class KminvoerModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function Auto($Id)
    {
        $sql = "SELECT Id
                        ,Type
                        ,Kenteken
                FROM auto
                WHERE Id = $Id;";

        $this->db->query($sql);

        return $this->db->resultSetAssoc();
    }

    public function updateKmStand($Id, $km)
    {
        $sql = "UPDATE Kilometerstand
                SET KmStand = $km
                WHERE AutoId = $Id;";

        $this->db->query($sql);

        return $this->db->resultSetAssoc();
    }
}
