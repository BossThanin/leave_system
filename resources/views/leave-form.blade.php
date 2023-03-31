<!DOCTYPE html>
<html>
<head>
    <title>Leave Form</title>
</head>
<body>
    <h1>Leave Request Form</h1>
    <form action="{{ route('leave-form.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="employee_id">ชื่อ-นามสกุลพนักงาน :</label>
        <select name="employee_id">
            @foreach ($employees as $employee)
                <option value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
            @endforeach
        </select>
        <br><br>
        <label for="leavetype_id">ประเภทการลา:</label>
        <select name="leavetype_id">
            @foreach ($leavetypes as $leavetype)
                <option value="{{ $leavetype->id }}">{{ $leavetype->leavetype_name }}</option>
            @endforeach
        </select>
        <br><br>
        <h3>เลือกวันและเวลาที่ต้องการจะลา</h3>
        <label for="starts_date">เลือกวันที่:</label>
        <input type="date" name="starts_date">
        <br><br>
        <label for="start_time">เลือกเวลา:</label>
        <input type="time" name="start_time">
        <br><br>
        <label for="end_date">เลือกวันที่:</label>
        <input type="date" name="end_date">
        <br><br>
        <label for="end_time">เลือกเวลา:</label>
        <input type="time" name="end_time">
        <br><br>
        <label for="comment">เหตุผลการลา:</label>
        <textarea name="comment" rows="4" cols="50"></textarea>
        <br><br>
        <label for="image">เอกสารที่เกี่ยวข้อง:</label>
        <input type="file" name="image" accept="image/*" maxlength="2097152">
        <br><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>