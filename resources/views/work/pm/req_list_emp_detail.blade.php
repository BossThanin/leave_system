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
        <!-- Main Content -->
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
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">รายละเอียดใบลา</h3>
                                            </div>
                                            <div class="card-body">
                                                content
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">รายละเอียดใบลา</h3>
                                            </div>
                                            <div class="card-body">
                                                content
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">สถานะ</h3>
                                            </div>
                                            <div class="card-body">
                                                content
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">ความเห็น Project manager</h3>
                                            </div>
                                            <div class="card-body">
                                                content
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <input type="button" class="btn btn-danger" data-toggle="modal" data-target="#unsave" value="un save">
                                        <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#save" value="save">
                                        {{--Modal--}}
                                        <div class="modal fade" id="save">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">ความเห็น Project manager</h4>
                                                    </div>
                                                    <form action="">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <textarea name="comment" class="form-control" rows="10"
                                                                      placeholder="กรอกที่นี่..."
                                                                      style="height: 99px;">
                                                            </textarea>
                                                            <div class="form-check text-start">
                                                                <input class="form-check-input" type="radio" name="1"
                                                                       id="">
                                                                <label class="form-check-label" for="">
                                                                    ไม่รับค่าแรงตามจำนวนวันที่ลา
                                                                </label>
                                                            </div>
                                                            <div class="form-check text-start">
                                                                <input class="form-check-input" type="radio" name="1"
                                                                       id="">
                                                                <label class="form-check-label" for="">
                                                                    ทำงานชดเชยเป็นจำนวน
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">ยกเลิก
                                                            </button>
                                                            <input type="submit" class="btn btn-primary" value="บันทึก">
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="unsave">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">ไม่อนุญาติเนื่องจาก</h4>
                                                    </div>
                                                    <form action="">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <textarea name="comment" class="form-control" rows="10"
                                                                      placeholder="กรอกที่นี่..."
                                                                      style="height: 99px;">
                                                            </textarea>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">ยกเลิก
                                                            </button>
                                                            <input type="submit" class="btn btn-primary" value="บันทึก">
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
                </div>
            </div>
        </div>
    </div>
@endsection
