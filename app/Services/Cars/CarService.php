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
        return $this->carModel->with('brand', 'model')->find($id);
    }
    public function destroy($id)
    {
        $this->carModel->destroy($id);
    }

    public function create($car)
    {
        $this->carModel::create($car);
    }
}
