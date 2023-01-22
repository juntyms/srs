<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Software extends Model
{
    use HasFactory;
    protected $table = 'softwares';
    protected $fillable = [
        'ay_id',
        'department_id',
        'name',
        'software_vendor_id',
        'software_type_id',
        'company_id',
        'version',
        'quantity',
        'purchase_date',
        'price',
        'expiry_date',
        'warranty_end_date',
        'license_id',
        'installer_is_available',
        'custodian_name',
        'serial_number'
    ];

    public function ay()
    {
        return $this->hasOne(ays::class,'id','ay_id');
    }
    
    public function dept()
    {
        return $this->hasOne(Department::class,'id','department_id');
    }
    
    public function vendor()
    {
        return $this->hasOne(softwareVendors::class,'id','software_vendor_id');
    }

    public function type()
    {
        return $this->hasOne(SoftwareType::class,'id','software_type_id');
    }
    
    public function comp()
    {
        return $this->hasOne(Company::class,'id','company_id');
    }

    public function li()
    {
        return $this->hasOne(License::class,'id','license_id');
    }

    public function getPurchaseDateAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');

    }

    public function formPurchaseDateAtrributw($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    public function getExpiryDateAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');

    }

    public function formExpiryDateAtrributw($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    public function getWarrantyEndDateAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');

    }

    public function formWarrantyEndDateAtrributw($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }
    
}

