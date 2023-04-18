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
                    <a href="{{ route('employee.home') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            เมนูหลัก
                        </p>
                    </a>
                </li>

                <!-- รายการคำขอ -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            รายการคำขอ
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('employee.req_list') }}" class="nav-link">
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
                            <li class="breadcrumb-item"><a href="#">เมนูหลัก </a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        {{-- Main Content --}}
        <div class="content">
            <div class="container-fluid">
                {{-- จำนวนวันลา --}}
                <div class="row">
                    {{-- ลาป่วย --}}
                    <div class="col-lg-3">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>ลาป่วย</h3>
                                <p>ลาไปแล้ว 3 วัน 3 ชั่วโมง 3 นาที</p>
                                <p>คงเหลือ 3 วัน 3 ชั่วโมง 3 นาที</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-stethoscope"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    {{-- ลาพักผ่อนประจำปี --}}
                    <div class="col-lg-3">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>ลาพักผ่อนประจำปี</h3>
                                <p>ลาไปแล้ว 3 วัน 3 ชั่วโมง 3 นาที</p>
                                <p>คงเหลือ 3 วัน 3 ชั่วโมง 3 นาที</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-umbrella"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    {{-- ลากิจ --}}
                    <div class="col-lg-3">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>ลากิจ</h3>
                                <p>ลาไปแล้ว 3 วัน 3 ชั่วโมง 3 นาที</p>
                                <p>คงเหลือ 3 วัน 3 ชั่วโมง 3 นาที</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    {{-- ลาอุปสมบท --}}
                    <div class="col-lg-3">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>ลาอุปสมบท</h3>
                                <p>ลาไปแล้ว 3 วัน 3 ชั่วโมง 3 นาที</p>
                                <p>คงเหลือ 3 วัน 3 ชั่วโมง 3 นาที</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-church"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    {{-- ลาเพื่อสมรส --}}
                    <div class="col-lg-3">
                        <div class="small-box" style="background-color: #6c757d;">
                            <div class="inner">
                                <h3>ลาเพื่อสมรส</h3>
                                <p>ลาไปแล้ว 3 วัน 3 ชั่วโมง 3 นาที</p>
                                <p>คงเหลือ 3 วัน 3 ชั่วโมง 3 นาที</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    {{-- ลาคลอดบุตร --}}
                    <div class="col-lg-3">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>ลาคลอดบุตร</h3>
                                <p>ลาไปแล้ว 3 วัน 3 ชั่วโมง 3 นาที</p>
                                <p>คงเหลือ 3 วัน 3 ชั่วโมง 3 นาที</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-baby"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    {{-- ลารับราชการทหาร --}}
                    <div class="col-lg-3">
                        <div class="small-box bg-dark">
                            <div class="inner">
                                <h3>ลารับราชการทหาร</h3>
                                <p>ลาไปแล้ว 3 วัน 3 ชั่วโมง 3 นาที</p>
                                <p>คงเหลือ 3 วัน 3 ชั่วโมง 3 นาที</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-fighter-jet"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    {{-- ลาเพื่อทำหมัน --}}
                    <div class="col-lg-3">
                        <div class="small-box" style="background-color: #af3a94;">
                            <div class="inner">
                                <h3>ลาเพื่อทำหมัน</h3>
                                <p>ลาไปแล้ว 3 วัน 3 ชั่วโมง 3 นาที</p>
                                <p>คงเหลือ 3 วัน 3 ชั่วโมง 3 นาที</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-cut"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    {{-- ลาเพื่อการฝึกอบรม --}}
                    <div class="col-lg-3">
                        <div class="small-box" style="background-color: #7952b3;">
                            <div class="inner">
                                <h3>ลาเพื่อการฝึกอบรม</h3>
                                <p>ลาไปแล้ว 3 วัน 3 ชั่วโมง 3 นาที</p>
                                <p>คงเหลือ 3 วัน 3 ชั่วโมง 3 นาที</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                </div>
                {{-- รายการแจ้งเตือน --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">รายการแจ้งเตือน</h3>
                            </div>
                            <div class="card-body">
                                <table id="table-main-notification" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>วันที่แจ้งเตือน</th>
                                            <th>จาก</th>
                                            <th>ประเภท</th>
                                            <th>สถานะ</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>12/12/12</td>
                                            <td>ภูวเดช พาณิชยโสภา</td>
                                            <td>ลาป่วย</td>
                                            <td>กำลังดำเนินการ</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-block btn-secondary">ดู</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11/12/12</td>
                                            <td>vvvvภูวเดช พาณิชยโสภา</td>
                                            <td>ลากิจ</td>
                                            <td>อนุมัติ</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-block btn-secondary">ดู</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11/12/12</td>
                                            <td>vvvvภูวเดช พาณิชยโสภา</td>
                                            <td>ลากิจ</td>
                                            <td>อนุมัติ</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-block btn-secondary">ดู</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11/12/12</td>
                                            <td>vvvvภูวเดช พาณิชยโสภา</td>
                                            <td>ลากิจ</td>
                                            <td>อนุมัติ</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-block btn-secondary">ดู</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11/12/12</td>
                                            <td>vvvvภูวเดช พาณิชยโสภา</td>
                                            <td>ลากิจ</td>
                                            <td>อนุมัติ</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-block btn-secondary">ดู</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11/12/12</td>
                                            <td>vvvvภูวเดช พาณิชยโสภา</td>
                                            <td>ลากิจ</td>
                                            <td>อนุมัติ</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-block btn-secondary">ดู</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11/12/12</td>
                                            <td>vvvvภูวเดช พาณิชยโสภา</td>
                                            <td>ลากิจ</td>
                                            <td>อนุมัติ</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-block btn-secondary">ดู</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11/12/12</td>
                                            <td>vvvvภูวเดช พาณิชยโสภา</td>
                                            <td>ลากิจ</td>
                                            <td>อนุมัติ</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-block btn-secondary">ดู</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11/12/12</td>
                                            <td>vvvvภูวเดช พาณิชยโสภา</td>
                                            <td>ลากิจ</td>
                                            <td>อนุมัติ</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-block btn-secondary">ดู</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11/12/12</td>
                                            <td>vvvvภูวเดช พาณิชยโสภา</td>
                                            <td>ลากิจ</td>
                                            <td>อนุมัติ</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-block btn-secondary">ดู</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11/12/12</td>
                                            <td>vvvvภูวเดช พาณิชยโสภา</td>
                                            <td>ลากิจ</td>
                                            <td>อนุมัติ</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-block btn-secondary">ดู</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11/12/12</td>
                                            <td>vvvvภูวเดช พาณิชยโสภา</td>
                                            <td>ลากิจ</td>
                                            <td>อนุมัติ</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-block btn-secondary">ดู</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11/12/12</td>
                                            <td>vvvvภูวเดช พาณิชยโสภา</td>
                                            <td>ลากิจ</td>
                                            <td>อนุมัติ</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-block btn-secondary">ดู</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11/12/12</td>
                                            <td>vvvvภูวเดช พาณิชยโสภา</td>
                                            <td>ลากิจ</td>
                                            <td>อนุมัติ</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-block btn-secondary">ดู</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11/12/12</td>
                                            <td>vvvvภูวเดช พาณิชยโสภา</td>
                                            <td>ลากิจ</td>
                                            <td>อนุมัติ</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-block btn-secondary">ดู</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
