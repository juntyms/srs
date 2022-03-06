<?php

namespace App\Exports;

use App\Models\Software;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SoftwareExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('Excelsoftware',['software' => Software::all()]);
    }

}
