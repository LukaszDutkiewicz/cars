<?php

namespace App\Http\Controllers\Brands;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Brands\BrandService;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public BrandService $brandService;

    public function __construct(brandService $brandService)
    {
        $this->brandService = $brandService;
    }
    public function show($id)
    {
        $brand = $this->brandService->show($id);
        return view('brands.show', ['brand' => $brand]);
    }

    public function destroy($id)
    {
        $this->brandService->destroy($id);
        return redirect()->route('brands.list');
    }
}
