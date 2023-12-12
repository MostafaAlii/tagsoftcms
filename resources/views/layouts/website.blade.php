@include('layouts.common.website.includes._tpl_start')

    <div class="m-content ocean-blue ocean-blue-var" id="main-wrap">
        <div>
            <div id="home"></div>
            @yield('content')
            @include('layouts.common.website.includes._footer')
        </div>
    </div>
</div> <!-- m-application start from _tpl_start -->
<!-- End m-application -->
@include('layouts.common.website.includes._tpl_end')