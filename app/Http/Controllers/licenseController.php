<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\License;
use App\Http\Requests\licenseRequest;
use Alert;


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
        Alert::success('Well Done','Data has been Submitted');
        return redirect()->route('subscription.add');//->with('msg','Data has been submitted');
    }

    public function delete($id)
    {
        license::destroy($id);
        Alert::info('Well Done','Academic Year has been Deleted');
        return redirect()->route('subscription.index');//->with('msg','Data has been Deleted');
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
        Alert::success('Well Done','Academic Year has been Updated');
        return redirect('subscription/'.$id.'/edit');//->with('msg','Data has been Updated'); 
    }
}
