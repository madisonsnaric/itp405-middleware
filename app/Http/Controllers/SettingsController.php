<?php

namespace App\Http\Controllers;
use Auth; 
use App\Configuration; 

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
    	return view('admin/settings', [
    		'user' => Auth::user()
    	]); 
    }

    public function configuration(Request $request) {
        $maintenance = $request->input('maintenance'); 
    	if ($maintenance == 'on') {
			$configuration = Configuration::where('name', 'maintenance')->first(); 
            $configuration->value = 'on';
			$configuration->save(); 
			return redirect('settings');
    	} else {
			$configuration = Configuration::where('name', 'maintenance')->first(); 
            $configuration->value = 'off';
			$configuration->save();
			return redirect('settings');
    	}
    }
}







