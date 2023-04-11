<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\LeaveForm;
use App\Models\Leavetype;

class LeaveFormController extends Controller
{
    public function create()
    {
    $employees = Employee::all();
    $leavetypes = Leavetype::all();
    return view('leave-form', compact('employees', 'leavetypes'));
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'employee_id' => 'required',
        'leavetype_id' => 'required',
        'starts_date' => 'required|date_format:Y-m-d\TH:i',
        'end_date' => 'required|date_format:Y-m-d\TH:i|after_or_equal:starts_date',
        'comment' => 'nullable',
        'image' => 'nullable|image|max:2097152',
    ]);       

    if ($request->hasFile('image')) {
        $image = $request->file('image')->store('public/images');
    } else {
        $image = null;
    }
    $leaveForm = new LeaveForm;
    $leaveForm->employee_id = $validatedData['employee_id'];
    $leaveForm->leavetype_id = $validatedData['leavetype_id'];
    $leaveForm->starts_date = $validatedData['starts_date'];
    $leaveForm->end_date = $validatedData['end_date'];
    $leaveForm->comment = $validatedData['comment'];
    $leaveForm->image = $image;
    $leaveForm->save();
    $leaveForms = LeaveForm::with('Employee', 'Leavetype')->get();
    return view('home', compact('leaveForms'));
}
}
