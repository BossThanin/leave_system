@extends('layouts.layout')

@section('content')
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
                                                                style="width:100%;" disabled>

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
                                                                style="width: 100%;" disabled>

                                                            <option value="">hello</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- ประเภทการลา -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">ประเภทการลา</label>
                                                        <select name="" id="" class="form-control select2"
                                                                style="width:100%;" disabled>

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
                                                                   data-target="#reservationdatetime2" disabled>
                                                            <div class="input-group-append"
                                                                 data-target="#reservationdatetime2"
                                                                 data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="fa fa-calendar"></i>
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
                                                                   data-target="#reservationdatetime" disabled/>
                                                            <div class="input-group-append"
                                                                 data-target="#reservationdatetime"
                                                                 data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="fa fa-calendar"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- เหตุผลการลา --}}
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="comment">เหตุผลการลา</label>
                                                        <textarea name="comment" class="form-control" rows="3"
                                                                  placeholder="กรอกที่นี่..." style="height: 99px;"
                                                                  disabled></textarea>
                                                    </div>
                                                </div>
                                                {{-- เอกสารประกอบการลา --}}
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="file">เอกสารประกอบการลา</label>
                                                        <div class="file">
                                                            <a href="">
                                                                <ins>ใบรับรองแพทย์.pdf</ins>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- เอกสารประกอบการลาเพิ่มเติม --}}
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="file">เอกสารประกอบการลาเพิ่มเติม</label>
                                                        <div class="file">
                                                            <a href="">
                                                                <ins>รูปภาพผลการตรวจ ATK.png</ins>
                                                            </a>
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
                                                                class="form-control select2" style="width: 100%;"
                                                                disabled>

                                                            <option value="">hello</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                {{-- ชื่อ นามสกุล --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">ชื่อ นามสกุล</label>
                                                        <select id="" name=""
                                                                class="form-control select2" style="width: 100%;"
                                                                disabled>

                                                            <option value="">hello</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                {{-- ตำแหน่ง --}}
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">ตำแหน่ง</label>
                                                        <select id="" name=""
                                                                class="form-control select2" style="width: 100%;"
                                                                disabled>

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
                                                <h1 class="display-4 font-weight-bold text-secondary">
                                                    กำลังดำเนินการ</h1>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- card ความเห็น Project manager -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">ความเห็น Project manager</h3>
                                        </div>
                                        <div class="card-body">
                                            <form action="" method="">
                                                @csrf
                                                <textarea name="" id="" cols="30" rows="10"></textarea>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="name"
                                                           id="" checked>
                                                    <label class="form-check-label" for="">
                                                        อนญาตตามสิทธิ์พนักงาน
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="name"
                                                           id="">
                                                    <label class="form-check-label" for="">
                                                        ไม่อนุญาต เนื่องจาก
                                                        <span><ins>Lorem ipsum dolor sit amet.</ins></span>
                                                    </label>
                                                </div>
                                                <input type="submit" name="" id="" class="btn btn-primary"
                                                       placeholder="save">
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
