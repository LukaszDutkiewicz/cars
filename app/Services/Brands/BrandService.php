<?php

namespace App\Services\Brands;

use App\Models\Cars\Brand;

use Illuminate\Support\Facades\DB;

class BrandService
{

    public Brand $brandModel;

    public function __construct(Brand $brandModel)
    {
        $this->brandModel = $brandModel;
    }
    public function show($id)
    {
        return $this->brandModel->with('cars')->find($id);
    }
    public function destroy($id)
    {
        $this->brandModel->destroy($id);
    }
}
