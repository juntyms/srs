<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controller\vendorController;

class Vendor extends Model
{
    use HasFactory;
    protected $table = 'software_vendors';
    protected $fillable = ['name'];
}
