<?php

class Kilometer extends BaseController
{
    private $kilometerModel;

    public function __construct()
    {
        $this->kilometerModel = $this->model('KilometerModel');
    }

    public function index($id = NULL)
    {
        $result = $this->kilometerModel->getAutos();

        if ($result == null) {
            $th = "";
            $rows = "<h2>Er is iets fout gegaan bij het laden van het overzicht</h2>";
            header("refresh:3;../../home");
        } else {
            $th = "<th>Type</th>
            <th>Kenteken</th>
            <th>KmStand Toevoegen</th>";

            $result = $this->kilometerModel->getAutos();
            $rows = "";
            foreach ($result as $kilometer) {
                $rows .= "<tr>
                <td>$kilometer->Type</td>
                <td>$kilometer->Kenteken</td>
                <td>
                    <a href='kminvoer/id/{$kilometer->Id}'>
                        <i class='bx bx-plus-medical' style='color:#29fd53'></i>
                    </a>
                </td>
                </tr>";
            }
        }


        $data = [
            'title' => 'Overzicht wagenpark',
            'rows' => $rows,
            'th' => $th,
            'id' => $id
        ];

        $this->view('kilometer/kilometer', $data);
    }
}
