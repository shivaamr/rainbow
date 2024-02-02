<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()

    {     $settings = Settings::first();
        return view('admin.settings.index',compact('settings'));
    }


    public function store(Request $request)

    {
        $settings = Settings::first();
        if($settings){
            $settings->update([
                'website_name'=> $request->website_name,
                'website_url'=> $request->website_url,
                'page_title'=> $request->page_title,
                'meta_keyword'=> $request->meta_keyword,
                'meta_description'=> $request->meta_description,
                'address'=> $request->address,
                'phone1'=>$request->phone1,
                'phone2'=>$request->phone2,
                'email'=> $request->email
            ]);
            return redirect()->back()->with('message','Settings Update Successfully');

        }
        else{
            Settings::create([
                'website_name'=> $request->website_name,
                'website_url'=> $request->website_url,
                'page_title'=> $request->page_title,
                'meta_keyword'=> $request->meta_keyword,
                'meta_description'=> $request->meta_description,
                'address'=> $request->address,
                'phone1'=>$request->phone1,
                'phone2'=>$request->phone2,
                'email'=> $request->email
            ]);
            return redirect()->back()->with('message','Settings Added Successfully');

        }




    }
}
