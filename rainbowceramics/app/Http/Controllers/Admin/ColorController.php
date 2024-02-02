<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Http\Requests\ColorFormRequest;
class ColorController extends Controller
{
    public function index()
    {
        return view('admin.color.index');
    }
    public function create()
    {
        return view('admin.color.create');
    }
    public function store(ColorFormRequest $request)
    {
        $validatedData = $request->validated();
        $color = new Color;
        $color->name =$validatedData['name'];
        $color->code =$validatedData['code'];

         $color->status =$request->status == true ? '1':'0';
         $color->save();

         return redirect('admin/color')->with('message','Color Added successfully');

    }

    //view for edit color
    public function edit(Color $color)

    {
        return view('admin.color.edit',compact('color'));

    }
 //update
 public function update(ColorFormRequest $request, $color)

 {
    $validatedData = $request->validated();
        $color = Color::findOrFail( $color);
    $color->name =$validatedData['name'];
    $color->code =$validatedData['code'];



     $color->status =$request->status ==true ? '1':'0';
     $color->update();
      return redirect('admin/color')->with('message','Category Updated');
 }

}
