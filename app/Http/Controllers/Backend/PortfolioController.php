<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CategoryPortfolio;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Category show
    public function PortfolioCategory() {
        $category = CategoryPortfolio::get();

        return view('backend.content.frontend.portfolio_category', compact('category'));
    }

    // store category
    public function PortfolioCategoryStore(Request $request) {
        
        CategoryPortfolio::create([
            'name' => $request->name,
        ]);

        $notification = array(
            'message' => 'Add Category Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function PortfolioCategoryUpdate(Request $request, $id) {

        $category = CategoryPortfolio::find($id);
        $category->update([
            'name' => $request->name,
        ]);

        $notification = array(
            'message' => 'Edit Category Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function PortfolioCategoryDelete($id) {
        CategoryPortfolio::find($id)->delete();

        $notification = array(
            'message' => 'Delete Category Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }


    //show portfolio
    public function Portfolio() {

        $portfolio = Portfolio::latest()->get();
        $category = CategoryPortfolio::get();
        return view('backend.content.frontend.portfolio', compact('portfolio', 'category'));
    }

    // store portfolio
    public function PortfolioStore(Request $request) {

        Portfolio::create([
            'category' => $request->category,
            'name' => $request->name,
            'photos' => $request->photos,
            'title' => $request->title,
            'description' => $request->description,
        ]);

         $notification = array(
            'message' => 'Add Portfolio Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function PortfolioUpdate(Request $request, $id) {

        $portfolio = Portfolio::find($id);

        $portfolio->update([
            'category' => $request->category,
            'name' => $request->name,
            'photos' => $request->photos,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        $notification = array(
            'message' => 'Update Portfolio Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function PortfolioDelete($id) {
        Portfolio::find($id)->delete();

          $notification = array(
            'message' => 'Delete Portfolio Succesfuly', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }
}
