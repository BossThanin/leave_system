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
    {{-- Content --}}
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
            </div><!-- /.container-fluid -->
        </section>
        {{-- Main Content --}}
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-plus mr-2"></i>เพิ่มใบลา</h3>
                            </div>
                            <div class="card-body">
                                <form action="#" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <!-- card รายละเอียดใบลา -->
                                    <div class="row">
                                        <div class="col-12">
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
                                                                <select name="" id="" 
                                                                    class="form-control select2" style="width:100%;">
                                                                    @for ($i = 0; $i < 12; $i++)
                                                                        <option value="">{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                        </div>
                                                        {{-- ชื่อ นามสกุล --}}
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">ชื่อ นามสกุล</label>
                                                                <select id="" name=""
                                                                    class="form-control select2" style="width: 100%;">
                                                                    @for ($i = 0; $i < 12; $i++)
                                                                        <option value="">{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                        </div>
                                                        {{-- ตำแหน่ง --}}
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">ตำแหน่ง</label>
                                                                <select id="" name=""
                                                                    class="form-control select2" style="width: 100%;">
                                                                    @for ($i = 0; $i < 12; $i++)
                                                                        <option value="">{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- ประเภทการลา -->
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">ประเภทการลา</label>
                                                                <select name="" id=""
                                                                    class="form-control select2" style="width:100%;">
                                                                    @for ($i = 0; $i < 12; $i++)
                                                                        <option value="">{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- ลาตั้งแต่-->
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="starts_date">ตั้งแต่</label>
                                                                <div class="input-group date" id="reservationdatetime2" data-target-input="nearest">
                                                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime2">
                                                                        <div class="input-group-append" data-target="#reservationdatetime2" data-toggle="datetimepicker">
                                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- ถึง-->
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="starts_date">ถึง</label>
                                                                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" />
                                                                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                                                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- เหตุผลการลา --}}
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="comment">เหตุผลการลา</label>
                                                                <textarea name="comment" class="form-control" rows="3" placeholder="กรอกที่นี่..." style="height: 99px;"></textarea>
                                                            </div>
                                                        </div>
                                                        {{-- เอกสารประกอบการลา --}}
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="file">เอกสารประกอบการลา</label>
                                                                <div class="input-group">
                                                                    <div class="custom-file">
                                                                        <input type="file" name="image" accept="image/*"
                                                                            maxlength="2097152" class="custom-file-input"
                                                                            onchange="updateLabel(this)">
                                                                        <label class="custom-file-label"
                                                                            for="image">อัปโหลด</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- เอกสารประกอบการลาเพิ่มเติม --}}
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="file">เอกสารประกอบการลาเพิ่มเติม</label>
                                                                <div class="input-group">
                                                                    <div class="custom-file">
                                                                        <input type="file" name="image" accept="image/*"
                                                                            maxlength="2097152" class="custom-file-input"
                                                                            onchange="updateLabel(this)">
                                                                        <label class="custom-file-label"
                                                                            for="image">อัปโหลด</label>
                                                                    </div>
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
                                    <!-- card ระหว่างการลามอบหมายให้ -->
                                    <div class="row">
                                        <div class="col-12">
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
                                                                    class="form-control select2" style="width: 100%;">
                                                                    @for ($i = 0; $i < 12; $i++)
                                                                        <option value="">{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                        </div>
                                                        {{-- ชื่อ นามสกุล --}}
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">ชื่อ นามสกุล</label>
                                                                <select id="" name=""
                                                                    class="form-control select2" style="width: 100%;">
                                                                    @for ($i = 0; $i < 12; $i++)
                                                                        <option value="">{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                        </div>
                                                        {{-- ตำแหน่ง --}}
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">ตำแหน่ง</label>
                                                                <select id="" name=""
                                                                    class="form-control select2" style="width: 100%;">
                                                                    @for ($i = 0; $i < 12; $i++)
                                                                        <option value="">{{ $i }}</option>
                                                                    @endfor
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
                                                    <div class="row">
                                                        <!-- รหัสพนักงาน -->
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="">รหัสพนักงาน</label>
                                                                <select id="" name=""
                                                                    class="form-control select2" style="width: 100%;">
                                                                    @for ($i = 0; $i < 12; $i++)
                                                                        <option value="">{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                        </div>
                                                        {{-- ชื่อ นามสกุล --}}
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">ชื่อ นามสกุล</label>
                                                                <select id="" name=""
                                                                    class="form-control select2" style="width: 100%;">
                                                                    @for ($i = 0; $i < 12; $i++)
                                                                        <option value="">{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                        </div>
                                                        {{-- ตำแหน่ง --}}
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">ตำแหน่ง</label>
                                                                <select id="" name=""
                                                                    class="form-control select2" style="width: 100%;">
                                                                    @for ($i = 0; $i < 12; $i++)
                                                                        <option value="">{{ $i }}</option>
                                                                    @endfor
                                                                </select>
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
                                    {{-- ปุ่ม --}}
                                    <div class="row">
                                        <div class="col-12 text-end">
                                            <a href="">
                                                <button class="btn btn-secondary">ยกเลิก</button>
                                            </a>
                                            <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default" value="บันทึก">                                            
                                            {{-- modal --}}
                                            <div class="modal fade" id="modal-default">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h4 class="modal-title">บันทึกข้อมูล</h4>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                      <p class="text-start">ต้องการบันทึกข้อมูลข้อมูลหรือไม่??</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                                                      <input type="submit" class="btn btn-primary" value="บันทึก">
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
