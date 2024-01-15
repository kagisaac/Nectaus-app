<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Inspection;

class InspectionController extends Controller
{
    public function openInsectionModel()
    {
        return view('formModels.inspectionModel');
    }
    public function displayInspection()
    {
        $inspectionData = Inspection::all();
        return view('dashPages.inspection', ['inspectionData' => $inspectionData]);
    }
    public function displayInspectDash()
    {
        $inspectionData = Inspection::all();
        $inspectionData = $inspectionData->count();
        $healthyHiveCount = Inspection::where('healthStatus', 'health')->count();
        // dd($inspectionData);

        return view(
            'dashPages.home',
            compact('inspectionData', 'healthyHiveCount')
        );
    }

    public function createInspection(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            "hiveSN" => 'required',
            "temperature" => 'required',
            "humidity" => 'required',
            "soundIntensity" => 'required',
            "weight" => 'required',
            "healthStatus" => 'required',
            "deseases" => 'required',
            "summary" => 'required',
        ]);
        $newHive = Inspection::create($data);
        return view('dashPages.inspection');
    }
    
}