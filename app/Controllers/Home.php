<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $gas = $this->GasModel->getGas()->data;
        $temp = $this->TempModel->getTemp()->data;
        $hum = $this->HumModel->getHumidity()->data;
        $data = [
            'gas' => $gas,
            'temp' => $temp,
            'hum' => $hum,
        ];
        return view('index', $data);
    }

    public function Temp(): string
    {
        return view('register');
    }
}
