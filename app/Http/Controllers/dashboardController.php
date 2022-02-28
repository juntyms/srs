<?php

namespace App\Http\Controllers;

use PDF;
use Auth;
use App\Models\ays;
use App\Models\Company;
use App\Models\License;
use App\Models\Software;
use App\Models\Department;
use App\Models\SoftwareType;
use Illuminate\Http\Request;
use App\Models\softwareVendors;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facades;

class dashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard()
    {
        $software = software::where('department_id','=',Auth::user()->department_id)->get();
        //$software = software::get();
        return view ('dashboard')->with('software',$software);
    }
    public function viewPDF ()
    {
        $software = software::where('department_id','=',Auth::user()->department_id)->get();
        return view ('ExportPDF')->with('software',$software);
    }

    public function downloadPDF()
    {
        $software = software::where('department_id','=',Auth::user()->department_id)->get();
        $pdf = PDF::loadView('ExportPDF',compact('software'))->setPaper('a4', 'landscape');
        return $pdf->download('software.pdf');
    }
}