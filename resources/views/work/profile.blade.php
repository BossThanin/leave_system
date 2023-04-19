@extends('layouts.layout')

@section('content')
    <div class="content-wrapper">
        {{--    part    --}}
        <div class="content">
            <div class="container-fluid">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <ol class="breadcrumb float-sm-left">
                                    <li class="breadcrumb-item"><a href="#">Profile</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        {{--Main content--}}
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-primary ">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                         src="../img/profile.png" alt="User profile picture">
                                </div>
                                <br>
                                <h3 class="profile-username text-center">{{auth()->user()->name}}</h3>
                                <p class="text-center">ตำแหน่ง</p>
                                <p class="text-muted text-center">Software Engineer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">ชื่อเล่น</h3>
                            </div>
                            <div class="card-body">
                                ศรี
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">วันเดือนีเกิด</h3>
                            </div>
                            <div class="card-body">
                                12-12-2022
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">ที่อยู่</h3>
                            </div>
                            <div class="card-body">
                                บ้านเลขที่99  หมู่บ้านอสรพิษ ต.พระรอด อ.สามองค์ จ.วัดอังคาร
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">เบอร์โทรติดต่อ</h3>
                            </div>
                            <div class="card-body">
                                เบอร์หลัก : 012-3456789 <br>
                                เบอร์หลัก : 012-3456789
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">อีเมล</h3>
                            </div>
                            <div class="card-body">
                                อีเมล : developer_001@bda.co.th
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

