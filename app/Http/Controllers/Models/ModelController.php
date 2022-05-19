<?php

namespace App\Http\Controllers\Models;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModelController extends Controller
{
    public function show($id)
    {
        $model = DB::table('model')->find($id);
        return view('models.show', ['model' => $model]);
    }

    public function destroy($id)
    {
        DB::table('models')->where('id', $id)->delete();
        return redirect()->route('models.list');
    }
}
