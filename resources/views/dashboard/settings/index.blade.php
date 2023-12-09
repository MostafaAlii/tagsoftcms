@extends('layouts.master')
@section('css')
<style>
    .acd-des-flex {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .input-group-text {
        background-color: #343a40 !important;
        border: 1px solid #343a40 !important;
        color: #ced4da !important;
    }
</style>
@section('title')
{{$title}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{$title}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">Dasboard</a></li>
                <li class="breadcrumb-item active">{{$title}}</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
@include('layouts.common.partials.messages')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <br><br>
                <!-- Start Content -->
                <form id="mainSettings" action="{{route('mainSettings.store')}}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <!-- Start Tabs -->
                    <div class="tab round shadow">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach(config('app.languages') as $key => $lang)
                            <li class="nav-item">
                                <a class="nav-link @if($loop->index == 0) active show @endif" id="{{$key}}-tab"
                                    data-toggle="tab" href="#{{$key}}" role="tab" aria-controls="{{$key}}"
                                    aria-selected="true">
                                    <i class="fa fa-globe"></i>
                                    {{ $lang }}
                                </a>
                            </li>
                            @endforeach
                        </ul>

                        <div class="tab-content">
                            @foreach(config('app.languages') as $key => $lang)
                            <!-- Start Language Panel -->
                            <div class="tab-pane fade @if($loop->index == 0) active show @endif" id="{{$key}}"
                                role="tabpanel" aria-labelledby="{{$key}}-tab">
                                <div class="form-group row">
                                    <!-- Start App Name -->
                                    <div class="input-group mb-3 col-md-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">App Name</span>
                                        </div>
                                        <input type="text" class="form-control"
                                            placeholder="{{'App Name' . ' ' . $lang }}"
                                            value="{{ $setting?->translate($key)?->name }}" id="name"
                                            name="{{$key}}[name]" aria-label="name" aria-describedby="basic-addon1">
                                    </div>
                                    <!-- End App Name -->

                                    <!-- Start Auther Name -->
                                    <div class="input-group mb-3 col-md-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon-author">Author Name</span>
                                        </div>
                                        <input type="text" class="form-control"
                                            placeholder="{{'Author Name' . ' ' . $lang }}" id="author"
                                            value="{{ $setting?->translate($key)?->author }}" name="{{$key}}[author]"
                                            aria-label="author" aria-describedby="basic-addon-author">
                                    </div>
                                    <!-- End Auther Name -->

                                    <!-- Start Address -->
                                    <div class="input-group mb-3 col-md-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon-address">Address</span>
                                        </div>
                                        <input type="text" class="form-control"
                                            placeholder="{{'Address' . ' ' . $lang }}" id="address"
                                            value="{{ $setting?->translate($key)?->address }}" name="{{$key}}[address]"
                                            aria-label="address" aria-describedby="basic-addon-address">
                                    </div>
                                    <!-- End Address -->
                                </div>

                                <!-- Start Descriptions -->
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <labe>{{'Description' . ' ' . $lang }} </labe>
                                        <textarea class="form-control" id="description" name="{{$key}}[description]"
                                            rows="3">{{ $setting?->translate($key)?->description }}</textarea>
                                    </div>
                                </div>
                                <!-- Start Descriptions -->
                            </div>
                            <!-- End Language Panel -->
                            @endforeach
                        </div>
                    </div>
                    <hr><br>
                    <!-- End Tabs -->

                    <!-- Start General Settings -->
                    <div class="form-row">
                        <div class="col-lg-12 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <h5 class="card-title">General Settings</h5>
                                    <div class="accordion plus-icon shadow">
                                        <!-- Start First General Accordion Setting -->
                                        <div class="acd-group">
                                            <a href="#" class="acd-heading">Main General Setting</a>
                                            <div class="acd-des acd-des-flex">
                                                <div class="table-responsive">
                                                    <table
                                                        class="table table-bordered table-striped table-hover text-center">
                                                        <!-- Start Phone and Status -->
                                                        <tr>
                                                            <td class="col-md-2 bg-dark text-white">phone</td>
                                                            <td class="col-md-2">
                                                                <input type="text" style="border: none;" name="phone"
                                                                    value="{{old('phone',$setting?->phone)}}">
                                                                @error('phone')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                            <td class="col-md-2 bg-dark text-white">Status</td>
                                                            <td class="col-md-2">
                                                                <select name="status" class="p-1 form-control">
                                                                    <option selected disabled>
                                                                        {!! trans('general.select') . ' ' .
                                                                        trans('general.status') . ' ...' !!}
                                                                    </option>

                                                                    @foreach(SettingStatus::cases() as $status)
                                                                    <option value="{{ $status }}" {{ (old('status',
                                                                        $setting->status) == $status) ? 'selected' : ''
                                                                        }}>
                                                                        {!! SettingStatus::status($status) !!}
                                                                    </option>
                                                                    @endforeach
                                                                </select>

                                                                @error('status')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                        <!-- End Phone and Status -->

                                                        <!-- Start after_minute_delay_calculate and after_minute_early_calculate -->
                                                        <tr>
                                                            <td class="col-md-2 bg-dark text-white">احتساب تاخير الحضور
                                                                بعد كام دقيقة</td>
                                                            <td class="col-md-2">
                                                                <input type="text" style="border: none;"
                                                                    name="after_minute_delay_calculate"
                                                                    value="{{old('after_minute_delay_calculate',$setting?->after_minute_delay_calculate)}}">
                                                                @error('after_minute_delay_calculate')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                            <td class="col-md-2 bg-dark text-white">احتساب الانصراف
                                                                المبكر بعد كام دقيقة</td>
                                                            <td class="col-md-2">
                                                                <input type="text" style="border: none;"
                                                                    name="after_minute_early_calculate"
                                                                    value="{{old('after_minute_early_calculate',$setting?->after_minute_early_calculate)}}">
                                                                @error('after_minute_early_calculate')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                        <!-- End after_minute_delay_calculate and after_minute_early_calculate -->

                                                        <!-- Start after_minute_quarterday_calculate and after_time_half_day_cut -->
                                                        <tr>
                                                            <td class="col-md-2 bg-dark text-white">احتساب ربع يوم من
                                                                مجموع تكرار الانصراف المبكر او الحضور متاخر</td>
                                                            <td class="col-md-2">
                                                                <input type="text" style="border: none;"
                                                                    name="after_minute_quarterday_calculate"
                                                                    value="{{old('after_minute_quarterday_calculate',$setting?->after_minute_quarterday_calculate)}}">
                                                                @error('after_minute_quarterday_calculate')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                            <td class="col-md-2 bg-dark text-white">احتساب نصف يوم من
                                                                مجموع تكرار الانصراف المبكر او الحضور متاخر</td>
                                                            <td class="col-md-2">
                                                                <input type="text" style="border: none;"
                                                                    name="after_time_half_day_cut"
                                                                    value="{{old('after_time_half_day_cut',$setting?->after_time_half_day_cut)}}">
                                                                @error('after_time_half_day_cut')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                        <!-- End after_minute_quarterday_calculate and after_time_half_day_cut -->

                                                        <!-- Start after_time_full_day_cut -->
                                                        <tr>
                                                            <td class="col-md-2 bg-dark text-white">احتساب يوم كامل من
                                                                مجموع تكرار الانصراف المبكر او الحضور متاخر</td>
                                                            <td class="col-md-2">
                                                                <input type="text" style="border: none;"
                                                                    name="after_time_full_day_cut"
                                                                    value="{{old('after_time_full_day_cut',$setting?->after_time_full_day_cut)}}">
                                                                @error('after_time_full_day_cut')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                        <!-- End after_time_full_day_cut -->

                                                        <!-- Start monthly_vacation_balance and after_days_begin_vacation -->
                                                        <tr>
                                                            <td class="col-md-2 bg-dark text-white">رصيد الاجازات الشهرى
                                                                للموظف</td>
                                                            <td class="col-md-2">
                                                                <input type="text" style="border: none;"
                                                                    name="monthly_vacation_balance"
                                                                    value="{{old('monthly_vacation_balance',$setting?->monthly_vacation_balance)}}">
                                                                @error('monthly_vacation_balance')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                            <td class="col-md-2 bg-dark text-white">يضاف رصيد اجازات
                                                                الموظف بعد عدد ايام !</td>
                                                            <td class="col-md-2">
                                                                <input type="text" style="border: none;"
                                                                    name="after_days_begin_vacation"
                                                                    value="{{old('after_days_begin_vacation',$setting?->after_days_begin_vacation)}}">
                                                                @error('after_days_begin_vacation')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                        <!-- End monthly_vacation_balance and after_days_begin_vacation -->

                                                        <!-- Start first_balance_begin_vacation -->
                                                        <tr>
                                                            <td class="col-md-2 bg-dark text-white">الرصيد الافتتاحى
                                                                المرحل عند تفعيل الاجازات</td>
                                                            <td class="col-md-2">
                                                                <input type="text" style="border: none;"
                                                                    name="first_balance_begin_vacation"
                                                                    value="{{old('first_balance_begin_vacation',$setting?->first_balance_begin_vacation)}}">
                                                                @error('first_balance_begin_vacation')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                        <!-- End first_balance_begin_vacation -->

                                                        <!-- Start sanctions_value_first_balance and sanctions_value_second_balance -->
                                                        <tr>
                                                            <td class="col-md-2 bg-dark text-white">قيمة خصم الايام بعد
                                                                اول غياب بدون اذن</td>
                                                            <td class="col-md-2">
                                                                <input type="text" style="border: none;"
                                                                    name="sanctions_value_first_balance"
                                                                    value="{{old('sanctions_value_first_balance',$setting?->sanctions_value_first_balance)}}">
                                                                @error('sanctions_value_first_balance')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                            <td class="col-md-2 bg-dark text-white">قيمة خصم الايام بعد
                                                                ثانى غياب بدون اذن</td>
                                                            <td class="col-md-2">
                                                                <input type="text" style="border: none;"
                                                                    name="sanctions_value_second_balance"
                                                                    value="{{old('sanctions_value_second_balance',$setting?->sanctions_value_second_balance)}}">
                                                                @error('sanctions_value_second_balance')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                        <!-- End sanctions_value_first_balance and sanctions_value_second_balance -->

                                                        <!-- Start sanctions_value_third_balance and sanctions_value_forth_balance -->
                                                        <tr>
                                                            <td class="col-md-2 bg-dark text-white">قيمة خصم الايام بعد
                                                                ثالث غياب بدون اذن</td>
                                                            <td class="col-md-2">
                                                                <input type="text" style="border: none;"
                                                                    name="sanctions_value_third_balance"
                                                                    value="{{old('sanctions_value_third_balance',$setting?->sanctions_value_third_balance)}}">
                                                                @error('sanctions_value_third_balance')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                            <td class="col-md-2 bg-dark text-white">قيمة خصم الايام بعد
                                                                رابع غياب بدون اذن</td>
                                                            <td class="col-md-2">
                                                                <input type="text" style="border: none;"
                                                                    name="sanctions_value_forth_balance"
                                                                    value="{{old('sanctions_value_forth_balance',$setting?->sanctions_value_forth_balance)}}">
                                                                @error('sanctions_value_forth_balance')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                        <!-- End sanctions_value_third_balance and sanctions_value_forth_balance -->
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End First General Accordion Setting -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End General Settings -->

                    <!-- Start Media Storage and Notification Accordion -->
                    <div class="form-row">
                        <div class="col-lg-12 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Storage and Notifications</h5>
                                    <div class="accordion plus-icon shadow">
                                        <div class="acd-group">
                                            <a href="#" class="acd-heading">Media Storage and Notification Accordion</a>
                                            <div class="acd-des acd-des-flex">
                                                <!-- Start Tabs -->
                                                <div class="tab tab-vertical">
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active show" id="media-storage-tab"
                                                                data-toggle="tab" href="#media-storage" role="tab"
                                                                aria-controls="media-storage" aria-selected="true">
                                                                Media Storage
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="notification-tab" data-toggle="tab"
                                                                href="#notification" role="tab"
                                                                aria-controls="notification" aria-selected="false">
                                                                Notification
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <!-- Start Media Storage Content -->
                                                        <div class="tab-pane fade active show" id="media-storage"
                                                            role="tabpanel" aria-labelledby="media-storage-tab">
                                                            <div class="d-flex"
                                                                style="width: 1024px; line-height: 30px;">
                                                                <div class="input-group mb-3 col-9">
                                                                    <div class="input-group-prepend">
                                                                        <label class="input-group-text">Select
                                                                            Storage</label>
                                                                    </div>
                                                                    <select class="custom-select"
                                                                        id="inputGroupSelect03">
                                                                        <option selected="">Choose Storage Driver...
                                                                        </option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    @if(empty($setting->media_storage) ||
                                                                    $setting?->media_storage == 'local')
                                                                    <span
                                                                        class="form-text text-danger mr-3 ml-3">(local)
                                                                        as a default storage not change if you not need
                                                                        that.</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Media Storage Content -->
                                                        <div class="tab-pane fade" id="notification" role="tabpanel"
                                                            aria-labelledby="notification-tab">
                                                            <p>We all carry a lot of baggage, thanks to our upbringing.
                                                                The majority of people carry with them, an
                                                                entire series of self-limiting beliefs that will
                                                                absolutely stop, and hold them back from, success.
                                                                Things like “I’m not good enough”, “I’m not smart
                                                                enough”, “I’m not lucky enough”, and the worst, “I’m
                                                                not worthy” are but a few of the self-limiting beliefs I
                                                                have encountered. We carry them with us like
                                                                rocks in a knapsack, and then use them to sabotage our
                                                                success. So, how twisted is that? </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Tabs -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Media Storage and Notification Accordion -->

                    <!-- Start Security Accordion -->
                    <div class="form-row">
                        <div class="col-lg-12 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Security Panel</h5>
                                    <div class="accordion plus-icon shadow">
                                        <div class="acd-group">
                                            <a href="#" class="acd-heading">Api Secret Key :</a>
                                            <div class="acd-des acd-des-flex">
                                                <label class="col-form-label" for="api_secret_key">Api Secret
                                                    Key</label>
                                                <input type="text" id="api_secret_key" readonly
                                                    value="{{ $setting?->api_secret_key }}" name="api_secret_key"
                                                    class="form-control" placeholder="Api Secret Key">
                                                <button type="button" id="generateKeyBtn" class="btn btn-success">
                                                    <i class="fa fa-key"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Security Accordion -->
                    <!-- Start Submit Form -->
                    <hr>
                    <div class="form-row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-success btn-lg">{{trans('general.update')}}</button>
                        </div>
                    </div>
                    <!-- End Submit Form -->
                </form>
                <!-- End Content -->
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
<script>
    document.getElementById('generateKeyBtn').addEventListener('click', function () {
        var randomKey = generateRandomKey();
        document.getElementById('api_secret_key').value = randomKey;
        document.getElementById('randomKeyDisplay').innerText = "Random Key: " + randomKey;
    });
    function generateRandomKey() {
        var length = 32;
        var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        var result = "";
        for (var i = 0; i < length; i++) {
            var randomIndex = Math.floor(Math.random() * charset.length);
            result += charset.charAt(randomIndex);
        }
        return result;
    }
</script>
@endsection