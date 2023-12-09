@extends('layouts.common.auth.login_master')
@section('css')
@endsection
@section('title')
تسجيل الدخول | لوحة التحكم
@endsection

@section('content')
<!-- Start Login Section -->
<section class="height-100vh d-flex align-items-center page-section-ptb login" style="background-image: url( {{asset('assets/images/login-bg.jpg') }}); background-size: cover;">
    <div class="container">
        <div class="row justify-content-center no-gutters vertical-align">
            <div class="col-lg-4 col-md-6 login-fancy-bg bg"
                style=" background-color: #71c297; height: 550px; width: 800px;">
                <div class="login-fancy">
                    <h2 class="text-white mb-20 text-md-center">مرحبا</h2>
                    <p class="mb-20 text-white text-md-center font-weight-bold pt-50"
                        style="font-size-adjust: inherit;font-size: 36px;">
                        {{--$guard--}} Admin
                        <br>
                        <i class="fa fa-heart text-danger"></i>
                    </p>
                </div>
            </div>
            <!-- Start Col-lg-4 -->
            <div class="col-lg-4 col-md-6 bg-white">
                <!-- Start Login Fancy -->
                <div class="login-fancy pb-40 clearfix">
                    <h3 class="mb-30">تسجيل الدخول للادارة</h3>
                    @include('layouts.common.partials.messages')
                    <!-- Start Form -->
                    <form method="POST" action="{{ route('admin.login') }}" autocomplete="off">
                        @csrf
                        <!-- Start Email -->
                        <div class="section-field mb-20">
                            <label class="mb-10" for="email">البريد الالكترونى</label>
                            <input id="email" class="web form-control" type="email" name="email" placeholder="اكتب البريد الالكترونى" value="{{old('email')}}"  autofocus>
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <!-- End Email -->
                        <!-- Start Password -->
                        <div class="section-field mb-20">
                            <label class="mb-10" for="password">كلمه المرور * </label>
                            <input id="password" class="Password form-control" placeholder="اكتب كلمه المرور" type="password" name="password" >
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <!-- End Password -->
                        <!-- Start Remember -->
                        <div class="section-field">
                            <div class="remember-checkbox mb-30">
                                <input type="checkbox" class="form-control" name="remember" id="remember_me" />
                                <label for="remember_me"> تذكرنى</label>
                                <a href="#" class="float-right">فقدان كلمه المرور</a>
                            </div>
                        </div>
                        <!-- End Remember -->
                        <!-- Start Submit -->
                        <button type="submit" class="button text-md-center">
                            <span>الدخول</span>
                            <i class="fa fa-check"></i>
                        </button>
                        <!-- End Submit -->
                    </form>
                    <!-- End Form -->
                </div>
                <!-- End Login Fancy -->
            </div>
            <!-- End Col-lg-4 -->
        </div>
    </div>
</section>
<!-- End Login Section -->
@endsection

@section('js')
@endsection