<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CampusModel;

class CampusController extends Controller
{
    public function campus()
    {
        try {
            $addData = CampusModel::get();
            return view('website.pages.campus.campus', ['addData' => $addData]);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function popularity()
    {
        try {
            $popularityData = CampusModel::where('imageType', 'popularity')->get();
            return $popularityData;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function trending()
    {
        try {
            $trendingData = CampusModel::where('imageType', 'trending')->get();
            return $trendingData;

        } catch (\Exception $e) {
            return $e;
        }
    }

    public function featured()
    {
        try {
             
            $featuredData = CampusModel::where('imageType', 'featured')->get();
            return $featuredData;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function all()
    {
        try {
             
            $allData = CampusModel::get();
            return $allData;
        } catch (\Exception $e) {
            return $e;
        }
    }
}

