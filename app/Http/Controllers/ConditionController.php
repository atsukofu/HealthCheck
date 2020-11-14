<?php

namespace App\Http\Controllers;
use App\Models\Condition;
use App\Models\Staff;
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
            $remove_times = array_values($remove_times);
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

    public function new() {
        $condition = new Condition;
        $staff = Staff::all()->pluck('name', 'id');
        return view('condition.new', ['condition' => $condition, 'staff' => $staff]);
    }

    public function store(Request $request) {
        $condition = new Condition;
        $condition->user_id = request('user_id');
        $condition->body_temperture = request('body_temperture');
        $condition->nail = request('nail');
        $condition->belly = request('belly');
        $condition->rough_hands = request('rough_hands');
        $condition->other = request('other');
        $condition->save();
        return redirect()->route('condition.new')->with('flash_message', '登録が完了しました');;
    }

    
}
