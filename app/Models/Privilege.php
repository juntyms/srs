<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controller\privController;

class Privilege extends Model
{
    use HasFactory;
    protected $table = 'privileges';
    protected $fillable = ['name'];

}
