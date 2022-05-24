<?php

namespace App\Services\Models;

use App\Models\Cars\Model;

use Illuminate\Support\Facades\DB;

class ModelService
{

    public Model $modelModel;

    public function __construct(Model $modelModel)
    {
        $this->modelModel = $modelModel;
    }
    public function show($id)
    {
        return $this->modelModel->find($id);
    }
    public function destroy($id)
    {
        $this->modelModel->destroy($id);
    }
}
