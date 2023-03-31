@extends('layouts.app')

@section('content')
<html>
    <head>
        <title>New Page</title>
    </head>
    <body>
        <h1>Welcome to the Leave System!</h1>
        <p>You are Admin.</p>
        <?php
            // $servername = "localhost";
            // $username = "root";
            // $password = "";
            // $dbname = "leave_system";
            // $conn = new mysqli($servername, $username, $password, $dbname);

            // if ($conn->connect_error) {
            //     die("Connection failed: " . $conn->connect_error);
            // }
            // $query = "SELECT `leave`.leave_id, `leave`.starts_date, `leave`.end_date, leavetype.leave_type_name, employee.first_name, employee.last_name,
            // document.document_id, document.comment, document.image
            // FROM `leave`
            // JOIN leavetype ON `leave`.leave_type_id = leavetype.leave_type_id
            // JOIN employee ON `leave`.employee_id = employee.employee_id
            // JOIN document ON `leave`.document_id = document.document_id 
            // ORDER BY `leave`.leave_id DESC";
            // $result = $conn->query($query);
            // if (!$result) {
            //     die("Query failed: " . $conn->error);
            // }
            // while ($row = $result->fetch_assoc()) {
            //     echo "Leave ID: " . $row['leave_id'] . "<br>";
            //     echo "Start Date: " . $row['starts_date'] . "<br>";
            //     echo "End Date: " . $row['end_date'] . "<br>";
            //     echo "Leave Type: " . $row['leave_type_name'] . "<br>";
            //     echo "Employee Name: " . $row['first_name'] . " " . $row['last_name'] . "<br>";
            //     echo "Document ID: " . $row['document_id'] . "<br>";
            //     echo "Comment: " . $row['comment'] . "<br>";
            //     echo "เอกสารที่เกี่ยวข้อง"."<br>";
            //     $imgData = base64_encode($row['image']);
            //     echo '<img src="data:image/jpeg;base64,'.$imgData.'">'."<br>";
            // }
            // $conn->close();
            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_leave_system";
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $query = "SELECT employee.first_name, employee.last_name, leavetype.leavetype_name as leave_type, `leave`.starts_date, `leave`.end_date, `leave`.comment, `leave`.`image`
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
                echo "Comment: " . $row['comment'] . "<br>";
                echo "เอกสารที่เกี่ยวข้อง"."<br>";
                $imgData = base64_encode($row['image']);
                echo '<img src="data:image/jpeg;base64,'.$imgData.'">'."<br>";
            }
            $conn->close();
        ?>
    </body>
</html>
@endsection
