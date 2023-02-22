<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoftwareType;
use App\Http\Requests\typeRequest;
use Alert;

class softypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $SoftwareTypes = SoftwareType::get();
        return view ('LicenseType.index')
        ->with('SoftwareType',$SoftwareTypes);
    }

    public function add()
    {
        return view ('LicenseType.add');
    }

    public function save(typeRequest $request)
    {
        SoftwareType::create($request->all());
        Alert::success('Well Done','Data has been Submitted');
        return redirect()->route('LicenseType.add');//->with('msg','Data has been submitted');
    }

    public function delete($id)
    {
        SoftwareType::destroy($id);
        Alert::info('Well Done','Data has been Deleted');

        return redirect()->route('LicenseType.index');//->with('msg','Data has been Deleted');
    }

    public function edit($id)
    {
        $SoftwareTypes = SoftwareType::findOrFail($id);
        return view('LicenseType.edit')->with('SoftwareTypes',$SoftwareTypes);
    }
    
    public function update(typeRequest $request, $id)
    {
        $SoftwareTypes = SoftwareType::findOrFail($id);
        $SoftwareTypes->update(['name'=>$request->name]);
        Alert::success('Well Done','Data has been Updated');

        return redirect('LicenseType/'.$id.'/edit');//->with('msg','Data has been Updated'); 
    }
}
