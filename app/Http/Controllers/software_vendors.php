<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\vendorRequest;
use Alert;

class software_vendors extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function save(vendorRequest $request)
    {
        software_vendors::create($request->all());
        Alert::success('Well Done','Data has been Submitted');
        return redirect()->route('software.index');
    }
}