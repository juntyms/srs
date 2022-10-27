<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userprivilege extends Model
{
    use HasFactory;
    protected $table = 'user_privileges';
    protected $fillable = ['privilege_id','user_id'];
    
    public function pri()
    {
        return $this->hasOne(privileges::class,'id','privilege_id');
    }

    public function us()
    {
        return $this->hasOne(user::class,'id','user_id');
    }
}
