<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\acyController;
use App\Http\Controllers\companyController;
use App\Http\Controllers\departmentController;
use App\Http\Controllers\licenseController;
use App\Http\Controllers\software_vendors;
use App\Http\Controllers\softController;
use App\Http\Controllers\softypeController;

use App\Models\Software;
use App\Models\SoftwareType;
use App\Models\Department;
use App\Models\Company;
use App\Models\License;
use App\Models\ays;
use App\Models\softwareVendors;

class dashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard()
    {
        return view ('dashboard');
    }
    public function cord()
    {
        $software = software::get();
        return view ('welcomCo')
                    ->with('software',$software);
    }
}
