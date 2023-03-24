<html>
    <head>
        <title>New Page</title>
    </head>
    <body>
        <h1>Welcome to the Leave System!</h1>
        <p>Your Information</p>
        <?php
            // Connect to the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "leave_system";
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $query = "SELECT `leave`.leave_id, `leave`.starts_date, `leave`.end_date, leavetype.leave_type_name, employee.first_name, employee.last_name
            FROM `leave`
            JOIN leavetype ON `leave`.leave_type_id = leavetype.leave_type_id
            JOIN employee ON `leave`.employee_id = employee.employee_id";
            $result = $conn->query($query);
            if (!$result) {
                die("Query failed: " . $conn->error);
            }
            while ($row = $result->fetch_assoc()) {
                echo "Leave ID: " . $row['leave_id'] . "<br>";
                echo "Start Date: " . $row['starts_date'] . "<br>";
                echo "End Date: " . $row['end_date'] . "<br>";
                echo "Leave Type: " . $row['leave_type_name'] . "<br>";
                echo "Employee Name: " . $row['first_name'] . " " . $row['last_name'] . "<br>";
            }
            $query1 = "SELECT * FROM document";
            $result1 = $conn->query($query1);
            if (!$result1) {
                die("Query failed: " . $conn->error);
            }
            while ($row = $result1->fetch_assoc()) {
                echo "Document ID: " . $row['document_id'] . "<br>";
                echo "Comment: " . $row['comment'] . "<br>";
                $imgData = base64_encode($row['image']);
                echo '<img src="data:image/jpeg;base64,'.$imgData.'">'."<br>";
            }
            $conn->close();
        ?>
    </body>
</html>