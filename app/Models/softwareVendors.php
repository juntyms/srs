<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class softwareVendors extends Model
{
    use HasFactory;
    protected $table = 'software_vendors';
    protected $fillable = ['name'];

}