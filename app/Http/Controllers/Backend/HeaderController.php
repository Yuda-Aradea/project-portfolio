<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Icon controller
    public function RemixIconShow() {

        return view('backend.content.icon.remix_icon');
    }

    public function MaterialIconShow() {

        return view('backend.content.icon.material_icon');
    }

    public function FontawesomeIconShow() {

        return view('backend.content.icon.fontawesome');
    }


    // Header content
    public function AdminHeader(){
        $header = Header::first();

        return view('backend.content.frontend.header', compact('header'));
    }

    // store header 
    public function StoreHeader(Request $request) {
        $header = Header::first();
  
        $header->update([
        'favicon'       => $request->favicon,
        'title'         => $request->title,
        'logo'          => $request->logo,
        'facebook'      => $request->facebook,
        'instagram'     => $request->instagram,
        'twitter'       => $request->twitter,
        'copyright'     => $request->copyright,
        ]);

        $notification = array(
            'message' => 'Headers Updated Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
