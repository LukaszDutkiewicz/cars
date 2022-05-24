<?php

namespace App\Http\Controllers\Models;

use App\Http\Controllers\Controller;
use App\Services\Models\ModelService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModelController extends Controller
{

    public ModelService $modelsService;

    public function __construct(ModelService $modelService)
    {
        $this->modelService = $modelService;
    }

    public function show($id)
    {
        $model = $this->modelService->show($id);
        return view('models.show', ['model' => $model]);
    }

    public function destroy($id)
    {
        $this->modelService->destroy($id);
        return redirect()->route('models.list');
    }
}
