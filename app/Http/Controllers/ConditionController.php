<?php

namespace App\Http\Controllers;
use App\Models\Condition;
use Carbon\Cabonlmmutable;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function index() {
        $datas = Condition::all()->pluck('created_at');   
        $remove_times = [];
        foreach($datas as $data){
            $data = $data->format('Y-m-d');  
            array_push($remove_times, $data);
            $remove_times = array_unique($remove_times);
        }
        return view('condition.index', ['datas' => $datas, 'remove_times' => $remove_times]);
        
    }

    
}
