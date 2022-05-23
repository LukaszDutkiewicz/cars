<?php

namespace App\Services\Brands;

use App\Models\Cars\Brand;

use Illuminate\Support\Facades\DB;

class BrandsService
{

    public Brand $brandModel;

    public function __construct(Brand $brandModel)
    {
        $this->brandModel = $brandModel;
    }
    public function list($name)
    {
        return $this->brandModel->filterByName($name);
    }
}
