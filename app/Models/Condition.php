<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Condition extends Model
{
    use HasFactory;

    public function staff() {
        return $this->belongsTo('App\Models\Staff', 'user_id');
    }

}
