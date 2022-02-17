<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoftwareType;
use App\Http\Requests\typeRequest;

class softypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $SoftwareTypes = SoftwareType::get();
        return view ('SoftwareType.index')
        ->with('SoftwareType',$SoftwareTypes);
    }

    public function add()
    {
        return view ('SoftwareType.add');
    }

    public function save(typeRequest $request)
    {
        SoftwareType::create($request->all());
        return redirect()->route('SoftwareType.add')->with('msg','Data has been submitted');
    }

    public function delete($id)
    {
        SoftwareType::destroy($id);
        return redirect()->route('SoftwareType.index')->with('msg','Data has been Deleted');
    }

    public function edit($id)
    {
        $SoftwareTypes = SoftwareType::findOrFail($id);
        return view('SoftwareType.edit')->with('SoftwareTypes',$SoftwareTypes);
    }
    
    public function update(typeRequest $request, $id)
    {
        $SoftwareTypes = SoftwareType::findOrFail($id);
        $SoftwareTypes->update(['name'=>$request->name]);
        return redirect('SoftwareType/'.$id.'/edit')->with('msg','Data has been Updated'); 
    }
}
