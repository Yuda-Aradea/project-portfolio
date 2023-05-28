<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use App\Models\CategoryPortfolio;
use App\Models\ContactForm;
use App\Models\Header;
use App\Models\HomeSection;
use App\Models\Portfolio;
use App\Models\Qualification;
use App\Models\ServicesSection;
use App\Models\Skills1_detail;
use App\Models\Skills1Section;
use App\Models\Skills2_detail;
use App\Models\Skills2Section;
use App\Models\Skills3_detail;
use App\Models\Skills3Section;
use App\Models\Testimonials_Section;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function FrontendHome() {

        $header = Header::first();
        $home = HomeSection::first();
        $about = AboutSection::first();
        $education = Qualification::where('category', 'education')->get();
        $experience = Qualification::where('category', 'experience')->get();
        $skill1 = Skills1Section::first();
        $skill1_detail = Skills1_detail::get();
        $skill2 = Skills2Section::first();
        $skill2_detail = Skills2_detail::get();
        $skill3 = Skills3Section::first();
        $skill3_detail = Skills3_detail::get();
        $category_portfolio = CategoryPortfolio::get();
        $portfolio = Portfolio::latest()->get();
        $services = ServicesSection::get();
        $testi = Testimonials_Section::latest()->get();
        
        

        return view('frontend.index', compact('header', 'home', 'about' , 'education', 'experience', 'skill1', 'skill1_detail', 'skill2', 'skill2_detail', 'skill3', 'skill3_detail', 'category_portfolio', 'portfolio', 'services', 'testi'));
    }

    // send message contact form
    public function SendMessage(Request $request) {
        ContactForm::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return redirect('/#contact')->with('success', 'Your message was successfully sent');
    }
}
