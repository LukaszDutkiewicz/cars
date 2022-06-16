<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Services\Cars\CarService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Cars\CreateCarRequest;

class ApiCarController extends Controller
{

    public CarService $carsService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function show($id)
    {
        $car = $this->carService->show($id);
        return response()->json(['car' => $car]);
    }

    public function destroy($id)
    {
        $this->carService->destroy($id);
        return response()->json(['message' => 'usunieto']);
    }

    public function getCreateView()
    {
        return view('cars.create');
    }

    public function create(CreateCarRequest $request)
    {
        $validator = $request->validated();
        $car = $request->all();
        $this->carService->create($car);
        return response()->json(['message' => 'Prawidlowo dodano samochód']);
    }

    public function getUpdateView($id)
    {
        $car = $this->carService->show($id);
        return view('cars.update', ['car' => $car]);
    }

    public function update(Request $request, $id)
    {
        $newCar = $request->all();
        $this->carService->update($newCar, $id);
        return response()->json(["message" => 'Prawidlowo zaktualizowano']);
    }
}
