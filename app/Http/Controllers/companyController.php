<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Http\Requests\compRequest;

class companyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $companies = company::get();   
        return view ('company.index')
        ->with('company',$companies);
    }

    public function add()
    {
        return view ('company.add');
    }

    public function save(compRequest $request)
    {
        company::create($request->all());
        return redirect()->route('company.add')->with('msg','Data has been submitted');
    }

    public function edit($id)
    {
        $company = company::findOrFail($id);
        return view('company.edit')->with('company',$company);
    }
    
    public function update(compRequest $request, $id)
    {
        $company = company::findOrFail($id);
        $company->update(['name'=>$request->name]);
        $company->update(['email'=>$request->email]);
        $company->update(['contact_no'=>$request->contact_no]);
        $company->update(['address'=>$request->address]);
        $company->update(['gsm'=>$request->gsm]);
        $company->update(['contact_person'=>$request->contact_person]);
        return redirect('company/'.$id.'/edit')->with('msg','Data has been Updated'); 
    }
}
