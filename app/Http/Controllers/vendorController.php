<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Http\Requests\vendorRequest;

class vendorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $vendor = vendor::get();   
        return view ('vendor.index')
        ->with('vendor',$vendor);
    }

    public function add()
    {
        return view ('vendor.add');
    }

    public function save(vendorRequest $request)
    {
        vendor::create($request->all());
        return redirect()->route('vendor.add')->with('msg','Data has been submitted');
    }

//    public function delete($id)
    //{
//   vendor::destroy($id);
//   return redirect()->route('vendor.index')->with('msg','Data has been Deleted');
   // }

    public function edit($id)
    {
        $vendor = vendor::findOrFail($id);
        return view('vendor.edit')->with('vendor',$vendor);
    }
    
    public function update(vendorRequest $request, $id)
    {
        $vendor = vendor::findOrFail($id);
        $vendor->update(['name'=>$request->name]);
        return redirect('vendor/'.$id.'/edit')->with('msg','Data has been Updated'); 
    }
}
