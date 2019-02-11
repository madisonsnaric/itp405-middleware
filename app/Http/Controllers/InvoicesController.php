<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 

class InvoicesController extends Controller
{
    public function index(Request $request) 
    {
    	// $semester = 'Spring 2019';
    	// $course = 'ITP 405'; 
    	$query = DB::table('invoices')
    		->join('customers', 'invoices.CustomerId', '=', 'customers.customerId')
    	
    	if ($request->query('search')) {
    		$query->where('FirstName', '=', $request->query('search')); 
    		$query->orWhere('LastName', '=', $request->query('search')); 
    	}

    	$invoices = $query->get(); 

    	return view('invoices', [
    		// 'uscSemester' => $semester, 
    		// 'course' => $course
    		'invoices' => $invoices
    		'search' => $request->query('search')
    	]); 
    }
}
