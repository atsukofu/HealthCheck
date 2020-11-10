<?php

namespace App\Http\Controllers;
use App\Models\Condition;
use Illuminate\Support\Facades\DB;

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

    public function show($date){
        $days = DB::table('conditions')->where('created_at', 'like', '%' . $date . '%')->get();
        return view('condition.show', ['days' => $days, 'date' => $date]);
    }

    public function menu() {
        return view('condition.menu');
    }

    
}
