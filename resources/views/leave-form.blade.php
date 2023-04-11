@extends('layouts.app')

@section('content')
    <div class="container">
        <h4>รายละเอียดใบลา</h4>
        <form action="{{ route('leave-form.store') }}" method="post" enctype="multipart/form-data">
        @csrf
            <label for="leavetype_id">ชื่อ - นามสกุล:</label>
            <br><br>
            {{ Auth::user()->name }}
            <br><br>
            <label for="leavetype_id">ประเภทการลา:</label>
            <br><br>
            <select name="leavetype_id">
                @foreach ($leavetypes as $leavetype)
                    <option value="{{ $leavetype->id }}">{{ $leavetype->leavetype_name }}</option>
                @endforeach
            </select>
            <br><br>
            <h5>ลาตั้งแต่ - ถึง</h5>
            <label for="starts_date">เลือกวันที่และเวลา:</label>
            <input type="datetime-local" name="starts_date">
            <label for="end_date">เลือกวันที่และเวลา:</label>
            <input type="datetime-local" name="end_date">
            <br><br>
            <label for="comment">เหตุผลการลา:</label><br><br>
            <textarea name="comment" rows="4" cols="100"></textarea>
            <br><br>
            <label for="image">เอกสารที่เกี่ยวข้อง:</label>
            <input type="file" name="image" accept="image/*" maxlength="2097152">
            <br><br>
            <h4>ระหว่างการลามอบหมายให้</h4>
            <label for="employee_id">ชื่อ-นามสกุล:</label>
            <br><br>
            <select name="employee_id">
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
                @endforeach
            </select>
            <br><br>
            <div style="text-align: right;">
                <a href="{{ route('home')}}" class="btn" style="background-color: #c2c2c2; color: #fff;">ยกเลิก</a>
                <input type="submit" class="btn" style="background-color: #00c85a; color: #fff;" value="บันทึก">
            </div>
        </form>
    </div>
@endsection
