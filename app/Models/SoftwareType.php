<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareType extends Model
{
    use HasFactory;
    protected $table = 'software_types';
    protected $fillable = ['name'];
}
