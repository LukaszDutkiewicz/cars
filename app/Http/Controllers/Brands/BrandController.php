<?php

namespace App\Http\Controllers\Brands;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function show($id)
    {
        $brand = DB::table('brands')->find($id);
        return view('brands.show', ['brand' => $brand]);
    }

    public function destroy($id)
    {
        DB::table('brand')->where('id', $id)->delete();
        return redirect()->route('brands.list');
    }
}
