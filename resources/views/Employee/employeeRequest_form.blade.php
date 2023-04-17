@extends('layouts.appCopy')

@section('content')
<div class="content-wrapper">
    <!-- Part -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item">รายการคำขอ</li>
                        <li class="breadcrumb-item"><a href="./request_list.html">รายการคำขอใบลา</a></li>
                        <li class="breadcrumb-item">เพิ่มใบลา</li>
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
                            <h3 class="card-title">เพิ่มใบลา</h3>
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
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">E001</option>
                                                            <option value="">E003</option>
                                                            <option value="" disabled>E002 อยู่ในระหว่างการลา</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">ชื่อ นามสกุล</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">ภูวเดช พาณิชยโสภา</option>
                                                            <option value="">ภูวนาด พาณิชยโสภา</option>
                                                            <option value="">วิชิ พาณิชยโสภา</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">ตำแหน่ง</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">front end</option>
                                                            <option value="">backend</option>
                                                            <option value="">tester</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ประเภทการลา -->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label for="">ประเภทการลา</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">ลาป่วย</option>
                                                            <option value="">ลากิจ</option>                                                           
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ลาตั้งแต่ - ถึง -->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">ลาตั้งแต่ - ถึง</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control float-right" id="reservationtime">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label for="">จำนวนวัน</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">1</option>
                                                            <option value="">2</option>
                                                            <option value="">3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label for="">ชั่วโมง</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">1</option>
                                                            <option value="">2</option>
                                                            <option value="">3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label for="">นาที</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">1</option>
                                                            <option value="">2</option>
                                                            <option value="">3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- เหตุผลการลา -->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label for="">เหตุผลการลา</label>
                                                        <textarea class="form-control" rows="3" placeholder="กรอกที่นี่..." style="height: 99px;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- อัพโหลดไฟล์หลักฐาน -->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label for="">อัพโหลดไฟล์หลักฐาน</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                              <input type="file" class="custom-file-input" id="exampleInputFile">
                                                              <label class="custom-file-label" for="exampleInputFile">อัปโหลด</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <!-- card ระหว่างการลามอบหมายให้ -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">ระหว่างการลามอบหมายให้</h3>
                                        </div>
                                        <div class="card-body">
                                            <!-- รหัสพนักงาน -->
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">รหัสพนักงาน</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">E001</option>
                                                            <option value="">E001</option>
                                                            <option value="">E002</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">ชื่อ นามสกุล</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">ภูวเดช พาณิชยโสภา</option>
                                                            <option value="">ภูวนาด พาณิชยโสภา</option>
                                                            <option value="">วิชิ พาณิชยโสภา</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">ตำแหน่ง</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">front end</option>
                                                            <option value="">backend</option>
                                                            <option value="">tester</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <!-- card เลือก Project manager -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">เลือก Project manager</h3>
                                        </div>
                                        <div class="card-body">
                                            <!-- รหัสพนักงาน -->
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">รหัสพนักงาน</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">E001</option>
                                                            <option value="">E001</option>
                                                            <option value="">E002</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">ชื่อ นามสกุล</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">ภูวเดช พาณิชยโสภา</option>
                                                            <option value="">ภูวนาด พาณิชยโสภา</option>
                                                            <option value="">วิชิ พาณิชยโสภา</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">ตำแหน่ง</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">front end</option>
                                                            <option value="">backend</option>
                                                            <option value="">tester</option>
                                                        </select>
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
                                <button class="btn btn-primary float-right mb-4 mr-4 mt-0">บันทึก</button>
                            </a>
                            <a href="">
                                <button class="btn btn-danger float-right mb-4 mr-4 mt-0">ยกเลิก</button>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div><!-- end content wrapper-->
@endsection