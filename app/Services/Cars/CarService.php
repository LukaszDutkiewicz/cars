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
        return $this->carModel->with(['brand', 'model'])->find($id);
    }
    public function destroy($id)
    {
        $this->carModel->destroy($id);
    }

    public function create($car)
    {
        $this->carModel::create($car);
    }

    public function update($newCar, $id)
    {
        $car = $this->show($id);
        $car->update($newCar);
    }

    public function addPhoto($file, $id)
    {
        $fileName = $id . '.jpg';
        $this->putToStorage($file, $fileName);
        $car = $this->show($id);
        $car->photo = $fileName;
        $car->save();
    }

    public function putToStorage($file, $fileName)
    {
        //dd($file);
        $file->storeAs('public', $fileName);
    }
}
