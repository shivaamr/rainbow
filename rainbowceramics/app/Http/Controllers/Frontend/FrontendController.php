<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class FrontendController extends Controller
{
    public function index()
    {
        $trendingproducts = Product::where('trending','1')->latest()->take(10)->get();
        $newarrivalproducts = Product::latest()->take(6)->get();
        $featuredProducts = Product::where('featured','1')->latest()->take(4)->get();
        return view('Frontend.index',compact('trendingproducts','newarrivalproducts','featuredProducts'));


    }
    public function searchProducts(Request $request)

    {


            if($request->search)
            {
                $searchProducts = Product::where('name','LIKE','%'.$request->search.'%')->latest()->paginate(10);
                return view('frontend.pages.searchproducts',compact('searchProducts'));
            }

            else
            {
                    return redirect()->back()->with('message','SORRY');
            }



    }
    public function newarrivals()

    {
        $newArrivalProducts = Product::latest()->take(4)->get();
        return view('frontend.pages.new-arrival',compact('newArrivalProducts'));
    }



    public function featuredproducts()

    {
        $featuredProducts = Product::where('featured','1')->latest()->take(4)->get();
        return view('frontend.pages.featuredproducts',compact('featuredProducts'));
    }

    public function categories()
    {
        $categories = Category::where('status','0')->get();
         return view('Frontend.collections.category.index',compact('categories'));
    }
    public function products($category_slug)
    {
        $category = Category::where('slug',$category_slug)->first();
        if($category)
        {

                return view('Frontend.collections.products.index',compact('category'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function productView(string $slug,string $pslug)
    {
        $category= Category::where('slug', $slug)->first();
        if($category){
            $product= $category->products()->where('slug', $pslug)->where('status','0')->first();
            if($product){
                return view('Frontend.collections.products.view',compact('product','category'));
            }else{
                return redirect()->back();
            }

        }
        else{
            return redirect()->back();
        }
    }
    public function thankyou()

    {
        return view('frontend.thankyou');
    }
}
