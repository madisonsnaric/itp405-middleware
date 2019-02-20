<?php

namespace App\Http\Controllers;
use Auth; 

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
    	return view('admin/settings', [
    		'user' => Auth::user()
    	]); 
    }
}
