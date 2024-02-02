<?php

namespace App\Http\Controllers\Retailers;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewCategoryController extends Controller
{

    public function index()
    {
        $categories = Category::where('status','0')->get();
         return view('retailers.category.index',compact('categories'));
    }

    public function products($category_slug)
    {
        $category = Category::where('slug',$category_slug)->first();
        if($category)
        {

                return view('Retailers.products.index',compact('category'));
        }
        else
        {
            return redirect()->back();
        }
    }

}
