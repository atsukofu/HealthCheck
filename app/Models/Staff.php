<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'Staffs';
    public function condition() {
        return $this->hasMany('App\Models\Conditions');
    }

}
