@extends('layouts.app')

@section('content')
    <div class="container">
        <h4>รายละเอียดใบลา</h4>
        <form action="{{ route('leave-form.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_leave_system";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            error_log("Run leaveform.php");
            $query = "SELECT * FROM users where `role`=1";
            $result = $conn->query($query);
            if (!$result) {
                die("Query failed: " . $conn->error);
            }
            while ($row = $result->fetch_assoc()){
                echo "ชื่อ - นามสกุล","<br/>";
                echo "<br/>". $row['name'];
            }
            $conn->close();
        ?>
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
            <label for="starts_date">เลือกวันที่:</label>
            <input type="date" name="starts_date">
            <label for="start_time">เลือกเวลา:</label>
            <input type="time" name="start_time">
            <label for="end_date">เลือกวันที่:</label>
            <input type="date" name="end_date">
            <label for="end_time">เลือกเวลา:</label>
            <input type="time" name="end_time">
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
            <input type="submit" value="Save">
        </form>
    </div>
@endsection
