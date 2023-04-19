@extends('layouts.appCopy')

@section('content')
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

    $query = "SELECT `leave`.reason, positions.position_name, employee.position_id, employee.phone_number ,  employee.id, employee.first_name, employee.last_name, leavetype.leavetype_name as leave_type, `leave`.starts_date, `leave`.end_date, `leave`.reason, `leave`.`file`
        FROM `leave`
        JOIN employee ON `leave`.employee_id = employee.id
        JOIN leavetype ON `leave`.leavetype_id = leavetype.id
        JOIN positions ON employee.position_id = positions.id
        WHERE `leave`.id = 1";
    $result = $conn->query($query);

    $options_id = "";
    $options_name = "";
    $options_positions = "";
    $options_leavetype = "";
    $options_time = "";
    $options_reason = "";
    $options_phonenumber = "";
    while($row = $result->fetch_assoc()){
        $options_id .= "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
        $options_name .= "<option value='" . $row['first_name'] . "'>" . $row['first_name'] ." ". $row['last_name'] . "</option>";
        $options_leavetype .= "<option value='" . $row['leave_type'] . "'>" . $row['leave_type'] . "</option>";
        $options_time .= "<option value='" . $row['starts_date'] . "'>" . date('Y-m-d H:i', strtotime($row['starts_date'])) ." - ". date('Y-m-d H:i', strtotime($row['end_date'])) . "</option>";
        $options_positions .= "<option value='" . $row['id'] . "'>" . $row['position_name'] . "</option>";
        $options_reason .= "<option value='" . $row['reason'] . "'>" . $row['reason'];
        $options_phonenumber = "<option value='" . $row['phone_number'] . "'>" . $row['phone_number'] . "</option>";
    }
    $conn->close();
?>
<div class="content-wrapper">
    <!-- Part -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item">รายการคำขอ</li>
                        <li class="breadcrumb-item"><a href="./replacement_list.html">รายการคำขอปฎิบัติแทน</a></li>
                        <li class="breadcrumb-item">รายละเอียด</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- รายการคำขอใบลา -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายละเอียด</h3>
                        </div>
                        <div class="card-body">
                            <!-- card รายละเอียดใบลา -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">รายละเอียดใบลา</h3>
                                        </div>
                                        <div class="card-body">
                                            <!-- รหัสพนักงาน -->
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">รหัสพนักงาน</label>
                                                        <select class="form-control select2" style="width: 100%;" disabled="disabled">
                                                        <?php echo $options_id ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">ชื่อ - นามสกุล</label>
                                                        <select class="form-control select2" style="width: 100%;" disabled="disabled">
                                                        <?php echo $options_name ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">ตำแหน่ง</label>
                                                        <select class="form-control select2" style="width: 100%;" disabled="disabled">
                                                        <?php echo $options_positions ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ประเภทการลา -->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label for="">ประเภทการลา</label>
                                                        <select class="form-control select2" style="width: 100%;" disabled="disabled">
                                                        <?php echo $options_leavetype ?>                                                       
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ลาตั้งแต่ - ถึง -->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label for="">ลาตั้งแต่ - ถึง</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                            </div>
                                                            <label type="datetime-local" class="form-control float-right" id="reservationtime">
                                                                <?php 
                                                                    if (isset($options_time)) {
                                                                        echo $options_time; 
                                                                    }
                                                                ?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- เหตุผลการลา -->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label for="">เหตุผลการลา</label>
                                                        <textarea class="form-control" rows="3" placeholder="กรอกที่นี่..." style="height: 99px;" disabled <?php echo $options_reason; ?>></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- อัพโหลดไฟล์หลักฐาน -->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label for="">ไฟล์หลักฐาน</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">                                                                                                                                    
                                                              <span class="mr-4">
                                                                <a href="">file1.png</a>
                                                              </span>
                                                              <span class="mr-4">
                                                                <a href="">file2.pdf</a>
                                                              </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <span>
                            <a href="">
                                <button class="btn btn-primary float-right mb-4 mr-4 mt-0">รับทราบ</button>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div><!-- end content wrapper-->
@endsection