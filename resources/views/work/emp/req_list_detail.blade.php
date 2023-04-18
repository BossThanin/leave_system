@extends('layouts.navbar')
<!-- sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Big data agency -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-bold">Big Data Agency</span>
    </a>
    <!-- Menu ต่างๆ -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- เมนูหลัก -->
                <li class="nav-item">
                    <a href="{{ route('employee.home') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            เมนูหลัก
                        </p>
                    </a>
                </li>

                <!-- รายการคำขอ -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            รายการคำขอ
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('employee.req_list') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>รายการคำขอใบลา</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('employee.rep_list') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>รายการคำขอปฎิบัติแทน</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

</aside>

@section('content')
    <div class="content-wrapper">
        <!-- Part -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">รายการคำขอ / รายการคำขอใบลา / รายละเอียด</a></li>
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

                                                            <option value="">hello</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                {{-- ชื่อ นามสกุล --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">ชื่อ นามสกุล</label>
                                                        <select id="" name="" class="form-control select2"
                                                            style="width: 100%;" disabled>

                                                            <option value="">hello</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                {{-- ตำแหน่ง --}}
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">ตำแหน่ง</label>
                                                        <select id="" name="" class="form-control select2"
                                                            style="width: 100%;"disabled>

                                                            <option value="">hello</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- ประเภทการลา -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">ประเภทการลา</label>
                                                        <select name="" id="" class="form-control select2"
                                                            style="width:100%;"disabled>

                                                            <option value="">hello</option>

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
                                                                data-target="#reservationdatetime2"disabled>
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
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                data-target="#reservationdatetime" disabled />
                                                            <div class="input-group-append"
                                                                data-target="#reservationdatetime"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- เหตุผลการลา --}}
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="comment">เหตุผลการลา</label>
                                                        <textarea name="comment" class="form-control" rows="3" placeholder="กรอกที่นี่..." style="height: 99px;"
                                                            disabled></textarea>
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
                                            <h3 class="card-title">ระหว่างการลามอบหมายให้</h3>
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
                                {{-- card right --}}
                                <div class="col-md-4">
                                    <!-- card สถานะ -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">สถานะ</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h1 class="display-4 font-weight-bold text-success">อนุมัติ</h1>
                                                <h5 class="text-muted">12-12-12 01:00 PM</h5>
                                                <h4 class="font-weight-bold">ผุ้อนุมัติ</h4>
                                                <h5 class="text-muted">นายณัฐดนัย หอมดง</h5>
                                                <h5 class="font-weight-bold">ตำแหน่ง
                                                    <span class="text-muted font-weight-normal">Solution Architect
                                                        Director</span>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card ความเห็น Project manager -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">ความเห็น Project manager</h3>
                                        </div>
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Voluptate necessitatibus sunt soluta? Lorem ipsum dolor
                                                sit amet consectetur adipisicing elit. Quod sequi dolorib
                                                us rem?</p>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name=""
                                                    id="" checked disabled>
                                                <label class="form-check-label" for="">
                                                    อนญาตตามสิทธิ์พนักงาน
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name=""
                                                    id="" disabled>
                                                <label class="form-check-label" for="">
                                                    ไม่อนุญาต เนื่องจาก
                                                    <span><ins>Lorem ipsum dolor sit amet.</ins></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card ความเห็น Solution Architect Director -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">ความเห็น Solution Architect Director</h3>
                                        </div>
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Voluptate necessitatibus sunt soluta? Lorem ipsum dolor
                                                sit amet consectetur adipisicing elit. Quod sequi dolorib
                                                us rem?</p>
                                        </div>
                                    </div>
                                    <!-- card ความเห็น เพิ่มเติม -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">เพิ่มเติม</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name=""
                                                    id="" checked disabled>
                                                <label class="form-check-label" for="">
                                                    ไม่ต้องชดเชยเวลา
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name=""
                                                    id="" disabled>
                                                <label class="form-check-label" for="">
                                                    ไม่รับค่าแรงตามจำนวนวันที่ลา
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name=""
                                                    id="" disabled>
                                                <label class="form-check-label" for="">
                                                    ชดเชยวันลา
                                                    <span><ins>จำนวน 4 วัน 5 ชม. 0 นาที </ins></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-end">
                                    <a href="">
                                        <button class="btn btn-primary">พิมพ์ใบลา</button>
                                    </a>
                                    <a href="">
                                        <button class="btn btn-primary">หลับสู่หน้าหลัก</button>
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
