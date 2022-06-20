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
    public function list($vin, $description, $color, $minPrice)
    {
        return $this->carModel->filterByVin($vin)->filterByDescription($description)->filterByColor($color)->filterByPrice($minPrice)->with(['brand', 'model'])->get();
    }
}
