<?php

namespace App\Http\Controllers;

use App\Ad;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function requests(){
        $ads = Ad::all();
        return view('admin.requests', compact('ads'));
    }

    public function validateRequest($id){
        $ad = Ad::findOrFail($id);
        $ad->state = !$ad->state;
        $ad->save();
        return redirect('/admin/requests');
    }
}
