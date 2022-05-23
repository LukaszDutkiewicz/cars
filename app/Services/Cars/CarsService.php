<?php

namespace App\Services\Cars;

use App\Models\Cars\Car;

use Illuminate\Support\Facades\DB;

class CarsService
{

    public Car $carModel;

    public function __construct(Car $carModel)
    {
        $this->carModel = $carModel;
    }
    public function list($vin, $model, $description, $color, $minPrice)
    {
        return $this->carModel->filterByVin($vin)->filterByModel($model)->filterByDescription($description)->filterByColor($color)->filterByPrice($minPrice)->get();
    }
}
