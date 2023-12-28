<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Hive;
use App\Models\Hive;

class HiveController extends Controller
{
    public function addHive()
    {
        return view('formModels.addHiveModel');
    }
    public function displayHive()
    {
        $hives = Hive:: all();
        return view('dashPages.hives',['hives'=>$hives]);
    }
    public function createHive(Request $request)
    {
        // dd($request);
        $data = $request-> validate([
            'hiveSN' => 'required',
            'deviceSIN' => 'required',
            'hiveOwner' => 'required',
            'dimensions' => 'required',
            'weight' => 'required',
            'status' => 'required'
        ]);
        $newHive = Hive::create($data);
        return view('dashPages.hives');
    }
}