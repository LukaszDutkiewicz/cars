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
        //$car = DB::table('cars')->find($id);
        $car = $this->carService->show($id);
        return view('cars.show', ['car' => $car]);
    }

    public function destroy($id)
    {
        DB::table('cars')->where('id', $id)->delete();
        return redirect()->route('cars.list');
    }
}
