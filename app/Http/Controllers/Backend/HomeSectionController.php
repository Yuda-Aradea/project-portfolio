<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HomeSection;
use Illuminate\Http\Request;

class HomeSectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function SectionHome() {
        $home = HomeSection::first();

        return view('backend.content.frontend.home', compact('home'));
    }

    public function SectionHomeStore(Request $request) {
        $home = HomeSection::first();

        $home->update([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'messenger' => $request->messenger,
            'whatsapp' => $request->whatsapp,
            'email' => $request->email,
            'home_bg' => $request->home_bg,
            'photo_mobile' => $request->photo_mobile,

        ]);

        $notification = array(
            'message' => 'Section Home Updated Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }
}
