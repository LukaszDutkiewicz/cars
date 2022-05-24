<?php

namespace App\Http\Controllers\Models;

use App\Http\Controllers\Controller;
use App\Services\Models\ModelsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModelsController extends Controller
{

    public ModelsService $modelsService;

    public function __construct(ModelsService $modelsService)
    {
        $this->modelsService = $modelsService;
    }

    public function list(Request $request)
    {
        $name = $request->get('name');
        $models = $this->modelsService->list($name);
        return view('models.list', ['models' => $models]);
    }
}
