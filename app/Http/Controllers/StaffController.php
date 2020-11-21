<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use App\Models\Condition;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index() {
        $staffs = Staff::all();
        return view('staff.index', ['staffs' => $staffs]);
    }

    public function show($id) {
        $staff = Staff::find($id);
        $items = Condition::where('user_id', $id)
        ->latest()
        ->get();
        return view('staff.show', ['staff' => $staff, 'items' => $items]);
    }

    public function new() {
        $staff = new Staff;
        return view('staff.new', ['staff' => $staff]);
    }

    public function store(Request $request) {
        $staff = new Staff;
        $staff->name = request('user_name');
        $staff->save();
        return redirect()->route('staff.new')->with('flash_message', 'スタッフを登録しました!');
    }

}