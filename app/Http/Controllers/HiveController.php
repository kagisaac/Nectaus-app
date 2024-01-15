<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Hive;
use App\Models\Hive;
use App\Models\Inspection;

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
    
    public function displayHivedash()
    {
        $hives = Hive:: all();
        $hivesCount= $hives->count();
        $healthyHiveCount = Inspection::where('healthStatus', 'healthy')->count();
        $criticalHiveCount = Inspection::where('healthStatus', 'creitical')->count();

        $latestRecord = Inspection::latest()->first();
        $newTemperature = $latestRecord->temperature;
        $totalHiveWeight = Hive::sum('weight');
        
        
        // dd($totalHiveWeight);

        return view('dashPages.home',
            compact('hives', 'hivesCount', 'healthyHiveCount' , 'criticalHiveCount', 'newTemperature', 'totalHiveWeight')
        );
    }
    public function displaySingleHive(Hive $hiveId)
    {
        $hiveSN= $hiveId->hiveSN;

        $singleHiveInspectionData = Inspection::where('hiveSN', $hiveSN)->get();
        // dd($singleHiveInspectionData);
       return view(
            'dashPages.singleHive',
            compact('hiveId' , 'singleHiveInspectionData')
        );
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