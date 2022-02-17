<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Software;
use App\Models\SoftwareType;
use App\Models\Department;
use App\Models\Company;
use App\Models\License;
use App\Models\ays;
use App\Models\softwareVendors;
use App\Http\Requests\softwareRequest;

class softController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $software = Software::get();        
        return view ('software.index')
            ->with('software',$software);
    }

    public function add()
    {
        $ays = ays::where('is_active',1)->pluck('name', 'id');
        $departments = Department::pluck('name','id');
        $softwareVendors=softwareVendors::pluck('name','id');
        $SoftwareTypes=SoftwareType::pluck('name','id');
        $company=company::pluck('name','id');
        $Licenses=License::pluck('name','id');
        return view ('software.add')->with('ays',$ays)
            ->with('department',$departments)
            ->with('softwareVendors',$softwareVendors)
            ->with('SoftwareType',$SoftwareTypes)
            ->with('company',$company)
            ->with('License',$Licenses);
    }

    public function save(softwareRequest $request)
    {
        software::create($request->all());
        return redirect()->route('software.index');
    }

    public function delete($id)
    {
        software::destroy($id);
        return redirect()->route('software.index');
    }

    public function edit($id)
    {
        $software = software::findOrFail($id);
        $ays = ays::where('is_active',1)->pluck('name', 'id');
        $departments = Department::pluck('name','id');
        $softwareVendors=softwareVendors::pluck('name','id');
        $SoftwareTypes=SoftwareType::pluck('name','id');
        $company=company::pluck('name','id');
        $Licenses=License::pluck('name','id');
        return view('software.edit')->with('software',$software)->with('ays',$ays)
                    ->with('department',$departments)
                    ->with('softwareVendors',$softwareVendors)
                    ->with('SoftwareType',$SoftwareTypes)
                    ->with('company',$company)
                    ->with('License',$Licenses);
    }
    
    public function update(softwareRequest $request, $id)
    {
        $software = software::findOrFail($id);
        $software->update($request->all());

        return redirect()->route('software.index'); 
    }
}