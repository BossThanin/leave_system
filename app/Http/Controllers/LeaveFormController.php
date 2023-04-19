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
        $leaveForm = new LeaveForm;
        return view('leave-form', compact('employees', 'leavetypes', 'leaveForm')); // Pass $leaveForm to the view
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'employee_id' => 'required',
            'leavetype_id' => 'required',
            'starts_date' => 'required|date_format:Y-m-d\TH:i',
            'end_date' => 'required|date_format:Y-m-d\TH:i|after_or_equal:starts_date',
            'reason' => 'nullable',
            'file' => 'nullable|file|max:2097152',
        ]);       

        if ($request->hasFile('file')) {
            $file = $request->file('file')->store('public/files');
        } else {
            $file = null;
        }
        $leaveForm = new LeaveForm;
        $leaveForm->employee_id = $validatedData['employee_id'];
        $leaveForm->leavetype_id = $validatedData['leavetype_id'];
        $leaveForm->starts_date = $validatedData['starts_date'];
        $leaveForm->end_date = $validatedData['end_date'];
        $leaveForm->reason = $validatedData['reason'];
        $leaveForm->file = $file;
        $leaveForm->save();
        $leaveForms = LeaveForm::with('Employee', 'Leavetype')->get();
        return view('home', compact('leaveForms'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'employee_id' => 'required',
            'leavetype_id' => 'required',
            'starts_date' => 'required',
            'end_date' => 'required',
            'reason' => 'required',
            'reason_pm' => 'required',
            'file' => 'required'
        ]);
    
        $leaveForm = LeaveForm::find($id);
        $leaveForm->employee_id = $validatedData['employee_id'];
        $leaveForm->leavetype_id = $validatedData['leavetype_id'];
        $leaveForm->starts_date = $validatedData['starts_date'];
        $leaveForm->end_date = $validatedData['end_date'];
        $leaveForm->reason = $validatedData['reason'];
        $leaveForm->reason_pm = $validatedData['reason_pm'];
        $leaveForm->file = $validatedData['file'];
        $leaveForm->save();
    
        $leaveForms = LeaveForm::with('Employee', 'Leavetype')->get();
        return view('home', compact('leaveForms'));
    }    

    public function edit($id)
    {
        $leaveForm = LeaveForm::find($id);
        return view('edit-leave-form', compact('leaveForm'));
    }
}
