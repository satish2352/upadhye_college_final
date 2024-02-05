<?php
namespace App\Http\Repository\Website;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    SocialIcon,
	Marquee,
    MarqueeTab,
    Slider,
    CoursesOffered,
    UpcomingCourses,
    Testimonial,
    DisasterManagementNews,
    EmergencyContact,
    DepartmentInformation,
    VacanciesHeader,
    RTI,
    DisasterForcast,
    PolicyPrivacy,
    TermsCondition
};

class IndexRepository  {

    public function getAllSocialIcon()
    {
        try {
            $data_output = SocialIcon::where('is_active','=',true);
            if (Session::get('language') == 'mar') {
                $data_output =  $data_output->select('icon','url');
            } else {
                $data_output = $data_output->select('icon','url');
            }
            $data_output =  $data_output->get()
                            ->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }	

  	
//     public function getAllMarquee()
// {
//     try {
//         $data_output = Marquee::where('is_active', true);
        
//         if (Session::get('language') == 'mar') {
//             $data_output =  $data_output->select('marathi_title','url');
//         } else {
//             $data_output = $data_output->select('english_title','url');
//         }
        
//         $data_output_marquee = $data_output->get();

//         if (Session::get('language') == 'mar') {
//             $output = $data_output_marquee->implode('marathi_title', '|| ');
//         } else {
//             $output = $data_output_marquee->implode('english_title', ' ||  ');
//         }
//         return $output ;
//     } catch (\Exception $e) {
//         return $e;
//     }
// }
	// public function getAllMarquee()
    // {
    //     try {
    //         $data_output = Marquee::where('is_active','=',true);
    //         if (Session::get('language') == 'mar') {
    //             $data_output =  $data_output->select('marathi_title','url');
    //         } else {
    //             $data_output = $data_output->select('english_title','url');
    //         }
    //         $data_output =  $data_output->get()
    //                         ->toArray();
    //         return  $data_output;
    //     //    echo $data_output;
    //     //    die();
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }   
    public function getAllSlider(){
    try {
        $data_output = Slider::where('is_active', true);

        // Select all fields regardless of language
        $data_output = $data_output->select('rank_no', 'image');

        $data_output = $data_output->get()->toArray();
        return $data_output;
    } catch (\Exception $e) {
        return $e;
    }
  }
  public function getAllCoursesOffered(){
    try {
        $data_output = CoursesOffered::where('is_active', true);
        // Select all fields regardless of language
        $data_output = $data_output->select('id','title','description', 'image');
        $data_output = $data_output->get()->toArray();
        return $data_output;
    } catch (\Exception $e) {
        return $e;
    }
  }
  public function getAllUpcomingCourses(){
    try {
        $data_output = UpcomingCourses::where('is_active', true);
        // Select all fields regardless of language
        $data_output = $data_output->select('id','title','description','start_date','duration','test_mode','test_medium', 'course_fess');
        $data_output = $data_output->get()->toArray();
        
        return $data_output;
    } catch (\Exception $e) {
        return $e;
    }
  }
  public function getAllTestimonial(){
    try {
        $data_output = Testimonial::where('is_active', true);
        // Select all fields regardless of language
        $data_output = $data_output->select('id','title','description','position','image');
        $data_output = $data_output->get()->toArray();
        
        return $data_output;
    } catch (\Exception $e) {
        return $e;
    }
  }

 // Repository file
public function getAllMarqueeTabAvailableCategories()
{
    try {
        $data_output = MarqueeTab::where('is_active', true)->select('id', 'title')->get()->toArray();
        return $data_output;
    } catch (\Exception $e) {
        return $e;
    }
}

