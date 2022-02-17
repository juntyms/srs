<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class departmentController extends Controller
{
    //
    public function index()
    {
        $departments = departments::get(); 
    }
}
