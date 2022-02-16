<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controller\acyController;

class ays extends Model
{
    use HasFactory;
    protected $table = 'ays';
    protected $fillable = [
        'name',
        'is_active'
    ];
}
