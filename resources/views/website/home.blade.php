@extends('layouts.website')
@section('css')
    <link href="{{ URL::asset('assets/css/plugins/toastr.css') }}" rel="stylesheet">
@section('title')
    {{ $title }}
@stop
@endsection
@section('content')
<div class="main-wrap">
    <!-- Start Mobile Nav Menu -->
    @include('layouts.common.website.includes.common._mobile_responsive_nav')
    @include('layouts.common.website.includes._header')
    <!-- End Mobile Nav Menu -->
    <main class="container-wrap">
        <!-- ##### PARALLAX SQUARE #####-->
        <div class="parallax-wrap">
            <div id="square">
                <div class="banner inner-parallax">
                    <div class="figure">
                        <div>
                            <div data-enllax-ratio="0" data-enllax-type="foreground"><div class="parallax-square parallax-primary"></div></div>
                        </div>
                    </div>
                </div>
                <div class="about inner-parallax">
                    <div class="figure">
                        <div>
                            <div data-enllax-ratio="-0.25" data-enllax-type="foreground"><div class="parallax-square parallax-secondary"></div></div>
                        </div>
                    </div>
                    <div class="figure">
                        <div>
                            <div data-enllax-ratio="-0.2" data-enllax-type="foreground"><div class="parallax-square parallax-primary"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### END PARALLAX SQUARE #####-->

        <!-- ##### BANNER #####-->
        <section id="banner">
            <div class="hero-content">
                <div class="hidden-sm-up">
                    <figure class="mobile-cover"><img src="../../../res.cloudinary.com/imajin/image/upload/v1583497239/agency/banner-video_dtunkt.jpg" alt="cover" /></figure>
                </div>
                <div class="container mq-lg-up" data-class="fixed-width">
                    <div class="row">
                        <div class="col-md-6 px-0">
                            <div class="banner-text">
                                <div class="title"><h3 class="text-helper use-text-title">إنشاء حلول أعمال</h3></div>
                                <h5 class="subtitle use-text-subtitle2">نحن نعمل مع شركات ناشئة دولية ، وسنساعد رواد الأعمال على الإطلاق على المدى الطويل.</h5>
                                <a class="button btn waves-effect btn-outlined secondary btn-large">اكتب لنا<i class="material-icons icon">send</i></a>
                            </div>
                        </div>
                        <div class="col-md-6 pa-6 show-sm-up">
                            <div class="video-wrap">
                                <div class="video-figure">
                                    <div class="inner-figure">
                                        <div class="hidden-sm-down">
                                            <button class="btn-play btn-floating waves-effect hide" id="btn_play"><i class="material-icons play">play_arrow</i> <i class="material-icons pause">pause</i></button>
                                        </div>
                                        <img class="show-md-down" src="../../../res.cloudinary.com/imajin/image/upload/v1583497239/agency/banner-video_dtunkt.jpg" alt="cover" />
                                        <img class="hidden-md-down" id="banner_cover" src="../../../res.cloudinary.com/imajin/image/upload/v1583497239/agency/banner-video_dtunkt.jpg" alt="cover" />
                                        <div class="overlay"></div>
                                        <div class="video"><div class="show-lg-up" id="youtube"></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### END BANNER #####-->

        <!-- ##### ABOUT #####-->
        <section class="space-top is-md" id="about">
            <div class="root">
                <div class="container fixed-width">
                    <div class="row">
                        <div class="col-md-5 pa-md-6 py-6 px-0">
                            <div>
                                <div>
                                    <div class="title-deco"><h3>عنا</h3></div>
                                </div>
                                <div class="puzzle show-lg-up">
                                    <div class="piece-big"><span></span></div>
                                    <div class="piece-small-top"><span></span></div>
                                    <div class="piece-small-bottom"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 pa-md-6 py-6 px-0">
                            <h4 class="title-default use-text-subtitle">من خلال قدرتنا الكبيرة ، نجرؤ على القول إننا مختلفون.</h4>
                            <div class="counter-wrap">
                                <div class="container fixed-width">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col">
                                            <div class="counter-item">
                                                <div class="text">
                                                    <h3 class="use-text-title2">+200</h3>
                                                    <p class="use-text-subtitle2">موظف</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="counter-item">
                                                <div class="text">
                                                    <h3 class="use-text-title2">+500</h3>
                                                    <p class="use-text-subtitle2">مشاريع</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="counter-item">
                                                <div class="text">
                                                    <h3 class="use-text-title2">+300</h3>
                                                    <p class="use-text-subtitle2">عملاء</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <blockquote>إنه يترك مذاقًا حلوًا ومرًا يسمى</blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### END ABOUT #####-->

        <!-- ##### PARALLAX DOTS #####-->
        <div class="parallax-wrap dots-wrap">
            <div class="inner-parallax">
                <div class="figure">
                    <div id="dots">
                        <div data-enllax-ratio="-0.3" data-enllax-type="foreground"><img class="parallax-dot" src="https://maestrolux.vercel.app/agency/assets/images/decoration/dot-deco.svg" alt="dot deco" /></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### END PARALLAX DOTS #####-->

        <!-- ##### SERVICES #####-->
        <section class="space-top-short" id="services">
            <div class="root">
                <div class="carousel-handle">
                    <div class="carousel-wrap">
                        <div class="carousel">
                            <div class="slick-carousel" id="services_carousel" data-length="6">
                                <div class="item show-lg-up">
                                    <div class="carousel-prop"><div></div></div>
                                </div>
                                <div class="item show-lg-up">
                                    <div class="carousel-prop"><div></div></div>
                                </div>
                                <div class="item">
                                    <div class="card default-card">
                                        <figure><img src="res.cloudinary.com/imajin/image/upload/v1583497239/agency/service1_x3q49z.jpg" alt="img" /></figure>
                                        <div class="text">
                                            <h6 class="title">Agile Transformation</h6>
                                            <p>As the world is changing rapidly and becoming ever more complex, become more nimble and more adaptive to change.</p>
                                        </div>
                                        <a class="btn btn-outlined waves-effect block primary button">راجع التفاصيل</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card default-card">
                                        <figure><img src="../../../res.cloudinary.com/imajin/image/upload/v1583497239/agency/service2_o8mdey.jpg" alt="img" /></figure>
                                        <div class="text">
                                            <h6 class="title">Business design</h6>
                                            <p>Brings insights from your customers to the centre stage so that you can make better decisions.</p>
                                        </div>
                                        <a class="btn btn-outlined waves-effect block primary button">راجع التفاصيل</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card default-card">
                                        <figure><img src="../../../res.cloudinary.com/imajin/image/upload/v1583497239/agency/service3_hiunda.jpg" alt="img" /></figure>
                                        <div class="text">
                                            <h6 class="title">Continuous services</h6>
                                            <p>ensure your services and applications will work as intended throughout their life cycle.</p>
                                        </div>
                                        <a class="btn btn-outlined waves-effect block primary button">راجع التفاصيل</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card default-card">
                                        <figure><img src="../../../res.cloudinary.com/imajin/image/upload/v1583497239/agency/service1_x3q49z.jpg" alt="img" /></figure>
                                        <div class="text">
                                            <h6 class="title">Experience design</h6>
                                            <p>Great design works the way the user expects and explains itself physically and functionally.</p>
                                        </div>
                                        <a class="btn btn-outlined waves-effect block primary button">راجع التفاصيل</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card default-card">
                                        <figure><img src="../../../res.cloudinary.com/imajin/image/upload/v1583497239/agency/service2_o8mdey.jpg" alt="img" /></figure>
                                        <div class="text">
                                            <h6 class="title">Systems development</h6>
                                            <p>Organisations that can quickly renew themselves and constantly redesign their services.</p>
                                        </div>
                                        <a class="btn btn-outlined waves-effect block primary button">راجع التفاصيل</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card default-card">
                                        <figure><img src="../../../res.cloudinary.com/imajin/image/upload/v1583497239/agency/service3_hiunda.jpg" alt="img" /></figure>
                                        <div class="text">
                                            <h6 class="title">Web development</h6>
                                            <p>Web service development creates the foundation on top of which other parts of the solution are built on.</p>
                                        </div>
                                        <a class="btn btn-outlined waves-effect block primary button">راجع التفاصيل</a>
                                    </div>
                                </div>
                                <div class="item show-lg-up">
                                    <div class="carousel-prop"><div></div></div>
                                </div>
                                <div class="item show-lg-up">
                                    <div class="carousel-prop"><div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="floating-title">
                    <div class="container fixed-width">
                        <div class="title">
                            <div class="title-icon-deco extend">
                                <i class="material-icons icon">apps</i>
                                <h3>خدماتنا</h3>
                            </div>
                            <nav class="arrow">
                                <button class="btn-floating margin" id="prev_services"><i class="material-icons">arrow_back</i></button>
                                <button class="btn-floating margin" id="next_services"><i class="material-icons">arrow_forward</i></button>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### END SERVICES #####-->

        <!-- ##### EXPERTISE #####-->
        <section class="space-top is-md" id="our-expertise">
            <svg class="background base" fill="#cccccc" width="531px" height="531px" viewBox="0 0 531 531">
                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                    <g transform="translate(-74.000000, -74.000000)">
                        <rect transform="translate(339.184484, 339.184484) rotate(-45.000000) translate(-339.184484, -339.184484) " x="142.184484" y="142.184484" width="394" height="394" rx="33"></rect>
                    </g>
                </g>
            </svg>
            <svg class="background front" fill="#cccccc" width="531px" height="531px" viewBox="0 0 531 531">
                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                    <g transform="translate(-74.000000, -74.000000)">
                        <rect transform="translate(339.184484, 339.184484) rotate(-45.000000) translate(-339.184484, -339.184484) " x="142.184484" y="142.184484" width="394" height="394" rx="33"></rect>
                    </g>
                </g>
            </svg>
            <div class="root">
                <div class="container">
                    <div class="row spacing8">
                        <div class="col-lg-1 show-lg-up"></div>
                        <div class="col-md-4">
                            <div class="title-deco">
                                <svg class="decoration show-lg-up" fill="#cccccc" width="845px" height="1099px">
                                    <g id="main" stroke-width="1" fill-rule="evenodd">
                                        <g id="Group" transform="translate(0.442959, 0.442959)">
                                            <path
                                                d="M224.943037,553.505653 L18.1172251,323.802317 C-7.75131893,295.072389 -5.43170831,250.811581 23.2982205,224.943037 L253.001556,18.1172251 C281.731485,-7.75131893 325.992292,-5.43170831 351.860836,23.2982205 L558.686648,253.001556 C584.555192,281.731485 582.235582,325.992292 553.505653,351.860836 L323.802317,558.686648 C295.072389,584.555192 250.811581,582.235582 224.943037,553.505653 Z M225.057623,551.31922 C250.926167,580.049149 295.186975,582.36876 323.916904,556.500216 L551.31922,351.74625 C580.049149,325.877706 582.36876,281.616899 556.500216,252.88697 L351.74625,25.4846531 C325.877706,-3.24527565 281.616899,-5.56488627 252.88697,20.3036578 L25.4846531,225.057623 C-3.24527565,250.926167 -5.56488627,295.186975 20.3036578,323.916904 L225.057623,551.31922 Z"
                                            ></path>
                                            <path
                                                d="M242.387772,511.399445 L80.191986,331.262776 C54.3234419,302.532847 56.6430526,258.272039 85.3729813,232.403495 L265.509651,70.2077093 C294.23958,44.3391652 338.500387,46.6587758 364.368931,75.3887046 L526.564717,255.525374 C552.433262,284.255303 550.113651,328.516111 521.383722,354.384655 L341.247052,516.580441 C312.517124,542.448985 268.256316,540.129374 242.387772,511.399445 Z M242.476508,509.706269 C268.345052,538.436198 312.605859,540.755809 341.335788,514.887265 L519.690546,354.295919 C548.420475,328.427375 550.740085,284.166568 524.871541,255.436639 L364.280196,77.0818807 C338.411652,48.351952 294.150844,46.0323413 265.420916,71.9008854 L87.0661575,232.492231 C58.3362287,258.360775 56.0166181,302.621582 81.8851621,331.351511 L242.476508,509.706269 Z"
                                            ></path>
                                            <path
                                                d="M215.096119,140.135427 L421.613415,140.135427 C449.227652,140.135427 471.613415,162.52119 471.613415,190.135427 L471.613415,396.652723 C471.613415,424.26696 449.227652,446.652723 421.613415,446.652723 L215.096119,446.652723 C187.481882,446.652723 165.096119,424.26696 165.096119,396.652723 L165.096119,190.135427 C165.096119,162.52119 187.481882,140.135427 215.096119,140.135427 Z"
                                                transform="translate(318.354767, 293.394075) rotate(-132.000000) translate(-318.354767, -293.394075) "
                                            ></path>
                                        </g>
                                    </g>
                                </svg>
                                <div>
                                    <div class="title-deco"><h3>خبرتنا</h3></div>
                                </div>
                            </div>
                            <div class="wow parallax-scene zoomInShort" data-wow-offset="-100" data-wow-delay="0.1s" data-wow-duration="0.3s">
                                <div class="parallax-scene">
                                    <div id="scene">
                                        <div data-depth="0.15"><span class="icon-green"></span></div>
                                        <div data-depth="0.1"><span class="icon-violet"></span></div>
                                        <div data-depth="0.3"><span class="icon-blue"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8">
                            <h4 class="title-default use-text-subtitle">تم بناء مشروع ناجح مع فريق ناجح.</h4>
                            <p class="desc use-text-paragraph">
                                لهذا السبب نوفر لك الموارد البشرية التي تحتاج إلى بنائها كلما احتجت إليها. يتم تدريب فرقنا في الخارج أو الخارج إلى الخارج كجزء مننا. فريقك مكرس لمشاريعك. والفريق مرن!
                            </p>
                            <div class="hidden-xs-down">
                                <div class="running-tag">
                                    <div class="slick-carousel" id="expertise_carousel">
                                        <div class="tag-group"><span class="tag-item">social media</span> <span class="tag-item">marketing</span> <span class="tag-item">SEO</span></div>
                                        <div class="tag-group"><span class="tag-item">Web Development</span> <span class="tag-item">UI Designs</span> <span class="tag-item">Mobile Apps</span></div>
                                        <div class="tag-group"><span class="tag-item">Photography</span> <span class="tag-item">Company Profile</span> <span class="tag-item">Visual Editing</span></div>
                                        <div class="tag-group"><span class="tag-item">social media</span> <span class="tag-item">marketing</span> <span class="tag-item">SEO</span></div>
                                        <div class="tag-group"><span class="tag-item">Web Development</span> <span class="tag-item">UI Designs</span> <span class="tag-item">Mobile Apps</span></div>
                                        <div class="tag-group"><span class="tag-item">Photography</span> <span class="tag-item">Company Profile</span> <span class="tag-item">Visual Editing</span></div>
                                        <div class="tag-group"><span class="tag-item">social media</span> <span class="tag-item">marketing</span> <span class="tag-item">SEO</span></div>
                                        <div class="tag-group"><span class="tag-item">Web Development</span> <span class="tag-item">UI Designs</span> <span class="tag-item">Mobile Apps</span></div>
                                        <div class="tag-group"><span class="tag-item">Photography</span> <span class="tag-item">Company Profile</span> <span class="tag-item">Visual Editing</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### END EXPERTISE #####-->

        <!-- ##### TESTIMONIAL #####-->
        <section class="space-top is-xs" id="testimonials">
            <div class="root">
                <div class="parallax-wrap">
                    <div class="testi inner-parallax">
                        <div class="figure">
                            <div id="single_square">
                                <div data-enllax-ratio="0.2" data-enllax-type="foreground"><div class="parallax-square parallax-secondary-single"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel">
                    <div class="slick-carousel" id="testimonial_carousel" data-length="9">
                        <div class="item show-lg-up"><div class="item-props-first"></div></div>
                        <div class="item">
                            <div class="testi-card">
                                <div class="card paper">
                                    <p>Sed imperdiet enim ligula, vitae viverra justo porta vel.</p>
                                    <div class="rating">
                                        <i class="material-icons star-icon" title="1">star</i><i class="material-icons star-icon" title="2">star</i><i class="material-icons star-icon" title="3">star</i>
                                        <i class="material-icons star-icon" title="4">star</i><i class="material-icons star-icon" title="5">star</i>
                                    </div>
                                </div>
                                <div class="person">
                                    <div class="avatar-img avatar"><img src="../../../randomuser.me/api/portraits/men/3.jpg" alt="name" /></div>
                                    <div class="name">
                                        <h6>John Doe</h6>
                                        <span class="caption">Chief Digital Officer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-card">
                                <div class="card paper">
                                    <p>Cras convallis lacus orci, tristique tincidunt magna consequat in. In vel pulvinar est, at euismod libero.</p>
                                    <div class="rating">
                                        <i class="material-icons star-icon" title="1">star</i><i class="material-icons star-icon" title="2">star</i><i class="material-icons star-icon" title="3">star</i>
                                        <i class="material-icons star-icon" title="4">star</i><i class="material-icons star-icon-disable" title="1">star</i>
                                    </div>
                                </div>
                                <div class="person">
                                    <div class="avatar-img avatar"><img src="../../../randomuser.me/api/portraits/women/8.jpg" alt="name" /></div>
                                    <div class="name">
                                        <h6>Jean Doe</h6>
                                        <span class="caption">Chief Digital Officer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-card">
                                <div class="card paper">
                                    <p>Cras convallis lacus orci, tristique tincidunt magna consequat in. In vel pulvinar est, at euismod libero.</p>
                                    <div class="rating">
                                        <i class="material-icons star-icon" title="1">star</i><i class="material-icons star-icon" title="2">star</i><i class="material-icons star-icon" title="3">star</i>
                                        <i class="material-icons star-icon" title="4">star</i><i class="material-icons star-icon-disable" title="1">star</i>
                                    </div>
                                </div>
                                <div class="person">
                                    <div class="avatar-img avatar"><img src="../../../randomuser.me/api/portraits/women/17.jpg" alt="name" /></div>
                                    <div class="name">
                                        <h6>Jena Doe</h6>
                                        <span class="caption">Graphic Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-card">
                                <div class="card paper">
                                    <p>Sed imperdiet enim ligula, vitae viverra justo porta vel.</p>
                                    <div class="rating">
                                        <i class="material-icons star-icon" title="1">star</i><i class="material-icons star-icon" title="2">star</i><i class="material-icons star-icon" title="3">star</i>
                                        <i class="material-icons star-icon-disable" title="1">star</i><i class="material-icons star-icon-disable" title="2">star</i>
                                    </div>
                                </div>
                                <div class="person">
                                    <div class="avatar-img avatar"><img src="../../../randomuser.me/api/portraits/women/90.jpg" alt="name" /></div>
                                    <div class="name">
                                        <h6>Jovelin Doe</h6>
                                        <span class="caption">Senior Graphic Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-card">
                                <div class="card paper">
                                    <p>Cras convallis lacus orci, tristique tincidunt magna consequat in. In vel pulvinar est, at euismod libero.</p>
                                    <div class="rating">
                                        <i class="material-icons star-icon" title="1">star</i><i class="material-icons star-icon" title="2">star</i><i class="material-icons star-icon" title="3">star</i>
                                        <i class="material-icons star-icon" title="4">star</i><i class="material-icons star-icon" title="5">star</i>
                                    </div>
                                </div>
                                <div class="person">
                                    <div class="avatar-img avatar"><img src="../../../randomuser.me/api/portraits/women/44.jpg" alt="name" /></div>
                                    <div class="name">
                                        <h6>Jihan Doe</h6>
                                        <span class="caption">CEO Software House</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-card">
                                <div class="card paper">
                                    <p>Cras convallis lacus orci, tristique tincidunt magna consequat in. In vel pulvinar est, at euismod libero.</p>
                                    <div class="rating">
                                        <i class="material-icons star-icon" title="1">star</i><i class="material-icons star-icon" title="2">star</i><i class="material-icons star-icon" title="3">star</i>
                                        <i class="material-icons star-icon" title="4">star</i><i class="material-icons star-icon" title="5">star</i>
                                    </div>
                                </div>
                                <div class="person">
                                    <div class="avatar-img avatar"><img src="../../../randomuser.me/api/portraits/men/75.jpg" alt="name" /></div>
                                    <div class="name">
                                        <h6>Jovelin Doe</h6>
                                        <span class="caption">Senior Graphic Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-card">
                                <div class="card paper">
                                    <p>Cras convallis lacus orci, tristique tincidunt magna consequat in. In vel pulvinar est, at euismod libero.</p>
                                    <div class="rating">
                                        <i class="material-icons star-icon" title="1">star</i><i class="material-icons star-icon" title="2">star</i><i class="material-icons star-icon" title="3">star</i>
                                        <i class="material-icons star-icon" title="4">star</i><i class="material-icons star-icon-disable" title="1">star</i>
                                    </div>
                                </div>
                                <div class="person">
                                    <div class="avatar-img avatar"><img src="../../../randomuser.me/api/portraits/men/4.jpg" alt="name" /></div>
                                    <div class="name">
                                        <h6>John Doe</h6>
                                        <span class="caption">Senior Graphic Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-card">
                                <div class="card paper">
                                    <p>Sed imperdiet enim ligula, vitae viverra justo porta vel.</p>
                                    <div class="rating">
                                        <i class="material-icons star-icon" title="1">star</i><i class="material-icons star-icon" title="2">star</i><i class="material-icons star-icon" title="3">star</i>
                                        <i class="material-icons star-icon" title="4">star</i><i class="material-icons star-icon" title="5">star</i>
                                    </div>
                                </div>
                                <div class="person">
                                    <div class="avatar-img avatar"><img src="../../../randomuser.me/api/portraits/men/3.jpg" alt="name" /></div>
                                    <div class="name">
                                        <h6>John Doe</h6>
                                        <span class="caption">Chief Digital Officer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-card">
                                <div class="card paper">
                                    <p>Cras convallis lacus orci, tristique tincidunt magna consequat in. In vel pulvinar est, at euismod libero.</p>
                                    <div class="rating">
                                        <i class="material-icons star-icon" title="1">star</i><i class="material-icons star-icon" title="2">star</i><i class="material-icons star-icon" title="3">star</i>
                                        <i class="material-icons star-icon" title="4">star</i><i class="material-icons star-icon-disable" title="1">star</i>
                                    </div>
                                </div>
                                <div class="person">
                                    <div class="avatar-img avatar"><img src="../../../randomuser.me/api/portraits/women/8.jpg" alt="name" /></div>
                                    <div class="name">
                                        <h6>Jean Doe</h6>
                                        <span class="caption">Chief Digital Officer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item show-lg-up"><div class="item-props-last"></div></div>
                    </div>
                </div>
                <div class="floating-title">
                    <div class="container fixed-width">
                        <div class="title">
                            <div class="title-icon-deco">
                                <i class="material-icons icon">format_quote</i>
                                <h3>شهادة العميل</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### END TESTIMONIAL #####-->

        <!-- ##### CASE STUDIES #####-->
        <section id="case-studies">
            <div class="root">
                <div class="container fixed-width-md-up">
                    <div class="row spacing6">
                        <div class="col-md-3 px-6 pt-6">
                            <div class="wow fadeInLeftShort" data-offset="-100" data-delay="0.2s" data-duration="0.3s">
                                <div class="side-filter">
                                    <h4 class="title-primary mt-10">دراسات الحالة</h4>
                                    <ul class="collection nav" id="case_categories">
                                        <li class="collection-item filter"><a class="waves-effect">corporate</a></li>
                                        <li class="collection-item filter active"><a class="waves-effect">advertising</a></li>
                                        <li class="collection-item filter"><a class="waves-effect">marketing</a></li>
                                        <li class="collection-item filter"><a class="waves-effect">government</a></li>
                                        <li class="collection-item filter"><a class="waves-effect">creative</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 px-6 pt-6">
                            <div class="massonry">
                                <div class="row" id="case_gallery">
                                    <div class="col-sm-3 pa-3">
                                        <div class="wow fadeInUpShort" data-wow-delay="0.2s" data-wow-duration="0.4s">
                                            <div class="item">
                                                <a class="waves-effect case-card small" href="../../../res.cloudinary.com/imajin/image/upload/v1583497237/agency/case1_lvxzy3.jpg">
                                                    <span class="figure"><img src="../../../res.cloudinary.com/imajin/image/upload/v1583497237/agency/case1_lvxzy3.jpg" alt="img" /></span>
                                                    <span class="property">
                                                        <span class="title">
                                                            <span class="logo"><img src="../assets/images/logos/mobile.png" alt="logo" /></span><span class="title">Case City of Tampere</span>
                                                        </span>
                                                        <span class="desc">Speeds up the handling of matters in the City of Tampere</span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="waves-effect case-card small" href="../assets/images/logos/coin.png">
                                                    <span class="figure"><img src="../assets/images/logos/coin.png" alt="img" /></span>
                                                    <span class="property full-hide">
                                                        <span class="title"><span class="title">Systems modelling</span> </span><span class="desc">Situational snapshot as a basis for strategic development</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 pa-3">
                                        <div class="wow fadeInUpShort" data-wow-delay="0.4s" data-wow-duration="0.4s">
                                            <div class="item">
                                                <a class="waves-effect case-card medium" href="../assets/images/logos/starter.png">
                                                    <span class="figure"><img src="../assets/images/logos/starter.png" alt="img" /></span>
                                                    <span class="property full-hide">
                                                        <span class="title"><span class="title">Legal register centre</span> </span><span class="desc">From ideas to concepts with service design</span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="waves-effect case-card medium" href="../../../res.cloudinary.com/imajin/image/upload/v1583497238/agency/case2_ho086n.jpg">
                                                    <span class="figure"><img src="../../../res.cloudinary.com/imajin/image/upload/v1583497238/agency/case2_ho086n.jpg" alt="img" /></span>
                                                    <span class="property">
                                                        <span class="title">
                                                            <span class="logo"><img src="../assets/images/logos/profile.png" alt="logo" /></span><span class="title">5G test automation</span>
                                                        </span>
                                                        <span class="desc">Test automation for testing 5G phones and mobile routers.</span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="waves-effect case-card medium" href="../../../res.cloudinary.com/imajin/image/upload/v1583497237/agency/case3_nbderf.jpg">
                                                    <span class="figure"><img src="../../../res.cloudinary.com/imajin/image/upload/v1583497237/agency/case3_nbderf.jpg" alt="img" /></span>
                                                    <span class="property">
                                                        <span class="title">
                                                            <span class="logo"><img src="../assets/images/logos/architect.png" alt="logo" /></span><span class="title">Finnish Tax Administration</span>
                                                        </span>
                                                        <span class="desc">Expertise in testing large-scale products</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 pa-3">
                                        <div class="wow fadeInUpShort" data-wow-delay="0.6s" data-wow-duration="0.4s">
                                            <div class="item">
                                                <a class="waves-effect case-card big" href="../../../res.cloudinary.com/imajin/image/upload/v1583499089/agency/case4_vjkowh.jpg">
                                                    <span class="figure"><img src="../../../res.cloudinary.com/imajin/image/upload/v1583499089/agency/case4_vjkowh.jpg" alt="img" /></span>
                                                    <span class="property">
                                                        <span class="title">
                                                            <span class="logo"><img src="../assets/images/logos/fashion.png" alt="logo" /></span><span class="title">Institute of Occupational Health</span>
                                                        </span>
                                                        <span class="desc">Open knowledge platform on work-life</span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="waves-effect case-card big" href="../../../res.cloudinary.com/imajin/image/upload/v1583497239/agency/case5_r343kh.jpg">
                                                    <span class="figure"><img src="../../../res.cloudinary.com/imajin/image/upload/v1583497239/agency/case5_r343kh.jpg" alt="img" /></span>
                                                    <span class="property">
                                                        <span class="title">
                                                            <span class="logo"><img src="../assets/images/logos/cloud.png" alt="logo" /></span><span class="title">Application for better results on rails</span>
                                                        </span>
                                                        <span class="desc">Dispatchers tools to locate each train</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### END CASE STUDIES #####-->

        <!-- ##### CALL ACTION #####-->
        <section class="space-top-short" id="call-to-action">
            <svg class="background base" fill="cccccc" width="531px" height="531px" viewBox="0 0 531 531">
                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                    <g transform="translate(-74.000000, -74.000000)">
                        <rect transform="translate(339.184484, 339.184484) rotate(-45.000000) translate(-339.184484, -339.184484) " x="142.184484" y="142.184484" width="394" height="394" rx="33"></rect>
                    </g>
                </g>
            </svg>
            <svg class="background front" fill="cccccc" width="531px" height="531px" viewBox="0 0 531 531">
                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                    <g transform="translate(-74.000000, -74.000000)">
                        <rect transform="translate(339.184484, 339.184484) rotate(-45.000000) translate(-339.184484, -339.184484) " x="142.184484" y="142.184484" width="394" height="394" rx="33"></rect>
                    </g>
                </g>
            </svg>
            <div class="container fixed-width-md-up">
                <div class="root">
                    <div class="card paper">
                        <div class="row align-items-center mb-0">
                            <div class="col-md-8 pa-0">
                                <h4 class="use-text-title2 pb-2">هل أنت جاهز للبدء؟</h4>
                                <p class="use-text-subtitle2">فريق Best Tech لا يولد فورًا ، إنه مصنوع ...</p>
                            </div>
                            <div class="col-md-4 pa-0">
                                <div class="d-flex align-items-center justify-content-end">
                                    <a class="waves-effect btn-outlined secondary button" href="https://maestrolux.vercel.app/contact">اتصل بنا<i class="material-icons">send</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### END CALL ACTION #####-->

        <!-- ##### MAP ADDRESS #####-->
        <section class="space-top-short" id="map-address">
            <div class="root">
                <div class="container fixed-width">
                    <div class="row spacing6">
                        <div class="col-lg-1 pa-6 show-lg-up"></div>
                        <div class="col-lg-5 col-md-6 pa-6">
                            <div>
                                <div class="title-deco"><h3>مكتبنا</h3></div>
                            </div>
                            <div class="block">
                                <div class="wow fadeInLeftShort" data-wow-offset="-50" data-wow-delay="0.3s" data-duration="0.3s">
                                    <div class="card paper">
                                        <h6 class="title">المركز الرئيسى</h6>
                                        <div class="row">
                                            <div class="col-sm-6 pa-0"><i class="material-icons icon">phone</i>+123 456 78 91</div>
                                            <div class="col-sm-6 pa-0"><i class="material-icons icon">email</i>hello@luxi.com</div>
                                            <div class="col-sm-12 pa-0"><i class="material-icons icon">location_on</i>Lorem ipsum street no.14 Block A</div>
                                        </div>
                                    </div>
                                    <div class="wow fadeInLeftShort" data-wow-offset="-50" data-wow-delay="0.5s" data-duration="0.3s">
                                        <div class="card paper">
                                            <h6 class="title">مكتب فرعي</h6>
                                            <div class="row">
                                                <div class="col-sm-6 pa-0"><i class="material-icons icon">phone</i>+98 765 432 10</div>
                                                <div class="col-sm-6 pa-0"><i class="material-icons icon">email</i>hello@luxi.com</div>
                                                <div class="col-sm-12 pa-0"><i class="material-icons icon">location_on</i>Lorem ipsum street Block C - Vestibullum Building</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pa-6">
                            <div class="card map"><div id="map"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### END MAP ADDRESS #####-->
    </main>
</div>

<!-- ##### PAGE NAV #####-->
<div class="hidden-md-down">
    <div class="page-nav" id="page_nav">
        <nav class="section-nav">
            <div class="scrollnav">
                <ul>
                    <li style="top: 120px;"><a class="tooltipped" href="#about" data-position="left" data-tooltip="حول"></a></li>
                    <li style="top: 90px;"><a class="tooltipped" href="#services" data-position="left" data-tooltip="خدمات"></a></li>
                    <li style="top: 60px;"><a class="tooltipped" href="#our-expertise" data-position="left" data-tooltip="خبرتنا"></a></li>
                    <li style="top: 30px;"><a class="tooltipped" href="#case-studies" data-position="left" data-tooltip="دراسات الحالة"></a></li>
                </ul>
            </div>
        </nav>
        <div class="scrollnav">
            <a class="btn-floating btn-large primary tooltipped waves-effect waves-light" href="#home" data-position="left" data-tooltip="To Top"><div class="icon material-icons">arrow_upward</div></a>
        </div>
    </div>
</div>
<!-- ##### END PAGE NAV #####-->
@endsection
@section('js')

@endsection
