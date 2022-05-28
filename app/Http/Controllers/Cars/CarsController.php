<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Services\Cars\CarsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarsController extends Controller
{

    public CarsService $carsService;

    public function __construct(CarsService $carsService)
    {
        $this->carsService = $carsService;
    }

    public function list(Request $request)
    {
        $vin = $request->get('vin');
        $color = $request->get('color');
        $minPrice = $request->get('minPrice') ? $request->get('minPrice') : 0;
        $description = $request->get('description');
        $cars = $this->carsService->list($vin, $description, $color, $minPrice);
        return view('cars.list', ['cars' => $cars]);
    }
}
