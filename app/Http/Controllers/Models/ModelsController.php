<?php

namespace App\Http\Controllers\Models;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModelsController extends Controller
{
    public function list()
    {
        $models = DB::table('models')->get();
        return view('models.list', ['models' => $models]);
    }
}
