@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    You are Employee.
                    <button type="button" class="btn" style="background-color: #a3c3b5; color: #fff;"> <a href="/leave-form" style="color: #fff;">เพิ่มใบลา</a></button>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection