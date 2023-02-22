<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Privilege;
use App\Models\User;
use App\Models\userprivilege;
use App\Http\Controllers\userController;
use App\Http\Requests\privRequest;
use Alert;

class privController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userprivileges = userprivilege::get();
        $user = user::pluck('username','id');
        $privilege = privilege::pluck('name','id');
        return view('privileges.index')
                ->with('user',$user)
                ->with('privilege',$privilege)
                ->with('userprivileges',$userprivileges);
    }

    public function assign(privRequest $request)
    {
        $userprivilege = userprivilege::updateOrCreate(['user_id'=>$request['user_id'],
                                                       'privilege_id'=>$request['privilege_id']]);
        //userprivilege::create($request->all());
        Alert::success('Well Done','Privilege has been Assigned Successfully');
        return redirect()->route('privileges.index');//->with('ms','Privilege has been Assigned Successfully');
    }
    public function revoke($id)
    {
        userprivilege::destroy($id);
        Alert::info('Well Done','Privilege has been Revoked Successfully');
        return redirect()->route('privileges.index');//->with('msg','Privilege has been Revoked');

    }

}