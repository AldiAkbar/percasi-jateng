@extends('auth.layouts.main')

@section('section')
    <div class="register-box">
        <div class="register-logo">
            <a href="/"><b>PERCASI JATENG</b></a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
            <p class="login-box-msg">Daftar akun baru</p>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="username"  class="form-control  @error('username') is-invalid @enderror" placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-user"></span>
                        </div>
                    </div>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                <input type="password" name="password"  class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
                </div>
                <input type="hidden" name="role" value="user">
                <div class="row">
                <div class="col-8">
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-dark btn-block">Register</button>
                </div>
                <!-- /.col -->
                </div>
            </form>

            <a href="/login" class="text-dark">Saya sudah memiliki akun</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
@endsection
