<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductFormRequest;
use App\Models\Color;

class ProductController extends Controller
{
    public function index()

    {
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }

    public function create()

    {
        $categories = Category::all();
        $brands = Brand::all();
        $colors = Color::where('status','0')->get();
        return view('admin.products.create',compact('categories','brands','colors'));
    }


    public function store(ProductFormRequest $request)

    {
        $validatedData = $request->validated();
        $category = Category::findOrFail($validatedData['category_id']);
        $product = $category->products()->create([
           'category_id'=> $validatedData['category_id'],
           'name'=> $validatedData['name'],
           'slug'=> $validatedData['slug'],
           'shape'=> $validatedData['shape'],
           'usage'=> $validatedData['usage'],
           'material'=> $validatedData['material'],
           'size'=> $validatedData['size'],
           'pattern'=> $validatedData['pattern'],
           'baseshape'=> $validatedData['baseshape'],
           'brand'=> $validatedData['brand'],
           'description'=> $validatedData['description'],
           'price'=> $validatedData['price'],
           'quantity'=> $validatedData['quantity'],
           'thickness'=> $validatedData['thickness'],
           'diameter'=> $validatedData['diameter'],
           'trending'=> $request->trending == true ? '1':'0',
           'featured'=> $request->featured == true ? '1':'0',
           'status'=> $request->status == true ? '1':'0',

        ]);


        if($request->hasFile('image')) {
            $uploadPath = 'uploads/products/';

             foreach($request->file('image')as $imageFile){
                $extension = $imageFile->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $imageFile->move ( $uploadPath, $filename);
                $finalImagePathName = $uploadPath. $filename;
                $product->productImages()->create([
                    'product_id'=> $product->id,
                    'image'=> $finalImagePathName,

                 ]);
            }
        }

   if($request->colors) {
        foreach($request->colors as $key => $color){
            $product->productColors()->create([
                'product_id'=>$product->id,
                'color_id'=>$color,
                'quantity'=>$request->colorquantityantity[$key] ?? 0

            ]);

        }
 }
        return redirect('/admin/products')->with('message','Product Added Successfully');

       // return $product -> id;
    }

    public function edit(int $product_id)

 {
    $categories = Category::all();
    $brands = Brand::all();
    $product = Product::findOrFail($product_id);
    $product_color = $product->productColors->pluck('color_id')->toArray();


    $colors = Color::whereNotIn('id',$product_color)->get();
     return view('admin.products.edit',compact( 'product','categories','brands','colors'));

 }

 //update
 public function update(ProductFormRequest $request, int $product_id)

 {
    $validatedData = $request->validated();
 $product = Category::findOrFail( $validatedData['category_id'])
                        ->products()->where('id', $product_id)->first();

if( $product ) {

    $product->update([
        'category_id'=> $validatedData['category_id'],
        'name'=> $validatedData['name'],
        'slug'=> $validatedData['slug'],
        'shape'=> $validatedData['shape'],
        'usage'=> $validatedData['usage'],
        'material'=> $validatedData['material'],
        'size'=> $validatedData['size'],
        'pattern'=> $validatedData['pattern'],
        'baseshape'=> $validatedData['baseshape'],
        'brand'=> $validatedData['brand'],
        'description'=> $validatedData['description'],
        'price'=> $validatedData['price'],
        'quantity'=> $validatedData['quantity'],
        'thickness'=> $validatedData['thickness'],
        'diameter'=> $validatedData['diameter'],
        'trending'=> $request->trending == true ? '1':'0',
        'featured'=> $request->featured == true ? '1':'0',
        'status'=> $request->status == true ? '1':'0',

     ]);
     if($request->hasFile('image')) {
        $uploadPath = 'uploads/products/';

         foreach($request->file('image')as $imageFile){
            $extension = $imageFile->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $imageFile->move ( $uploadPath, $filename);
            $finalImagePathName = $uploadPath. $filename;
            $product->productImages()->create([
                'product_id'=> $product->id,
                'image'=> $finalImagePathName,

             ]);
        }
    }

    return redirect('/admin/products')->with('message','Product Updated Successfully');

}
else
    {
        return redirect('/admin/products')->with('message','No Such Product ID Found');
    }

 }


}
