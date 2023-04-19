@extends('layouts.app')

@section('content')
<html>
    <head>
        <title>New Page</title>
    </head>
    <body>
    <div class="container">
        <h1>ระบบการลาบริษัท BIG DATA AGENCY CO.LDT.</h1>
        <p>You are Admin.</p>
        <button type="button" class="btn" style="background-color: #a3c3b5; color: #fff;"> <a href="/leave-form" style="color: #fff;">+เพิ่มใบลา</a></button>
        <br><br>
        <?php
            error_log("Run adminhome.php");
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_leave_system";
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $query = "SELECT employee.first_name, employee.last_name, leavetype.leavetype_name as leave_type, `leave`.starts_date, `leave`.end_date, `leave`.reason, `leave`.`file`
                    FROM `leave`
                    JOIN employee ON `leave`.employee_id = employee.id
                    JOIN leavetype ON `leave`.leavetype_id = leavetype.id
                    ORDER BY `leave`.id DESC";
            $result = $conn->query($query);
            if (!$result) {
                die("Query failed: " . $conn->error);
            }
            while ($row = $result->fetch_assoc()) {
                echo "Employee Name: " . $row['first_name'] . " " . $row['last_name'] . "<br>";
                echo "Leave Type: " . $row['leave_type'] . "<br>";
                echo "Start Date: " . $row['starts_date'] . "<br>";
                echo "End Date: " . $row['end_date'] . "<br>";
                echo "reason: " . $row['reason'] . "<br>";
                echo "เอกสารที่เกี่ยวข้อง"."<br>";
                $imgData = base64_encode($row['file']);
                echo '<img src="data:image/jpeg;base64,'.$imgData.'">'."<br>";
            }
            $conn->close();
        ?>
    </div>    
</body>
</html>
@endsection