    public function getAllDisasterManagementNews()
    {
        try {
            $data_output = DisasterManagementNews::where('is_active','=',true);
            if (Session::get('language') == 'mar') {
                $data_output =  $data_output->select('marathi_title','marathi_description','english_url','disaster_date','marathi_image','id');
            } else {
                $data_output = $data_output->select('english_title','english_description','english_url','disaster_date','english_image','id');
            }
            $data_output =  $data_output->latest()->take(3)->get()
                            ->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }
    
    public function getAllEmergencyContact()
    {
        try {
            $data_output = EmergencyContact::where('is_active','=',true);
            if (Session::get('language') == 'mar') {
                $data_output =  $data_output->select('marathi_title','marathi_name','marathi_address','email','marathi_number','marathi_landline_no');
            } else {
                $data_output = $data_output->select('english_title','english_name','english_address','email','english_number','english_landline_no');
            }
            $data_output =  $data_output->get()
                            ->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getLimitDepartmentInformation()
    {
        try {
            $data_output = DepartmentInformation::where('is_active','=',true);
            if (Session::get('language') == 'mar') {
                $data_output =  $data_output->select('marathi_title','marathi_description','url','marathi_image','id');
            } else {
                $data_output = $data_output->select('english_title','english_description','url','english_image','id');
            }
            $data_output =  $data_output->latest()->take(6)->get()
                            ->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getAllDepartmentInformation()
    {
        try {
            $data_output = DepartmentInformation::where('is_active','=',true);
            if (Session::get('language') == 'mar') {
                $data_output =  $data_output->select('marathi_title','marathi_description','url','marathi_image','id');
            } else {
                $data_output = $data_output->select('english_title','english_description','url','english_image','id');
            }
            $data_output =  $data_output->get()
                            ->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getById($id)
    {
        try {
            $data_output = DisasterManagementNews::where('is_active','=',true);
            if (Session::get('language') == 'mar') {
                $data_output =  $data_output->select('marathi_title','marathi_description','marathi_image');
            } else {
                $data_output = $data_output->select('english_title','english_description','english_image');
            }
            // $data_output =  $data_output->get()
            //                 ->toArray();
                            $data_output = $data_output->where('id', $id)->get()->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getByIdDepartmentInformation($id)
    {
        try {
            $data_output = DepartmentInformation::where('is_active','=',true);
            if (Session::get('language') == 'mar') {
                $data_output =  $data_output->select('marathi_title','marathi_description','marathi_image','marathi_image_new','url');
            } else {
                $data_output = $data_output->select('english_title','english_description','english_image','english_image_new','url');
            }
             $data_output = $data_output->where('id', $id)->get()->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getAllWebDisaterForcast(){
        try {
             $data_output = DisasterForcast::where('is_active','=',true);
           
            if (Session::get('language') == 'mar') {
                $data_output =  $data_output->select('id','marathi_title','marathi_description');
            } else {
                $data_output = $data_output->select('id','english_title','english_description');
            }
            $data_output =  $data_output->get()
                            ->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getByIdDisasterForecast($id)
    {
        try {
            $data_output = DisasterForcast::where('is_active','=',true);
            if (Session::get('language') == 'mar') {
                $data_output =  $data_output->select('id','marathi_title','marathi_description');
            } else {
                $data_output = $data_output->select('id','english_title','english_description');
            }
            $data_output = $data_output->where('id', $id)->get()->toArray();
           
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getAllVacancies()
    {
        try {
            $data_output = VacanciesHeader::where('is_active','=',true);
            if (Session::get('language') == 'mar') {
                $data_output =  $data_output->select('marathi_title','marathi_pdf');
            } else {
                $data_output = $data_output->select('english_title','english_pdf');
            }
            $data_output =  $data_output->get()
                            ->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

    
    public function getAllRTI()
    {
        try {
            $data_output = RTI::where('is_active','=',true);
            if (Session::get('language') == 'mar') {
                $data_output =  $data_output->select('marathi_title','marathi_pdf');
            } else {
                $data_output = $data_output->select('english_title','english_pdf');
            }
            $data_output =  $data_output->get()
                            ->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getAllDisaterForcast(){
        try {
            // $data_output = DisasterForcast::where('is_active','=',true);
            $data_output = DisasterForcast::where('is_active', true)
            ->orderBy('id', 'desc')
            ->limit(1);
            // ->get();
            if (Session::get('language') == 'mar') {
                $data_output =  $data_output->select('id','marathi_title','marathi_description');
            } else {
                $data_output = $data_output->select('id','english_title','english_description');
            }
            $data_output =  $data_output->get()
                            ->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getPrivacyPolicy(){
        try {
            $data_output =  PolicyPrivacy::where('is_active','=',true);
            if (Session::get('language') == 'mar') {
                $data_output =  $data_output->select('marathi_title','marathi_description');
            } else {
                $data_output = $data_output->select('english_title','english_description');
            }
            $data_output =  $data_output->get()
                            ->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }
    
    public function getTermCondition(){
        try {
            $data_output =  TermsCondition::where('is_active','=',true);
            if (Session::get('language') == 'mar') {
                $data_output =  $data_output->select('marathi_title','marathi_description');
            } else {
                $data_output = $data_output->select('english_title','english_description');
            }
            $data_output =  $data_output->get()
                            ->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }   

    // ====================

    public function showParticularUpcominCourses()
    {
        try {
            $data_output = UpcomingCourses::where('is_active','=',true);
            $data_output =  $data_output->select('title','description','start_date','duration','test_mode', 'test_medium','course_fess','id');
            $data_output =  $data_output->get()
                            ->toArray();
            return  $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }
}