<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Condition extends Model
{
    use HasFactory;

    public function staff() {
        return $this->belongsTo('App\Staff');
    }

    public function getData(){
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('Y-m-d');
        // $builder = Condition::select(['created_at'])->get()->toArray();
        // return $builder;
        // return $collection->unique();
        // return $dates->unique($dates);
    }
}
