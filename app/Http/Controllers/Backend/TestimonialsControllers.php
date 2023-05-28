<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use App\Models\Testimonials_Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Yajra\DataTables\Facades\DataTables;

class TestimonialsControllers extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // show testimonials
    public function Testimonials() {
        $testi = Testimonials_Section::get();

        return view('backend.content.frontend.testimonials', compact('testi'));
    }

    // store testimonials
    public function TestimonialsStore(Request $request) {

        Testimonials_Section::create([
            'name' => $request->name,
            'title' => $request->title,
            'date' => $request->date,
            'photos' => $request->photos,
            'description' => $request->description,
        ]);

        $notification = array(
            'message' => 'Add Testimonials Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // update testimonials
    public function TestimonialsUpdate(Request $request, $id) {

        $testi = Testimonials_Section::find($id);

        $testi->update([
            'name' => $request->name,
            'title' => $request->title,
            'date' => $request->date,
            'photos' => $request->photos,
            'description' => $request->description,
        ]);

        $notification = array(
            'message' => 'Edit Testimonials Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // delete testimonials
    public function TestimonialsDelete($id) {

        Testimonials_Section::find($id)->delete();

        $notification = array(
            'message' => 'Delete Testimonials Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // message from contact form
    public function Messages(Request $request) {

        if ($request->ajax()) {
                $data = ContactForm::select('id', 'name', 'email', 'phone', 'message')->latest()->get();
                return Datatables::of($data)->addIndexColumn()
                
                ->addColumn('checkbox', '<input type="checkbox" name="users_checkbox[]" class="users_checkbox" value="{{$id}}" />')
                ->rawColumns(['checkbox','action'])
                ->make(true);
      }
        return view('backend.content.frontend.messages');
    }

    public function destroy($id)
    {
        $data = ContactForm::findOrFail($id);
        $data->delete();
    }

    function removeall(Request $request)
    {
        $user_id_array = $request->input('id');
        $user = ContactForm::whereIn('id', $user_id_array);
        $user->delete();
        
    }

}
