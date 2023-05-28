<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Skills1_detail;
use App\Models\Skills1Section;
use App\Models\Skills2_detail;
use App\Models\Skills2Section;
use App\Models\Skills3_detail;
use App\Models\Skills3Section;
use Illuminate\Http\Request;

class SkillsSectionCOntroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Show data skills 
    public function SectionSkills() {
       $skill1 = Skills1Section::first();
       $skill1_detail = Skills1_detail::get();
       $skill2 = Skills2Section::first();
       $skill2_detail = Skills2_detail::get();
       $skill3 = Skills3Section::first();
       $skill3_detail = Skills3_detail::get();

       return view('backend.content.frontend.skills', compact('skill1', 'skill1_detail', 'skill2', 'skill2_detail', 'skill3', 'skill3_detail'));
    }

    // skill 1 section update
    public function UpdateSkill1(Request $request) {
        $skill1 = Skills1Section::first();

        $skill1->update([
            'icon' => $request->icon,
            'name' => $request->name,
            'title' => $request->title,
        ]);

         $notification = array(
            'message' => 'Skill 1 Updated Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // skill1 detail store
    public function SKill1DetailStore(Request $request) {

        Skills1_detail::create([
            'name' => $request->name,
            'percentage' => $request->percentage,
        ]);

        $notification = array(
            'message' => 'Skill 1 Detail Add Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function SKill1DetailUpdate(Request $request, $id) {
        $skill1 = Skills1_detail::find($id);

        $skill1->update([
            'name' => $request->name,
            'percentage' => $request->percentage,
        ]);

        $notification = array(
            'message' => 'Skill 1 Detail Updated Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function SKill1DetailDelete($id) {
        Skills1_detail::find($id)->delete();

        $notification = array(
            'message' => 'Skill 1 Detail Delete Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // skill 2 section update
    public function UpdateSkill2(Request $request) {
        $skill2 = Skills2Section::first();

        $skill2->update([
            'icon' => $request->icon,
            'name' => $request->name,
            'title' => $request->title,
        ]);

         $notification = array(
            'message' => 'Skill 2 Updated Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // skill 2 detail store
    public function SKill2DetailStore(Request $request) {

        Skills2_detail::create([
            'name' => $request->name,
            'percentage' => $request->percentage,
        ]);

        $notification = array(
            'message' => 'Skill 2 Detail Add Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function SKill2DetailUpdate(Request $request, $id) {
        $skill2 = Skills2_detail::find($id);

        $skill2->update([
            'name' => $request->name,
            'percentage' => $request->percentage,
        ]);

        $notification = array(
            'message' => 'Skill 2 Detail Updated Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function SKill2DetailDelete($id) {
        Skills2_detail::find($id)->delete();

        $notification = array(
            'message' => 'Skill 2 Detail Delete Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // skill 3 section update
    public function UpdateSkill3(Request $request) {
        $skill3 = Skills3Section::first();

        $skill3->update([
            'icon' => $request->icon,
            'name' => $request->name,
            'title' => $request->title,
        ]);

         $notification = array(
            'message' => 'Skill 3 Updated Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // skill3 detail store
    public function SKill3DetailStore(Request $request) {

        Skills3_detail::create([
            'name' => $request->name,
            'percentage' => $request->percentage,
        ]);

        $notification = array(
            'message' => 'Skill 3 Detail Add Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function SKill3DetailUpdate(Request $request, $id) {
        $skill3 = Skills3_detail::find($id);

        $skill3->update([
            'name' => $request->name,
            'percentage' => $request->percentage,
        ]);

        $notification = array(
            'message' => 'Skill 3 Detail Updated Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function SKill3DetailDelete($id) {
        Skills3_detail::find($id)->delete();

        $notification = array(
            'message' => 'Skill 3 Detail Delete Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
