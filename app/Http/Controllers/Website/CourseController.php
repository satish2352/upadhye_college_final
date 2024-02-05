<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseDetailsModel;
Use App\Models\ServiceMasters;
class CourseController extends Controller
{
    public function courses()
    {
        try {
             $combinedData = CourseDetailsModel::join('courses', 'courses.id', '=', 'course_details.course_id')
                        ->select('course_details.*' ,'courses.service_name')
                        ->get();
            
            return view('website.pages.courses.course',compact('combinedData'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function engg()
    {
        try {
        $combinedData = CourseDetailsModel::join('courses', 'courses.id', '=', 'course_details.course_id')
                        ->where('course_id',1)
                        ->select('course_details.*' ,'courses.service_name')
                        ->get();      
            return view('website.pages.courses.engg',compact('combinedData'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function medical()
    {
        try
            {
                $combinedData = CourseDetailsModel::join('courses', 'courses.id', '=', 'course_details.course_id')
                    ->where('course_id',3)
                    ->select('course_details.*' ,'courses.service_name')
                    ->get();            
                    return view('website.pages.courses.medical',compact('combinedData'));
            }    catch (\Exception $e) {
            return $e;
        }
    }
    public function science()
    {
        try
            {
                $combinedData = CourseDetailsModel::join('courses', 'courses.id', '=', 'course_details.course_id')
                    ->where('course_id',2)
                    ->select('course_details.*' ,'courses.service_name')
                    ->get();            
                    return view('website.pages.courses.science',compact('combinedData'));
            }    catch (\Exception $e) {
            return $e;
        }
    }
}
