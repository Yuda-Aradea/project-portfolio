<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ServicesSection;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // show services
    public function Services() {

       $services = ServicesSection::get();

       return view('backend.content.frontend.services', compact('services'));
    }

    // store service 
    public function ServicesStore(Request $request) {
        ServicesSection::create([
            'title' => $request->title,
            'icon' => $request->icon,
            'description' => $request->description,
        ]);

        $notification = array(
            'message' => 'Add Services Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function ServicesUpdate(Request $request, $id) {

        $services = ServicesSection::find($id);

        $services->update([
            'title' => $request->title,
            'icon' => $request->icon,
            'description' => $request->description,
        ]);

        $notification = array(
            'message' => 'Update Services Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function ServicesDelete($id) {

        ServicesSection::find($id)->delete();

        $notification = array(
            'message' => 'Delete Services Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
