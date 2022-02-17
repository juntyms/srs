<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\vendorRequest;

class software_vendors extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function save(vendorRequest $request)
    {
        software_vendors::create($request->all());
        return redirect()->route('software.index');
    }
}