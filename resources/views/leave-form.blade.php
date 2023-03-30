<!DOCTYPE html>
<html>
<head>
    <title>Leave Form</title>
</head>
<body>
    <h1>Leave Request Form</h1>
    <form action="{{ route('leave-form.store') }}" method="post" enctype="multipart/form-data">
	@csrf
        <label for="employee_id">Employee Name:</label>
        <select name="employee_id">
		@foreach ($employees as $employee)
    		<option value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
		@endforeach
        </select>
        <br><br>
        <label for="leavetype_id">Leave Type:</label>
        <select name="leavetype_id">
		@foreach ($leavetypes as $leavetype)
    		<option value="{{ $leavetype->id }}">{{ $leavetype->name }}</option>
		@endforeach
        </select>
        <br><br>
        <label for="starts_date">Start Date:</label>
        <input type="date" name="starts_date">
        <br><br>
        <label for="end_date">End Date:</label>
        <input type="date" name="end_date">
        <br><br>
        <label for="comment">Comment:</label>
        <textarea name="comment" rows="4" cols="50"></textarea>
        <br><br>
        <label for="image">Image:</label>
        <input type="file" name="image">
        <br><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>