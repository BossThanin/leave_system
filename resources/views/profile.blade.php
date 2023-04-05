@extends('layouts.appCopy')

@section('content')
<div class="content-wrapper">
    <!-- Part -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item">โปรไฟล์ส่วนตัว</li>                        
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
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <img src="../dist/img/avatar.png" alt="" style="border-radius: 100px;">
                            </center>
                            <hr>
                            <p style="text-align: center;font-size:23px" class="font-weight-bold">นายสมศรีเขียวเจริญ</p>
                            <p style="text-align: center;font-size:20px" class="font-weight-bold">ตำแหน่ง</p>
                            <p style="text-align: center;font-size:20px">Front end</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3><div class="card-title font-weight-normal">ชื่อเล่น</div></h3>
                        </div>
                        <div class="card-body">
                            ศรี
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3><div class="card-title font-weight-normal">วันเดือนปีเกิด</div></h3>
                        </div>
                        <div class="card-body">
                            12/12/425
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3><div class="card-title font-weight-normal">เบอร์โทรติดต่อ</div></h3>
                        </div>
                        <div class="card-body">
                            <div class="main-phone">
                                เบอร์หลัก : 
                            </div>
                            <div class="second-phone">
                                เบอร์รอง : 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3><div class="card-title font-weight-normal">อีเมล</div></h3>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae quas dolorum eligendi aut quo quod nam reiciendis itaque neque atque?
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div><!-- end content wrapper-->
@endsection
