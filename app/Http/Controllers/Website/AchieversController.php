<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AchieversModel;

class AchieversController extends Controller
{
    public function achiever()
    {
        try {
            $jeeAdvancedData=AchieversModel::where('achieversType','JEE ADVANCED')->get();
            $jeeMainsData=AchieversModel::where('achieversType','JEE MAINS')->get();
            $mhtCetData=AchieversModel::where('achieversType','MHT-CET-2023')->get();
            $neetData=AchieversModel::where('achieversType','NEET-2023-ACHIEVER')->get();
            // dd($neetData);
            return view('website.pages.achievers.achiever',compact('jeeAdvancedData','jeeMainsData','mhtCetData','neetData'));
        } catch (\Exception $e) {
            return $e;
        }
    }
}
