{{-- @extends('layouts.app') --}}
@extends('layouts.appCopy')

@section('content')
<!-- content wrapper-->
<div class="content-wrapper">
    <!-- Part -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="#">เมนูหลัก</a></li>
              </ol>
            </div>
          </div>
        </div>
      </section>

    <!-- content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <img class="main-pictor mb-2" src="../img/main picture.png" alt="รูปหาย" style="border-radius: 14px; border: none;">
                </div>
            </div>
            <div class="row">
                <!-- รายการแจ้งเตือน -->
                <div class="col-7">
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
                                            <button type="button" class="btn btn-block btn-secondary">ดู</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11/12/12</td>
                                        <td>vvvvภูวเดช พาณิชยโสภา</td>
                                        <td>ลากิจ</td>
                                        <td>อนุมัติ</td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-secondary">ดู</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- จำนวนวันลา -->
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">จำนวนวันลา</h3>
                        </div>
                        <div class="card-body">
                            <table id="table-leave-day" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ประเภทการลา</th>
                                        <th>ลาไปแล้ว</th>
                                        <th>คงเหลือ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ลากิจ</td>
                                        <td>5 วัน 0 ชม. 0 นาที</td>
                                        <td>5 วัน 0 ชม. 0 นาที</td>                                                
                                    </tr>                                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div><!-- end content wrapper-->
@endsection