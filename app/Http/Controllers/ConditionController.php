<?php

namespace App\Http\Controllers;
use App\Models\Condition;
use App\Models\Staff;
use CreateConditionsTable;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function index() {
        $datas = Condition::all()->pluck('created_at');   
        foreach($datas as $data){
            $ja_data = $data->format('Y年m月d日');
            $hifun_data = $data->format('Y-m-d');
            $remove_times[$ja_data] = $hifun_data;
            $remove_times = array_unique($remove_times);
        }
        return view('condition.index', ['datas' => $datas, 'remove_times' => $remove_times]);
    }

    public function show($date){
        $days = Condition::with('staff')->where('created_at', 'like', '%' . $date . '%')->get();
        $days_array = $days->pluck('created_at');
        $ja_date = $days_array[0]->format('Y年m月d日');

        return view('condition.show', ['days' => $days, 'date' => $date, 'ja_date' => $ja_date]);
    }

    public function menu() {
        return view('condition.menu');
    }

    public function new() {
        return view('condition.new');
    }

    // public function new() {
    //     $condition = new Condition;
    //     $staff = Staff::all()->pluck('name', 'id');
    //     return view('condition.new', ['condition' => $condition, 'staff' => $staff]);
    // }

    public function store(Request $request) {
        $condition = new Condition;
        $condition->user_id = request('user_id');
        $inputtemp = request('body_temperture_int') + request('body_temperture_dec')/10;
        $condition->body_temperture = $inputtemp;
        $condition->nail = request('nail');
        $condition->belly = request('belly');
        $condition->rough_hands = request('rough_hands');
        $condition->other = request('other');
        $condition->save();
        return redirect()->route('condition.new')->with('flash_message', '登録が完了しました');
    }

    public function search(Request $request) {
        $year = $request->year;
        $month = $request->month;
        $month_datas = Condition::with('staff')->whereYear('created_at', $year)->whereMonth('created_at', $month)->get();
        return view('condition.month', ['month_datas' => $month_datas]);
    }

    public function month(Request $request) {
        return view('condition.month');
    }
    
}
