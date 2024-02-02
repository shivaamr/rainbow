<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index(){
        // $users = User::all();
        // return view('frontend.users.index',compact('users'));
         return view('frontend.user.profile');
     }

     public function updateUserDetails(Request $request){

         $request->validate([
             'username' => ['required','string'],
             'phone' => ['required','digits:10'],
             'pin_code' => ['required','digits:6'],
             'address' => ['required','string','max:499'],
      ]);

         $user = User::findOrFail(Auth::user()->id);
         $user->update([
                'name' =>  $request->username
         ]);

         $user->userDetail()->updateOrCreate(
             [
                 'user_id' => $user->id,
             ],
             [
                 'phone' => $request->phone,
                 'pin_code' => $request->pin_code,
                 'address' => $request->address,
             ]
         );
         return redirect()->back()->with('message','User Profile Updated');
      }

      public function passwordcreate(){

          return view('frontend.user.passwordcreate');
      }

      public function updatepassword(Request $request){

         $request->validate([
             'current_password' => ['required','string','min:8'],
             'password' => ['required', 'string', 'min:8', 'confirmed']
         ]);

         $currentPasswordStatus = Hash::check($request->current_password, auth()->user()->password);
         if($currentPasswordStatus){

             User::findOrFail(Auth::user()->id)->update([
                 'password' => Hash::make($request->password),
             ]);

             return redirect()->back()->with('message','Password Updated Successfully');

         }else{

             return redirect()->back()->with('message','Current Password does not match with Old Password');
         }
     }
}
