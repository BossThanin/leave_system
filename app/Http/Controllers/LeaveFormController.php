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
    $leavetypes = leavetype::all();
    return view('leave-form', compact('employees', 'leavetypes'));
    }

    public function store(Request $request)
    {
    // Validate the form data
    $validatedData = $request->validate([
        'employee_id' => 'required',
        'leavetype_id' => 'required',
        'starts_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:starts_date',
        'comment' => 'nullable',
        'image' => 'nullable|image|max:2048',
    ]);

    // Handle the image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image')->store('public/images');
    } else {
        $image = null;
    }

    // Create a new LeaveForm model and fill it with the form data
    $leaveForm = new LeaveForm;
    $leaveForm->employee_id = $validatedData['employee_id'];
    $leaveForm->leavetype_id = $validatedData['leavetype_id'];
    $leaveForm->starts_date = $validatedData['starts_date'];
    $leaveForm->end_date = $validatedData['end_date'];
    $leaveForm->comment = $validatedData['comment'];
    $leaveForm->image = $image;


    // Save the leave form data to the database
    $leaveForm->save();

    // Redirect to the success page
    return view('connection');
    }
}
