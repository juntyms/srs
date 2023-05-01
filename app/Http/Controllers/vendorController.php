<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Http\Requests\vendorRequest;
use Alert;

class vendorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $vendor = vendor::get();   
        return view ('SoftwareVendor.index')
        ->with('vendor',$vendor);
    }

    public function add()
    {
        return view ('SoftwareVendor.add');
    }

    public function save(vendorRequest $request)
    {
        vendor::create($request->all());
        Alert::success('Well Done','Data has been Submitted');

        return redirect()->route('SoftwareVendor.add');//->with('msg','Data has been submitted');
    }

//    public function delete($id)
    //{
//   vendor::destroy($id);
//   return redirect()->route('vendor.index')->with('msg','Data has been Deleted');
   // }

    public function edit($id)
    {
        $vendor = vendor::findOrFail($id);
        return view('SoftwareVendor.edit')->with('vendor',$vendor);
    }
    
    public function update(vendorRequest $request, $id)
    {
        $vendor = vendor::findOrFail($id);
        $vendor->update(['name'=>$request->name]);
        Alert::success('Well Done','Data has been Updated');

        return redirect('SoftwareVendor/'.$id.'/edit');//->with('msg','Data has been Updated'); 
    }
}
