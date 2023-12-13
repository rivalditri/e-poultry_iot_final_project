<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Backend extends BaseController
{

    public function getAllGas()
    {
        $result = $this->GasModel->getGases();
        $result = array_reverse($result);
        return $this->response->setStatusCode(200)->setJSON($result);
    }
    public function getAllTemp()
    {
        $result = $this->TempModel->getTemps();
        $result = array_reverse($result);
        return $this->response->setStatusCode(200)->setJSON($result);
    }
    public function getAllHum()
    {
        $result = $this->HumModel->getHumidities();
        $result = array_reverse($result);
        return $this->response->setStatusCode(200)->setJSON($result);
    }

    public function insert($temp, $hum, $gas)
    {
        $dataGas = [
            'data' => $gas,
        ];
        $result1 = $this->GasModel->insert($dataGas);
        $dataTemp = [
            'data' => $temp,
        ];
        $result2 = $this->TempModel->insert($dataTemp);
        $dataHum = [
            'data' => $hum,
        ];
        $result3 = $this->HumModel->insert($dataHum);
        if ($result1 || $result2 || $result3) {
            echo "Data berhasil disimpan";
        } else {
            echo "Data gagal disimpan";
        }
    }

    public function getConfig()
    {
        $result = $this->AlertModel->find(1);
        return $this->response->setStatusCode(200)->setJSON($result);
    }

    public function setConfig()
    {
        $sensor = $this->request->getPost('sensor');
        $value  = $this->request->getPost('value');
        switch ($sensor) {
            case 'temp':
                $data = [
                    'temp' => $value,
                ];
                $result = $this->AlertModel->update(1, $data);
                if ($result) {
                    echo "Data berhasil disimpan";
                } else {
                    echo "Data gagal disimpan";
                }
                break;
            case 'hum':
                $data = [
                    'hum' => $value,
                ];
                $result = $this->AlertModel->update(1, $data);
                if ($result) {
                    echo "Data berhasil disimpan";
                } else {
                    echo "Data gagal disimpan";
                }
                break;
            case 'gas':
                $data = [
                    'gas' => $value,
                ];
                $result = $this->AlertModel->update(1, $data);
                if ($result) {
                    echo "Data berhasil disimpan";
                } else {
                    echo "Data gagal disimpan";
                }
                break;
            default:
                echo "Data gagal disimpan";
                break;
        }
    }
}
