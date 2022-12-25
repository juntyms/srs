<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\userRequest;
use App\Models\Department;

class userController extends Controller
{

    
    public function index()
    {
        $users = user::get();   
        return view ('user.index')->with('user',$users);
    }

    public function add()
    {
        $departments = Department::pluck('name','id');
        return view ('user.add')->with('department',$departments);
    }

    public function save(userRequest $request)
    {
        $request['password'] = bcrypt($request->password);
        user::create($request->all());
        return redirect()->route('user.add')->with('msg','Data has been submitted');
    }

    public function delete($id)
    {
        user::destroy($id);
        return redirect()->route('user.index')->with('msg','Data has been Deleted');
    }

    public function edit($id)
    {
        $user = user::findOrFail($id);
        $departments = Department::pluck('name','id');
        return view('user.edit')->with('department',$departments)
                                ->with('user',$user);
    }
    
    public function update(userRequest $request, $id)
    {
        $user = user::findOrFail($id);
        $user->update(['username'=>$request->username]);
        $user->update(['email'=>$request->email]);
        $user->update(['fullname'=>$request->fullname]);
        $user->update(['department_id'=>$request->department_id]);
        return redirect('user/'.$id.'/edit')->with('msg','Data has been Updated'); 
    }
}
