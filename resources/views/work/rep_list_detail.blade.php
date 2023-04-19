@extends('layouts.navbar')

@section('content')
    {{-- Content --}}
    <div class="content-wrapper">
        <!-- Part -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">รายการคำขอ / รายการคำขอปฎิบัติแทน</a></li>
                            <li class="breadcrumb-item">รายละเอียด</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        {{-- Main Content --}}
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">รายละเอียด</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">รายละเอียดใบลา</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    {{-- รหัสพนักงาน --}}
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">รหัสพนักงาน</label>
                                                            <input type="text" class="form-control" disabled value="{{ auth()->user()->id }}">
                                                        </div>
                                                    </div>
                                                    {{-- ชื่อ - นามสกุล --}}
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">ชื่อ - นามสกุล</label>
                                                            <input type="text" class="form-control" disabled value="{{ auth()->user()->name }}">
                                                        </div>
                                                    </div>
                                                    {{-- ตำแหน่ง --}}
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">ตำแหน่ง</label>
                                                            <input type="text" class="form-control" disabled value="{{ auth()->user()->email }}">
                                                        </div>
                                                    </div>
                                                    {{-- ประเภทลา --}}
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">ประเภทการลา</label>
                                                            <input type="text" class="form-control" disabled value="ลาป่วย">
                                                        </div>
                                                    </div>
                                                    {{-- ลาตั้งแต่ --}}
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="starts_date">ตั้งแต่</label>
                                                            <div class="input-group date" id="reservationdatetime2" data-target-input="nearest">
                                                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime2" disabled>
                                                                    <div class="input-group-append" data-target="#reservationdatetime2" data-toggle="datetimepicker">
                                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- ถึง --}}
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="starts_date">ตั้งแต่</label>
                                                            <div class="input-group date" id="reservationdatetime2" data-target-input="nearest">
                                                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime2" disabled>
                                                                    <div class="input-group-append" data-target="#reservationdatetime2" data-toggle="datetimepicker">
                                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- เหตุผลการลา --}}
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="comment">เหตุผลการลา</label>
                                                            <textarea name="comment" class="form-control" rows="3" style="height: 99px;"disabled>hello</textarea>
                                                        </div>
                                                    </div>
                                                    {{-- เอกสารประกอบการลา --}}
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">เอกสารประกอบการลา</label>
                                                            <div class="">
                                                                <a href=""><ins>ใบรับรองแพทย์.pdf</ins></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- เอกสารประกอบการลาเพิ่มเติม (ถ้ามี)--}}
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">เอกสารประกอบการลาเพิ่มเติม (ถ้ามี)</label>
                                                            <div class="">
                                                                <a href=""><ins>ใบรับรองแพทย์.png</ins></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <a href="">
                                            <button class="btn btn-danger">ปฏิเสธปฏิบัติแทน</button>
                                        </a>
                                        <a href="">
                                            <button class="btn btn-primary">รับทราบ</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
