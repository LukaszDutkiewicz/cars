<?php

namespace App\Services\Models;

use App\Models\Cars\Model;

use Illuminate\Support\Facades\DB;

class ModelsService
{

    public Model $modelModel;

    public function __construct(Model $modelModel)
    {
        $this->modelModel = $modelModel;
    }
    public function list($name)
    {
        return $this->modelModel->filterByName($name)->get();
    }
}
