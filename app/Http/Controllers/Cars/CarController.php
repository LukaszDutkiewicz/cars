<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Services\Cars\CarService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{

    public CarService $carsService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function show($id)
    {
        $car = $this->carService->show($id);
        return view('cars.show', ['car' => $car]);
    }

    public function destroy($id)
    {
        $this->carService->destroy($id);
        return redirect()->route('cars.list');
    }

    public function getCreateView()
    {
        return view('cars.create');
    }

    public function create(Request $request)
    {
        $car = $request->all();
        $this->carService->create($car);
        return redirect()->route('cars.list');
    }

    public function getUpdateView($id)
    {
        $car = $this->carService->show($id);
        return view('view.update');
    }

    public function update(Request $request, $id)
    {
    }
}
