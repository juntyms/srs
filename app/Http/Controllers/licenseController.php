<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\License;
use App\Http\Requests\licenseRequest;

class licenseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $licenses = license::get();   
        return view ('subscription.index')
        ->with('license',$licenses);
    }

    public function add()
    {
        return view ('subscription.add');
    }

    public function save(licenseRequest $request)
    {
        license::create($request->all());
        return redirect()->route('subscription.add')->with('msg','Data has been submitted');
    }

    public function delete($id)
    {
        license::destroy($id);
        return redirect()->route('subscription.index')->with('msg','Data has been Deleted');
    }

    public function edit($id)
    {
        $license = license::findOrFail($id);
        return view('subscription.edit')->with('license',$license);
    }
    
    public function update(licenseRequest $request, $id)
    {
        $license = license::findOrFail($id);
        $license->update(['name'=>$request->name]);
        return redirect('subscription/'.$id.'/edit')->with('msg','Data has been Updated'); 
    }
}
