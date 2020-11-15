<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use App\Models\Condition;
use Illuminate\Http\Request;

class Staffcontroller extends Controller
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

}
