<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // logout admin
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    // admin profile
    public function profile(){
        $id = Auth::user()->id;
        $admin = User::find($id);
        return view('admin.profile',compact('admin'));
    }

    public function editProfile(){
        $id = Auth::user()->id;
        $admin = User::find($id);
        return view('admin.edit_profile',compact('admin'));
    }
}
