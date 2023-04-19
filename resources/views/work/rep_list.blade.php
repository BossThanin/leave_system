@extends('layouts.layout')

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
                                <h3 class="card-title">รายการคำขอใบลา</h3>
                            </div>

                            <div class="card-body">
                                <table id="table-main-notification" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>วันที่ยื่นคำร้อง</th>
                                        <th>ประเภทการลา</th>
                                        <th>วันที่ลาตั้งแต่</th>
                                        <th>ถึง</th>
                                        <th>ลาทั้งหมด</th>
                                        <th>จาก</th>
                                        <th>สถานะ</th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @for ($i = 0; $i < 12; $i++)
                                        <tr>
                                            <td>12-12-12 12:00AM</td>
                                            <td>ลาป่วย</td>
                                            <td>12-12-12 12:00AM</td>
                                            <td>12-12-12 12:00AM</td>
                                            <td>2 วัน 2 ชั่วโมง 2 นาที</td>
                                            <td>นายปรีดี พยมพงษ์</td>
                                            <td>อนุมัติ</td>
                                            <td>
                                                <a href="{{route('rep_list_detail')}}">
                                                    <button type="button" class="btn btn-sm btn-block btn-secondary">
                                                        ดู
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endfor
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
