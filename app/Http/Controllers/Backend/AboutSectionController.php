<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use App\Models\Qualification;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function SectionAbout() {
        $about = AboutSection::first();
        $education = Qualification::where('category', 'education')->get();
        $experience = Qualification::where('category', 'experience')->get();

        return view('backend.content.frontend.about', compact('about', 'education', 'experience'));
    }

    public function SectionAboutStore(Request $request) {
        $about = AboutSection::first();

        $about->update([
            'title' => $request->title,
            'description' => $request->description,
            'experience' => $request->experience,
            'completed' => $request->completed,
            'support' => $request->support,
            'about_img' => $request->about_img,
        ]);

        $notification = array(
            'message' => 'About Updated Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }


    // Education Store
    public function EducationStore(Request $request) {

        Qualification::create([
            'category' => $request->category,
            'name' => $request->name,
            'title' => $request->title,
            'years' => $request->years,
        ]);
       

        $notification = array(
            'message' => 'Tambah Education Sukses', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // Update Education
    public function EducationUpdate(Request $request, $id) {

        $qualification = Qualification::find($id);
        $qualification->update([
            'name' => $request->name,
            'title' => $request->title,
            'years' => $request->years,
        ]);

        $notification = array(
            'message' => 'Edit Education Sukses', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // Hapus education
    public function EducationDelete($id) {
        Qualification::find($id)->delete();

        $notification = array(
            'message' => 'Hapus Education Sukses', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

     // Experince Store
    public function ExperienceStore(Request $request) {

        Qualification::create([
            'category' => $request->category,
            'name' => $request->name,
            'title' => $request->title,
            'years' => $request->years,
        ]);
       

        $notification = array(
            'message' => 'Tambah Experience Sukses', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // Update Experience
    public function ExperienceUpdate(Request $request, $id) {

        $qualification = Qualification::find($id);
        $qualification->update([
            'name' => $request->name,
            'title' => $request->title,
            'years' => $request->years,
        ]);

        $notification = array(
            'message' => 'Edit Experience Sukses', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // Hapus Experience
    public function ExperienceDelete($id) {
        Qualification::find($id)->delete();

        $notification = array(
            'message' => 'Hapus Experience Sukses', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
