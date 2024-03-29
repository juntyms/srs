<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Http\Request;
use App\Models\ays;
use App\Http\Requests\ayUpdateRequest;

class acyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $ays = ays::get();   
        return view ('ays.index')
        ->with('ays',$ays);
    }
    
    public function activate()
    {
        $ays = ays::get();   
        return view ('ays.active')
        ->with('ays',$ays);
    }

    public function add()
    {
        return view ('ays.add');
    }

    public function save(ayUpdateRequest $request)
    {
        ays::create($request->all());
        Alert::success('Well Done','Data has been submitted');
        return redirect('ays/add');//->with('msg','Data has been submitted');
    }

    public function delete($id)
    {
        ays::destroy($id);
        Alert::info('Well Done','Data has been Deleted');
        return redirect()->route('ays.index');//->with('msg','Data has been Deleted');
    }

    public function edit($id)
    {
        $ays = ays::findOrFail($id);
        return view('ays.edit')->with('ays',$ays);
    }
    
    public function update(ayUpdateRequest $request, $id)
    {
        $ays = ays::findOrFail($id);
        $ays->update(['name'=>$request->name]);
        Alert::success('Well Done','Data has been Updated');
        return redirect('ays/'.$id.'/edit');//->with('msg','Data has been Updated');
    }

    public function update_active(request $request, $id)
    {
        ays::where('is_active', '=', 1)->update(['is_active' => 0]);
        $ays = ays::findOrFail($id);
        $ays->update(['is_active' => 1]);
        Alert::success('Well Done','Academic Year has been Activated');
        return redirect('ays/index');//->with('ays',$ays);    
    }
}
