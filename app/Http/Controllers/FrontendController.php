<?php

namespace App\Http\Controllers;

use App\Models\About_area;
use App\Models\Banner_area;
use App\Models\Category;
use App\Models\Contact_description;
use App\Models\Cvdownload;
use App\Models\Design_skills;
use App\Models\Develop_skills;
use App\Models\Education_part;
use App\Models\Experiance_part;
use App\Models\Hire_text;
use App\Models\Logo_and_favicon;
use App\Models\Portfolio_area;
use App\Models\Self_information;
use App\Models\Services_area;
use App\Models\Social_icons;
use App\Models\Testimonial_area;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('portfolio-folder.index',[
            'banner_update_data'=>Banner_area::first(),
            'logo_and_favicon_update_data'=>Logo_and_favicon::first(),
            'social_icons_all_data'=>Social_icons::all()->take(4),
            'about_update_data'=>About_area::first(),
            'self_information_update_data'=>Self_information::first(),
            'services_all_data'=>Services_area::latest()->get(),
            'education_all_data'=>Education_part::latest()->get(),
            'experiance_all_data'=>Experiance_part::latest()->get(),
            'design_skills_all_data'=>Design_skills::all(),
            'develop_skills_all_data'=>Develop_skills::all(),
            'hire_text_update_data'=>Hire_text::first(),
            'testimonial_all_data'=>Testimonial_area::latest()->get(),
            'contact_description_update_data'=>Contact_description::first(),
            'category_all_data'=>Category::latest()->get(),
            'portfolio_area_all_data'=>Portfolio_area::latest()->get(),
            'cv_download'=>Cvdownload::first(),
        ]);
    }
}
