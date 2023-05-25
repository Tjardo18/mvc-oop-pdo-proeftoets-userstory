<?php

class Kminvoer extends BaseController
{
    private $kminvoerModel;

    public function __construct()
    {
        $this->kminvoerModel = $this->model('KminvoerModel');
    }

    public function index($id = NULL)
    {
        $test = $this->kminvoerModel->Auto($id);

        
        $data = [
            'title' => 'Invoeren Kilometerstand',
            'type' => $test['Type'],
            'kenteken' => $test['Kenteken']
        ];
        
        $this->view('kminvoer/kminvoer', $data);
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            try {
                $km = $_POST['kmStand'];
                $this->kminvoerModel->updateKmStand($id, $km);
                echo '<h2>De nieuwe kilometerstand is toegevoegd</h2>';
                header("refresh:3;../../kilometer");
            } catch (PDOException $e) {
                // error
                console_log($e->getMessage());
            }

            exit();
        }
    }
}
