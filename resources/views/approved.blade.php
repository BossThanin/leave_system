@extends('layouts.appCopy')

@section('content')

<?php
    error_log("Run 555home.php");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_leave_system";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT `leave`.reason,`leave`.reason_pm, positions.position_name, employee.position_id, employee.phone_number ,  employee.id, employee.first_name, employee.last_name, leavetype.leavetype_name as leave_type, `leave`.starts_date, `leave`.end_date, `leave`.reason, `leave`.`file`
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
    $options_starttime = "";
    $options_endtime = "";
    $options_reason = "";
    $options_phonenumber = "";
    while($row = $result->fetch_assoc()){
        $options_id .= "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
        $options_name .= "<option value='" . $row['first_name'] . "'>" . $row['first_name'] ." ". $row['last_name'] . "</option>";
        $options_leavetype .= "<option value='" . $row['leave_type'] . "'>" . $row['leave_type'] . "</option>";
        $options_starttime .= "<option value='" . $row['starts_date'] . "'>" . date('Y-m-d H:i', strtotime($row['starts_date'])) . "</option>";
        $options_endtime .= "<option value='" . $row['end_date'] . "'>" . date('Y-m-d H:i', strtotime($row['end_date'])) . "</option>";
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
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">รายการคำขอ / รายการคำขอใบลา </a></li>
                            <li class="breadcrumb-item active">เพิ่มใบลา</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <div class="content">
            <div class="container-fluid">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-plus mr-2"></i>รายละเอียด</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                {{-- card left --}}
                                <div class="col-md-8">
                                    <!-- card รายละเอียดใบลา -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">รายละเอียดใบลา</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <!-- รหัสพนักงาน -->
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">รหัสพนักงาน</label>
                                                        <select name="" id="" class="form-control select2" 
                                                        style="width:100%;"disabled>

                                                        <?php echo $options_id ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                {{-- ชื่อ นามสกุล --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">ชื่อ นามสกุล</label>
                                                        <select id="" name="" class="form-control select2"
                                                            style="width: 100%;" disabled>

                                                            <?php echo $options_name ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                {{-- ตำแหน่ง --}}
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">ตำแหน่ง</label>
                                                        <select id="" name="" class="form-control select2"
                                                            style="width: 100%;"disabled>

                                                            <?php echo $options_positions ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- ประเภทการลา -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">ประเภทการลา</label>
                                                        <select name="" id="" class="form-control select2"
                                                            style="width:100%;"disabled>

                                                            <?php echo $options_leavetype ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- ลาตั้งแต่-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="starts_date">ตั้งแต่</label>
                                                        <div class="input-group date" id="reservationdatetime2"
                                                            data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input"
                                                                data-target="#reservationdatetime2"disabled><?php echo $options_starttime ?>
                                                            <div class="input-group-append"
                                                                data-target="#reservationdatetime2"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ถึง-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="starts_date">ถึง</label>
                                                        <div class="input-group date" id="reservationdatetime"
                                                            data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input"
                                                                data-target="#reservationdatetime" disabled><?php echo $options_endtime ?>
                                                            <div class="input-group-append"
                                                                data-target="#reservationdatetime"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- เหตุผลการลา --}}
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="comment">เหตุผลการลา</label>
                                                        <textarea name="comment" class="form-control" rows="3" placeholder="กรอกที่นี่..." style="height: 99px;" disabled <?php echo $options_reason ?>></textarea>
                                                    </div>
                                                </div>
                                                {{-- เอกสารประกอบการลา --}}
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="file">เอกสารประกอบการลา</label>
                                                        <div class="file">
                                                            <a href=""><ins>ใบรับรองแพทย์.pdf</ins></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- เอกสารประกอบการลาเพิ่มเติม --}}
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="file">เอกสารประกอบการลาเพิ่มเติม</label>
                                                        <div class="file">
                                                            <a href=""><ins>รูปภาพผลการตรวจ ATK.png</ins></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card ระหว่างการลามอบหมายให้ -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">ผู้ปฏิบัติงานแทน</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <!-- รหัสพนักงาน -->
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">รหัสพนักงาน</label>
                                                        <select id="" name=""
                                                            class="form-control select2" style="width: 100%;" disabled>

                                                            <option value="">hello</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                {{-- ชื่อ นามสกุล --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">ชื่อ นามสกุล</label>
                                                        <select id="" name=""
                                                            class="form-control select2" style="width: 100%;" disabled>

                                                            <option value="">hello</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                {{-- ตำแหน่ง --}}
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">ตำแหน่ง</label>
                                                        <select id="" name=""
                                                            class="form-control select2" style="width: 100%;"disabled>

                                                            <option value="">hello</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">กรณีไม่มีผู้ปฏิบัติงานแทน สามารถ
                                                            (ติดต่อ)</label>
                                                        <input type="text" class="form-control" value="089266xxxx"
                                                            disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- card สถานะ -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">สถานะ</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h1 class="display-4 font-weight-bold text-secondary">กำลังดำเนินการ</h1>

                                            </div>
                                        </div>
                                    </div>
                                    <?php error_log($options_endtime); ?>
                                    <!-- card ความเห็น Project manager -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">ความเห็น Project manager</h3>
                                        </div>
                                        <div class="card-body">
                                            <form action="">
                                                <div class="form-group">
                                                    <input type="text" name="reason_pm" class="form-control">
                                                </div>
                                                <button type="submit" class="btn btn-primary">บันทึก</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-end">
                                    {{-- <a href="">
                                        <button class="btn btn-primary">พิมพ์ใบลา</button>
                                    </a> --}}
                                    <a href="">
                                        <button class="btn btn-primary">save</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


