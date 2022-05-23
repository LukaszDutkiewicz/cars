<?php

namespace App\Http\Controllers\Brands;

use App\Http\Controllers\Controller;
use App\Services\Brands\BrandsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandsController extends Controller
{
    public BrandsService $brandsService;

    public function __construct(BrandsService $brandsService)
    {
        $this->brandsService = $brandsService;
    }

    public function list(Request $request)
    {
        //$brands = DB::table('brands')->get();
        $name = $request->get('name');
        $brands = $this->brandsService->list($name);
        return view('brands.list', ['brands' => $brands]);
    }
}
