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
                <li class="breadcrumb-item"><a href="#">รายการคำขอปฎิบัติแทน</a></li>
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
                            <h3 class="card-title">รายการคำขอปฎิบัติแทน</h3>
                        </div>
                        <div class="card-body">
                            <table id="table-requst-list" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>วันที่ยืนคำร้อง</th>
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
                                    @for($i=0;$i<20;$i++)
                                    <tr>
                                        <td>12/12/12</td>
                                        <td>ลาป่วย</td>                                                
                                        <td>12/12/12</td>
                                        <td>12/12/12</td>
                                        <td>1 วัน 1 ชั่วโมง 1 นาที</td>
                                        <td>ภูวเดช พาณิชยโสภา</td>
                                        <td>กำลังดำเนินการ</td>
                                        <td>
                                            <a href="{{route('employee.rep_detail')}}">
                                                <button type="button" class="btn btn-block btn-secondary">ดู</button>
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
    </section>

</div><!-- end content wrapper-->
@endsection