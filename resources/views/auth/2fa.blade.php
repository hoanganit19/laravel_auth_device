@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Xác minh 2 bước</div>

                <div class="card-body">
                    @if (session('msg'))
                    <div class="alert alert-danger text-center">{{session('msg')}}</div>
                    @endif
                    <form method="POST" action="">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">OTP</label>

                            <div class="col-md-6">
                                <input id="otp" type="number" class="form-control" name="otp" value="{{ old('otp') }}" required autocomplete="otp" autofocus>

                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Xác nhận
                                </button>

                                <a class="btn btn-link" href="{{ route('login') }}">
                                    Quay lại đăng nhập
                                </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection