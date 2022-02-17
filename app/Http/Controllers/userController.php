<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\userRequest;

class userController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = user::get();   
        return view ('user.index')
        ->with('user',$users);
    }

    public function add()
    {
        return view ('user.add');
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
        return view('user.edit')->with('user',$user);
    }
    
    public function update(userRequest $request, $id)
    {
        $user = user::findOrFail($id);
        $user->update(['username'=>$request->username]);
        $user->update(['password'=>$request->password]);
        $user->update(['email'=>$request->email]);
        $user->update(['fullname'=>$request->fullname]);
        return redirect('user/'.$id.'/edit')->with('msg','Data has been Updated'); 
    }
}
