<?php

namespace App\Services\Cars;

use App\Models\Cars\Car;

use Illuminate\Support\Facades\DB;

class CarService
{

    public Car $carModel;

    public function __construct(Car $carModel)
    {
        $this->carModel = $carModel;
    }
    public function show($id)
    {
        return $this->carModel->find($id);
    }
}
