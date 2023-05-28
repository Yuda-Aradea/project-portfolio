<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Logout for afte reset password
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('success', "Update password success!". "<br/>" ."Silakan Login kembali");

    } //endmethod

    // Profile setting
    public function ProfileSetting() {

        $id = Auth::user()->id;
        $user = User::find($id);

        return view('backend.content.profile', compact('user'));
    }

    public function ProfileStore(Request $request) {

        $id = Auth::user()->id;
        $user = User::find($id);
        $photos = $user->photos;
        $old_image = $request->old_image;

        if ($request->file('photos')) {
            $image = $request->file('photos');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($image->getClientOriginalExtension());
            $img_name = $name_gen. '.'.$img_ext;
            $up_location = 'upload/profile/';
            $last_img = $up_location.$img_name;
            $image->move($up_location,$img_name);

            if (!empty($photos)) { 
                unlink($old_image);
            }

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone_number' => $request->phone_number,
                'photos' => $last_img,

            ]); 

            $notification = array(
            'message' => 'Profile Updated With Image Successfully', 
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);

        } else{

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone_number' => $request->phone_number,

            ]); 
            $notification = array(
            'message' => 'Profile Updated Without Image Successfully', 
            'alert-type' => 'info'
        );
 
        return redirect()->back()->with($notification);

        } // end Else
    }

     // update password method
    public function UpdatePassword(Request $request) {

        $validateData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',

        ]);

        $hashedPassword = Auth::user()->password;


        if(Hash::check($request->current_password, $hashedPassword)) {
            $users = User::find(Auth::id());
            $users->password = ($request->new_password);
            $users->save();

            
            return redirect()->route('admin.logout');
        } else {
            return redirect()->back()->with('password', 'error message')->withErrors('current password is not match!');
                                    
        }

    }//End Method
}
