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
                            <form action="{{ route('leave-form.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
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
                                                        <label for="employee_id">รหัสพนักงาน</label>
                                                        <select name="employee_id" class="form-control select2" style="width: 100%;">
                                                            @foreach ($employees as $employee)
                                                                <option value="{{ $employee->id }}">{{ $employee->id }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="employee_id">ชื่อ นามสกุล</label>
                                                        <select name="employee_id" class="form-control select2" style="width: 100%;">
                                                            @foreach ($employees as $employee)
                                                                <option value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ประเภทการลา -->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label for="">ประเภทการลา</label>
                                                        <select name="leavetype_id" class="form-control select2" style="width: 100%;">
                                                            @foreach ($leavetypes as $leavetype)
                                                                <option value="{{ $leavetype->id }}">{{ $leavetype->leavetype_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ลาตั้งแต่ - ถึง -->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="starts_date">ตั้งแต่ - ถึง</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                            </div>
                                                            <input type="datetime-local" name="starts_date" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="end_date"></label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                            </div>
                                                            <input type="datetime-local" name="end_date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- เหตุผลการลา -->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label for="comment">เหตุผลการลา</label>
                                                        <textarea name="comment" class="form-control" rows="3" placeholder="กรอกที่นี่..." style="height: 99px;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- อัพโหลดไฟล์หลักฐาน -->
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label for="image">อัพโหลดไฟล์หลักฐาน</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" name="image" accept="image/*" maxlength="2097152" class="custom-file-input" onchange="updateLabel(this)">
                                                                <label class="custom-file-label" for="image">อัปโหลด</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                            function updateLabel(input) {
                                                var label = input.nextElementSibling;
                                                var fileName = input.files[0].name;
                                                label.innerHTML = fileName;
                                            }
                                            </script>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <span>
                                <div style="text-align: right;">
                                    <input type="submit" class="btn btn-primary float-right mb-4 mr-4 mt-0" value="บันทึก">
                                    <a href="{{ route('home')}}" class="btn btn-danger float-right mb-4 mr-4 mt-0">ยกเลิก</a>
                                </div>
                            </span>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
