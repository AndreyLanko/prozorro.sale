@extends('layouts/app')

@section('head')
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{trans('facebook.site_name')}}">
    <meta property="og:title" content="{{trans('facebook.title')}}">
    <meta property="og:url" content="{{trans('facebook.site_url')}}{{Request::path()}}">
    <meta property="og:image" content="{{trans('facebook.site_url')}}/assets/images/social/fb.png">
    <meta property="og:description" content="{{htmlentities(trans('facebook.description'), ENT_QUOTES)}}">
@endsection


@section('html_footer')
    {!!$html['footer']!!}
@endsection

@section('content')

<div class="hfeed site" id="site-wrapper">
    
    @include('partials/header-sale')
    
    @include('partials/form')
    
    <div class="site-content wide" id="content">
        <div class="container-fluid">
            <div class="content-area" id="primary">
                <main class="site-main" id="main" role="main">
                    <article class="clearfix post-357 page type-page status-publish hentry"id="post-357">
                        <div class="entry-content">
                            <div class="row" data-anchor="true" data-id="about">
                                <section class="parallax-box image-parallax-box" style="min-height: 300px">
                                    <div class="parallax-content">
                                        <div class="container">
                                            <div class="row row-edge">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row row-edge">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="cherry-spacer hidden-xs hidden-sm" style="height:260px;"></div>
                                                            <div class="cherry-spacer visible-sm-block" style="height:200px;"></div>
                                                            <div class="cherry-spacer visible-xs-block" style="height:70px;"></div>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        <img alt="logo-prozorro" class="aligncenter size-full wp-image-4861" height="104" src="/assets/sales/wp-content/uploads/2015/05/logo-prozorro.png"width="155">
                                                        </p>
                                                    <div class="title-box pad1 center title_box-362">
                                                        <div class="title-box_content">
                                                            <div class="icon-title-wrap">
                                                                <div><h2 class="title-box_title">Прозорро.Продажі - Prozorro.Sale</h2></div>
                                                            </div>
                                                            <h5 class="title-box_subtitle">
                                                            Система, створена з ініціативи громадських організацій, комерційних майданчиків, державних
                                                            органів та підприємців. Наша мета - прозора, швидка і ефективна реалізація майна банків в стадії ліквідації, а також запобігання корупції завдяки централізації даних, громадському контролю та розширенню кола покупців.
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="row row-edge">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="cherry-spacer hidden-xs hidden-sm" style="height:260px;"></div>
                                                            <div class="cherry-spacer visible-sm-block" style="height:200px;"></div>
                                                            <div class="cherry-spacer visible-xs-block" style="height:70px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="parallax-bg" data-img-url="http://www.prozorro.sale/wp-content/uploads/2015/05/Untitled-1.jpg" data-invert="" data-parallax-type="image" data-speed="1.5"></div>
                                </section>
                            </div>
                            <div class="row" data-anchor="true" data-id="pros">
                                <div class="container">
                                    <div class="row row-edge">
                                        <div class="row row-edge">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="cherry-spacer hidden-xs hidden-sm" style="height:200px;"></div>
                                                <div class="cherry-spacer visible-sm-block" style="height:150px;"></div>
                                                <div class="cherry-spacer visible-xs-block" style="height:70px;"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h2 style="text-align: center;">Ринок реалізації активів банків</h2>
                                            <div class="cherry-spacer hidden-xs hidden-sm" style="height:70px;"></div>
                                            <div class="cherry-spacer visible-sm-block" style="height:70px;"></div>
                                            <div class="cherry-spacer visible-xs-block" style="height:50px;"></div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="title-box home-service center title_box-109">
                                            <div class="title-box_content">
                                                <div class="icon-title-wrap">
                                                        <span class="title-box_icon"><img alt="65" src="/assets/sales/wp-content/uploads/2015/05/home-icon-1.png"></span>
                                                        <div>
                                                            <h2 class="title-box_title">65</h2>
                                                        </div>
                                                    </div>
                                                    <h5 class="title-box_subtitle">Банків в стадії ліквідації</h5>
                                                </div>
                                            </div>
                                            <div class="cherry-spacer hidden-xs hidden-sm"style="height:0px;"></div>
                                            <div class="cherry-spacer visible-sm-block"style="height:0px;"></div>
                                            <div class="cherry-spacer visible-xs-block"style="height:50px;"></div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="title-box home-service center title_box-475">
                                            <div class="title-box_content">
                                                <div class="icon-title-wrap">
                                                        <span class="title-box_icon"><img alt="100 млрд. грн." src="/assets/sales/wp-content/uploads/2015/05/home-icon-2.png"></span>
                                                        <div>
                                                            <h2 class="title-box_title">100 млрд. грн.</h2>
                                                        </div>
                                                    </div>
                                                    <h5 class="title-box_subtitle">Оціночна вартість майна банків</h5>
                                                </div>
                                            </div>
                                            <div class=
                                            "cherry-spacer hidden-xs hidden-sm"
                                            style="height:0px;"></div>
                                            <div class=
                                            "cherry-spacer visible-sm-block"
                                            style="height:0px;"></div>
                                            <div class=
                                            "cherry-spacer visible-xs-block"
                                            style="height:50px;"></div>
                                        </div>
                                        <div class=
                                        "col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class=
                                        "title-box home-service center title_box-905">
                                            <div class="title-box_content">
                                                <div class=
                                                "icon-title-wrap">
                                                        <span class=
                                                        "title-box_icon"><img alt="100 млн. грн."
                                                        src=
                                                        "/assets/sales/wp-content/uploads/2015/05/home-icon-3.png"></span>
                                                        <div>
                                                            <h2 class=
                                                            "title-box_title">
                                                            100 млн.
                                                            грн.</h2>
                                                        </div>
                                                    </div>
                                                    <h5 class=
                                                    "title-box_subtitle">
                                                    Оцінка щоденної втрати
                                                    вартості активів, що не
                                                    продані</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-edge">
                                            <div class=
                                            "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class=
                                            "cherry-spacer hidden-xs hidden-sm"
                                                style="height:50px;"></div>
                                                <div class=
                                                "cherry-spacer visible-sm-block"
                                                style="height:50px;"></div>
                                                <div class=
                                                "cherry-spacer visible-xs-block"
                                                style="height:50px;"></div>
                                            </div>
                                        </div>
                                        <div class="aligncenter -wrapper">
                                            <a class=
                                            "cherry-btn cherry-btn-primary cherry-btn-medium cherry-btn-inline cherry-btn-fade button-192"
                                            href=
                                            "%D0%BC%D0%B5%D1%82%D0%B0-%D1%82%D0%B0-%D0%BF%D1%80%D0%B8%D0%BD%D1%86%D0%B8%D0%BF%D0%B8-%D1%80%D0%B5%D1%84%D0%BE%D1%80%D0%BC%D0%B8/index.html"
                                            target="_self">Читати</a>
                                        </div>
                                        <div class="row row-edge">
                                            <div class=
                                            "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class=
                                            "cherry-spacer hidden-xs hidden-sm"
                                                style="height:200px;">
                                                </div>
                                                <div class=
                                                "cherry-spacer visible-sm-block"
                                                style="height:150px;">
                                                </div>
                                                <div class=
                                                "cherry-spacer visible-xs-block"
                                                style="height:70px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" data-anchor="true" data-id=
                            "market">
                                <div class="cherry-box box-461">
                                    <div class="box-default inner">
                                        <div class="container">
                                            <div class="row row-edge">
                                                <div class=
                                                "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row row-edge">
                                                    <div class=
                                                    "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class=
                                                        "cherry-spacer hidden-xs hidden-sm"
                                                            style=
                                                            "height:200px;">
                                                            </div>
                                                            <div class=
                                                            "cherry-spacer visible-sm-block"
                                                            style=
                                                            "height:150px;">
                                                            </div>
                                                            <div class=
                                                            "cherry-spacer visible-xs-block"
                                                            style=
                                                            "height:70px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class=
                                                        "container">
                                                            <div class=
                                                            "row row-edge">
                                                                <div class=
                                                                "col-xs-12 col-sm-6 col-md-6 col-lg-5">
                                                                <h2>
                                                                Покупцям</h2>
                                                                    <div class="cherry-spacer hidden-xs hidden-sm"
                                                                    style=
                                                                    "height:50px;">
                                                                    </div>
                                                                    <div class="cherry-spacer visible-sm-block"
                                                                    style=
                                                                    "height:50px;">
                                                                    </div>
                                                                    <div class="cherry-spacer visible-xs-block"
                                                                    style=
                                                                    "height:1px;">
                                                                    </div>
                                                                    <h5>Щоб
                                                                    взяти
                                                                    участь
                                                                    як
                                                                    покупець,
                                                                    реєструйтесь
                                                                    на
                                                                    будь-якому
                                                                    із
                                                                    підключених
                                                                    до
                                                                    системи
                                                                    майданчиків:</h5>
                                                                </div>
                                                                <div class=
                                                                "col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1">
                                                                <div class="cherry-spacer hidden-xs hidden-sm"
                                                                    style=
                                                                    "height:140px;">
                                                                    </div>
                                                                    <div class="cherry-spacer visible-sm-block"
                                                                    style=
                                                                    "height:100px;">
                                                                    </div>
                                                                    <div class="cherry-spacer visible-xs-block"
                                                                    style=
                                                                    "height:70px;">
                                                                    </div>
                                                                    <div class="cherry-posts-list template-clients-template-1 row"
                                                                    id=
                                                                    "cherry-posts-list-1">
                                                                    <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-0 odd">
                                                                        <div class="inner cherry-clearfix">
                                                                            <div class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="zakupki-ua"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="66"
                                                                                        src="/assets/sales/wp-content/uploads/2016/09/ZAKUPKI-UA.png"
                                                                                        width="326">
                                                                                    </figure>
                                                                                </div>
                                                                            </div>
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-1 even">
                                                                        <div class="inner cherry-clearfix">
                                                                            <div class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="ubiz-2"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="184"
                                                                                        src="/assets/sales/wp-content/uploads/2016/09/Ubiz-2.png"
                                                                                        width="381">
                                                                                    </figure>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cherry-xs-clear">
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-2 odd">
                                                                        <div class="inner cherry-clearfix">
                                                                            <div class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="logo_final"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="300"
                                                                                        src="/assets/sales/wp-content/uploads/2016/09/logo_final-475x300.png"
                                                                                        width="475">
                                                                                    </figure>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cherry-sm-clear cherry-md-clear cherry-lg-clear">
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-3 even">
                                                                        <div class="inner cherry-clearfix">
                                                                            <div class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="privatbank-logo"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="300"
                                                                                        src="/assets/sales/wp-content/uploads/2016/09/PrivatBank-logo-475x300.png"
                                                                                        width="475">
                                                                                    </figure>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cherry-xs-clear">
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-4 odd">
                                                                        <div class="inner cherry-clearfix">
                                                                            <div class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="polonex"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="300"
                                                                                        src="/assets/sales/wp-content/uploads/2016/09/polonex-475x300.png"
                                                                                        width="475">
                                                                                    </figure>
                                                                                </div>
                                                                            </div>
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-5 even">
                                                                        <div class="inner cherry-clearfix">
                                                                            <div class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="ot_logo"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="200"
                                                                                        src="/assets/sales/wp-content/uploads/2016/09/ot_logo-475x200.png"
                                                                                        width="475">
                                                                                    </figure>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cherry-xs-clear cherry-sm-clear cherry-md-clear cherry-lg-clear">
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-6 odd">
                                                                        <div class="inner cherry-clearfix">
                                                                            <div class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="dto_logo"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="300"
                                                                                        src="/assets/sales/wp-content/uploads/2016/09/dto_logo-475x300.png"
                                                                                        width="475">
                                                                                    </figure>
                                                                                </div>
                                                                            </div>
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-7 even">
                                                                        <div class="inner cherry-clearfix">
                                                                            <div class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="newtend-logo-120x120"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="120"
                                                                                        sizes="(max-width: 120px) 100vw, 120px"
                                                                                        src="/assets/sales/wp-content/uploads/2015/07/newtend-logo-120x120.png"
                                                                                        srcset="http://www.prozorro.sale/wp-content/uploads/2015/07/newtend-logo-120x120.png 120w, http://www.prozorro.sale/wp-content/uploads/2015/07/newtend-logo-120x120-72x72.png 72w"
                                                                                        width="120">
                                                                                    </figure>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cherry-xs-clear">
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-8 odd">
                                                                        <div class="inner cherry-clearfix">
                                                                            <div class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="logopng_500px"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="300"
                                                                                        src="/assets/sales/wp-content/uploads/2015/07/logoPNG_500px-475x300.png"
                                                                                        width="475">
                                                                                    </figure>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cherry-sm-clear cherry-md-clear cherry-lg-clear">
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-9 even">
                                                                        <div class="inner cherry-clearfix">
                                                                            <div class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="pb_logo_short_c"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="300"
                                                                                        src="/assets/sales/wp-content/uploads/2015/07/PB_Logo_short_C-475x300.png"
                                                                                        width="475">
                                                                                    </figure>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cherry-xs-clear">
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-10 odd">
                                                                        <div class="inner cherry-clearfix">
                                                                            <div class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="smarttender"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="226"
                                                                                        src="/assets/sales/wp-content/uploads/2015/05/SmartTender-475x226.png"
                                                                                        width="475">
                                                                                    </figure>
                                                                                </div>
                                                                            </div>
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-11 even">
                                                                        <div class="inner cherry-clearfix">
                                                                            <div class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="client-1"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="130"
                                                                                        sizes="(max-width: 130px) 100vw, 130px"
                                                                                        src="/assets/sales/wp-content/uploads/2015/07/client-1.png"
                                                                                        srcset="http://www.prozorro.sale/wp-content/uploads/2015/07/client-1.png 130w, http://www.prozorro.sale/wp-content/uploads/2015/07/client-1-120x120.png 120w"
                                                                                        width="130">
                                                                                    </figure>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cherry-xs-clear cherry-sm-clear cherry-md-clear cherry-lg-clear">
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-12 odd">
                                                                        <div class="inner cherry-clearfix">
                                                                            <div class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="logo-brizol-600"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="124"
                                                                                        src="/assets/sales/wp-content/uploads/2016/09/Logo-brizol-600-475x124.png"
                                                                                        width="475">
                                                                                    </figure>
                                                                                </div>
                                                                            </div>
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-13 even">
                                                                        <div class="inner cherry-clearfix">
                                                                            <div class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="logo-alfa-bank"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="300"
                                                                                        src="/assets/sales/wp-content/uploads/2016/09/logo-alfa-bank-475x300.jpg"
                                                                                        width="475">
                                                                                    </figure>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cherry-xs-clear">
                                                                        </div><!--/.cherry-posts-item-->
                                                                    </div>
                                                                    <!--/.cherry-posts-list-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=
                                                    "row row-edge">
                                                        <div class=
                                                        "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class=
                                                        "cherry-spacer hidden-xs hidden-sm"
                                                            style=
                                                            "height:300px;">
                                                            </div>
                                                            <div class=
                                                            "cherry-spacer visible-sm-block"
                                                            style=
                                                            "height:200px;">
                                                            </div>
                                                            <div class=
                                                            "cherry-spacer visible-xs-block"
                                                            style=
                                                            "height:70px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" data-anchor="true" data-id=
                            "join">
                                <div class="container">
                                    <div class="row row-edge">
                                        <div class=
                                        "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="row row-edge">
                                                <div class=
                                                "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class=
                                                "cherry-spacer hidden-xs hidden-sm"
                                                    style="height:200px;">
                                                    </div>
                                                    <div class=
                                                    "cherry-spacer visible-sm-block"
                                                    style="height:150px;">
                                                    </div>
                                                    <div class=
                                                    "cherry-spacer visible-xs-block"
                                                    style="height:70px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="title-box_title"></p>
                                            <div class=
                                            "title-box center title_box-982">
                                            <div class="title-box_content">
                                                <div class=
                                                "icon-title-wrap">
                                                        <div>
                                                            <h2 class=
                                                            "title-box_title">
                                                            Майданчикам</h2>
                                                        </div>
                                                    </div>
                                                    <h5 class=
                                                    "title-box_subtitle">
                                                    Доступ до ЦБД</h5>
                                                </div>
                                            </div>
                                            <p class="title-box_title"></p>
                                            <div class=
                                            "cherry-spacer hidden-xs hidden-sm"
                                            style="height:46px;"></div>
                                            <div class=
                                            "cherry-spacer visible-sm-block"
                                            style="height:46px;"></div>
                                            <div class=
                                            "cherry-spacer visible-xs-block"
                                            style="height:46px;"></div>
                                            <p class="title-box_title"></p>
                                            <div class="row row-edge">
                                                <div class=
                                                "col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                <p class="title-box_title">
                                                    </p>
                                                    <div class=
                                                    "cherry-banner template-banner-template-4 border-banner">
                                                    <div class=
                                                    "cherry-banner_wrap home-banner"
                                                        data-equal-group=
                                                        "10" style=
                                                        "background-color:; color:">
                                                        <img alt=""
                                                            src="/assets/sales/wp-content/uploads/2015/05/mdn-icon-1.png">
                                                            <h2 class=
                                                            "cherry-banner_title">
                                                            Форма для
                                                            реєстрації
                                                            відповідальної
                                                            особи за
                                                            підключення до
                                                            ЦБД</h2>
                                                            <div class=
                                                            "cherry-banner_content">
                                                            <p class=
                                                            "title-box_title">
                                                                </p>
                                                                <div class=
                                                                "cherry-list font-icon cherry-list_2042">
                                                                <ul class="default-lists">
                                                                    <li>
                                                                        <span class="fa fa-long-arrow-right list-icon icon-712">
                                                                            </span><a href="http://goo.gl/forms/V3YNODCkNUt68PrB3"
                                                                            target="_blank">Отримання
                                                                            API
                                                                            ключа</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="title-box_title">
                                                                    </p>
                                                                </div>
                                                                <p class=
                                                                "title-box_title">
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class=
                                                    "title-box_title"></p>
                                                </div>
                                                <div class=
                                                "col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                <p class="title-box_title">
                                                    </p>
                                                    <div class=
                                                    "cherry-banner template-banner-template-4 border-banner">
                                                    <div class=
                                                    "cherry-banner_wrap home-banner"
                                                        data-equal-group=
                                                        "10" style=
                                                        "background-color:; color:">
                                                        <img alt=""
                                                            src="/assets/sales/wp-content/uploads/2015/05/mdn-icon-2.png">
                                                            <h2 class=
                                                            "cherry-banner_title">
                                                            Робочий
                                                            процес</h2>
                                                            <div class=
                                                            "cherry-banner_content">
                                                            <p class=
                                                            "title-box_title">
                                                                </p>
                                                                <div class=
                                                                "cherry-list font-icon cherry-list_3207">
                                                                <ul class="default-lists">
                                                                    <li>
                                                                        <span class="fa fa-long-arrow-right list-icon icon-153">
                                                                            </span><a href="https://goo.gl/forms/JaaaQ0aIZLE3IIb42"
                                                                            target="_blank">Форма
                                                                            для
                                                                            реєстрації
                                                                            співробітників</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="title-box_title">
                                                                    </p>
                                                                </div>
                                                                <p class=
                                                                "title-box_title">
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class=
                                                    "title-box_title"></p>
                                                </div>
                                                <div class=
                                                "col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                <p class="title-box_title">
                                                    </p>
                                                    <div class=
                                                    "cherry-banner template-banner-template-4 border-banner">
                                                    <div class=
                                                    "cherry-banner_wrap home-banner"
                                                        data-equal-group=
                                                        "10" style=
                                                        "background-color:; color:">
                                                        <img alt=""
                                                            src="/assets/sales/wp-content/uploads/2015/05/mdn-icon-3.png">
                                                            <h2 class=
                                                            "cherry-banner_title">
                                                            Розробка</h2>
                                                            <div class=
                                                            "cherry-banner_content">
                                                            <p class=
                                                            "title-box_title">
                                                                </p>
                                                                <div class=
                                                                "cherry-list font-icon cherry-list_9915">
                                                                <ul class="default-lists">
                                                                    <li>
                                                                        <span class="fa fa-long-arrow-right list-icon icon-457">
                                                                            </span><a href="https://docs.google.com/document/d/14Yav0iwWOHd-6NeZ_P4fHlNT8e22Hlo24RVz6rSed4M/edit"
                                                                            target="_blank">ТЗ</a>
                                                                        </li>
                                                                        <li>
                                                                        <span class="fa fa-long-arrow-right list-icon icon-457">
                                                                            </span><a href="http://api-docs.openprocurement.org/en/2.3/"
                                                                            target="_blank">Документація
                                                                            по
                                                                            API</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="title-box_title">
                                                                    </p>
                                                                </div>
                                                                <p class=
                                                                "title-box_title">
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class=
                                                    "title-box_title"></p>
                                                </div>
                                                <div class=
                                                "col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                <p class="title-box_title">
                                                    </p>
                                                    <div class=
                                                    "cherry-banner template-banner-template-4">
                                                    <div class=
                                                    "cherry-banner_wrap home-banner"
                                                        data-equal-group=
                                                        "10" style=
                                                        "background-color:; color:">
                                                        <img alt=""
                                                            src="/assets/sales/wp-content/uploads/2015/05/mdn-icon-4.png">
                                                            <h2 class=
                                                            "cherry-banner_title">
                                                            Акредитація</h2>
                                                            <div class=
                                                            "cherry-banner_content">
                                                            <p class=
                                                            "title-box_title">
                                                                </p>
                                                                <div class=
                                                                "cherry-list font-icon cherry-list_5140">
                                                                <ul class="default-lists">
                                                                    <li>
                                                                        <span class="fa fa-long-arrow-right list-icon icon-653">
                                                                            </span><a href="https://github.com/openprocurement/robot_tests/blob/eauction/op_robot_tests/tests_files/singleItemAuction.robot"
                                                                            target="_blank">Проходження
                                                                            автоматичного
                                                                            тестування<br>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                        <span class="fa fa-long-arrow-right list-icon icon-653">
                                                                            </span><a href="https://docs.google.com/document/d/1Ieh4NC-XhwLbdtA8vxdhLFBdNn-JOY1nzTWsvI9J3h0/edit"
                                                                            target="_blank">Проходження
                                                                            ручного
                                                                            тестування<br>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                        <span class="fa fa-long-arrow-right list-icon icon-653">
                                                                            </span><a href="http://www.fg.gov.ua/news/5114-oholoshennya-pro-provedennia-kvalifikatsiinoho-vidboru-za-napriamom-orhanizatsiia-vidkrytykh-torhiv-auktsioniv"
                                                                            target="_blank">Проходження
                                                                            акредитації
                                                                            по
                                                                            офіційних
                                                                            документах</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="title-box_title">
                                                                    </p>
                                                                </div>
                                                                <p class=
                                                                "title-box_title">
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row row-edge">
                                                <div class=
                                                "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class=
                                                "cherry-spacer hidden-xs hidden-sm"
                                                    style="height:240px;">
                                                    </div>
                                                    <div class=
                                                    "cherry-spacer visible-sm-block"
                                                    style="height:200px;">
                                                    </div>
                                                    <div class=
                                                    "cherry-spacer visible-xs-block"
                                                    style="height:70px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=
                            "row padding-top-80 padding-bottom-60"
                            data-anchor="true" data-id="contacts">
                                <div class="cherry-box box-883">
                                    <div class="box-polygon-3 inner">
                                        <div class="container">
                                            <div class="row row-edge">
                                                <div class=
                                                "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class=
                                                "cherry-spacer hidden-xs hidden-sm"
                                                    style="height:150px;">
                                                    </div>
                                                    <div class=
                                                    "cherry-spacer visible-sm-block"
                                                    style="height:70px;">
                                                    </div>
                                                    <div class=
                                                    "cherry-spacer visible-xs-block"
                                                    style="height:70px;">
                                                    </div>
                                                    <h2 style=
                                                    "text-align: center;">
                                                    <span style=
                                                    "color: #ffffff;">Контакти</span></h2>
                                                    <div class=
                                                    "row row-edge">
                                                        <div class=
                                                        "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class=
                                                        "team-wrap template-team-template-4 text-white">
                                                            <div class=
                                                            "team-listing row">
                                                                <div class="team-item item-1 clearfix odd col-xs-12 clear-col-xs col-sm-4 clear-col-sm col-md-4 clear-col-md col-lg-4 clear-col-lg"
                                                                    id=
                                                                    "team-1832">
                                                                    <div class="team template-4 center">
                                                                        <div class="team-listing_photo round">
                                                                            <a href="team-view/khomych/index.html">
                                                                                <img alt="Вадим Хомич"
                                                                                class="avatar wp-post-image"
                                                                                height="72"
                                                                                sizes="(max-width: 72px) 100vw, 72px"
                                                                                src="/assets/sales/wp-content/uploads/2015/07/khomych-1-72x72.jpg"
                                                                                srcset="http://www.prozorro.sale/wp-content/uploads/2015/07/khomych-1-72x72.jpg 72w, http://www.prozorro.sale/wp-content/uploads/2015/07/khomych-1-360x360.jpg 360w, http://www.prozorro.sale/wp-content/uploads/2015/07/khomych-1-300x300.jpg 300w, http://www.prozorro.sale/wp-content/uploads/2015/07/khomych-1-120x120.jpg 120w, http://www.prozorro.sale/wp-content/uploads/2015/07/khomych-1-500x500.jpg 500w, http://www.prozorro.sale/wp-content/uploads/2015/07/khomych-1-190x190.jpg 190w, http://www.prozorro.sale/wp-content/uploads/2015/07/khomych-1.jpg 640w"
                                                                                width="72"></a>
                                                                            </div>
                                                                            <div class="desc">
                                                                            <div class="desc-in">
                                                                                <h5 class="team-listing_name color-secondary">
                                                                                    <a href="team-view/khomych/index.html">
                                                                                    Вадим
                                                                                    Хомич</a></h5>
                                                                                    <div class="team-listing_position color-link">
                                                                                    <span class="team-meta_item position">
                                                                                        Спеціаліст
                                                                                        з
                                                                                        моніторингу</span>
                                                                                    </div>
                                                                                    <div class="team-listing_excerpt small">
                                                                                    <div class="cherry-team_excerpt">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="team-listing_socials colored">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/.team-item-->
                                                                    <div class="team-item item-2 clearfix even col-xs-12 clear-col-xs col-sm-4 col-md-4 col-lg-4"
                                                                    id=
                                                                    "team-1834">
                                                                    <div class="team template-4 center">
                                                                        <div class="team-listing_photo round">
                                                                            <a href="team-view/kulyk/index.html">
                                                                                <img alt="Сергій Кулік"
                                                                                class="avatar wp-post-image"
                                                                                height="72"
                                                                                sizes="(max-width: 72px) 100vw, 72px"
                                                                                src="/assets/sales/wp-content/uploads/2015/07/kulyk-72x72.png"
                                                                                srcset="http://www.prozorro.sale/wp-content/uploads/2015/07/kulyk-72x72.png 72w, http://www.prozorro.sale/wp-content/uploads/2015/07/kulyk-303x300.png 303w, http://www.prozorro.sale/wp-content/uploads/2015/07/kulyk-300x300.png 300w, http://www.prozorro.sale/wp-content/uploads/2015/07/kulyk-120x120.png 120w, http://www.prozorro.sale/wp-content/uploads/2015/07/kulyk-190x190.png 190w"
                                                                                width="72"></a>
                                                                            </div>
                                                                            <div class="desc">
                                                                            <div class="desc-in">
                                                                                <h5 class="team-listing_name color-secondary">
                                                                                    <a href="team-view/kulyk/index.html">
                                                                                    Сергій
                                                                                    Кулік</a></h5>
                                                                                    <div class="team-listing_position color-link">
                                                                                    <span class="team-meta_item position">
                                                                                        Координація
                                                                                        розробки
                                                                                        ІТ
                                                                                        системи</span>
                                                                                    </div>
                                                                                    <div class="team-listing_excerpt small">
                                                                                    <div class="cherry-team_excerpt">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="team-listing_socials colored">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/.team-item-->
                                                                    <div class="team-item item-3 clearfix odd col-xs-12 clear-col-xs col-sm-4 col-md-4 col-lg-4"
                                                                    id=
                                                                    "team-1833">
                                                                    <div class="team template-4 center">
                                                                        <div class="team-listing_photo round">
                                                                            <a href="team-view/moto/index.html">
                                                                                <img alt="Андрій Мотовиловець"
                                                                                class="avatar wp-post-image"
                                                                                height="72"
                                                                                sizes="(max-width: 72px) 100vw, 72px"
                                                                                src="/assets/sales/wp-content/uploads/2015/07/motovilovets-72x72.jpg"
                                                                                srcset="http://www.prozorro.sale/wp-content/uploads/2015/07/motovilovets-72x72.jpg 72w, http://www.prozorro.sale/wp-content/uploads/2015/07/motovilovets-360x360.jpg 360w, http://www.prozorro.sale/wp-content/uploads/2015/07/motovilovets-768x767.jpg 768w, http://www.prozorro.sale/wp-content/uploads/2015/07/motovilovets-737x736.jpg 737w, http://www.prozorro.sale/wp-content/uploads/2015/07/motovilovets-300x300.jpg 300w, http://www.prozorro.sale/wp-content/uploads/2015/07/motovilovets-120x120.jpg 120w, http://www.prozorro.sale/wp-content/uploads/2015/07/motovilovets-500x500.jpg 500w, http://www.prozorro.sale/wp-content/uploads/2015/07/motovilovets-736x736.jpg 736w, http://www.prozorro.sale/wp-content/uploads/2015/07/motovilovets-190x190.jpg 190w, http://www.prozorro.sale/wp-content/uploads/2015/07/motovilovets.jpg 870w"
                                                                                width="72"></a>
                                                                            </div>
                                                                            <div class="desc">
                                                                            <div class="desc-in">
                                                                                <h5 class="team-listing_name color-secondary">
                                                                                    <a href="team-view/moto/index.html">
                                                                                    Андрій
                                                                                    Мотовиловець</a></h5>
                                                                                    <div class="team-listing_position color-link">
                                                                                    <span class="team-meta_item position">
                                                                                        Проектний
                                                                                        менеджер</span>
                                                                                    </div>
                                                                                    <div class="team-listing_excerpt small">
                                                                                    <div class="cherry-team_excerpt">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="team-listing_socials colored">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/.team-item-->
                                                                    <div class="team-item item-4 clearfix even col-xs-12 clear-col-xs col-sm-4 clear-col-sm col-md-4 clear-col-md col-lg-4 clear-col-lg"
                                                                    id=
                                                                    "team-1831">
                                                                    <div class="team template-4 center">
                                                                        <div class="team-listing_photo round">
                                                                            <a href="team-view/rak/index.html">
                                                                                <img alt="Оксана Рак"
                                                                                class="avatar wp-post-image"
                                                                                height="72"
                                                                                sizes="(max-width: 72px) 100vw, 72px"
                                                                                src="/assets/sales/wp-content/uploads/2015/07/rak-72x72.jpg"
                                                                                srcset="http://www.prozorro.sale/wp-content/uploads/2015/07/rak-72x72.jpg 72w, http://www.prozorro.sale/wp-content/uploads/2015/07/rak-120x120.jpg 120w"
                                                                                width="72"></a>
                                                                            </div>
                                                                            <div class="desc">
                                                                            <div class="desc-in">
                                                                                <h5 class="team-listing_name color-secondary">
                                                                                    <a href="team-view/rak/index.html">
                                                                                    Оксана
                                                                                    Рак</a></h5>
                                                                                    <div class="team-listing_position color-link">
                                                                                    <span class="team-meta_item position">
                                                                                        Юрист</span>
                                                                                    </div>
                                                                                    <div class="team-listing_excerpt small">
                                                                                    <div class="cherry-team_excerpt">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="team-listing_socials colored">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/.team-item-->
                                                                    <div class="team-item item-5 clearfix odd col-xs-12 clear-col-xs col-sm-4 col-md-4 col-lg-4"
                                                                    id=
                                                                    "team-1835">
                                                                    <div class="team template-4 center">
                                                                        <div class="team-listing_photo round">
                                                                            <a href="team-view/sobolev/index.html">
                                                                                <img alt="Олексій Соболев"
                                                                                class="avatar wp-post-image"
                                                                                height="72"
                                                                                sizes="(max-width: 72px) 100vw, 72px"
                                                                                src="/assets/sales/wp-content/uploads/2015/07/sobolev-72x72.jpg"
                                                                                srcset="http://www.prozorro.sale/wp-content/uploads/2015/07/sobolev-72x72.jpg 72w, http://www.prozorro.sale/wp-content/uploads/2015/07/sobolev-360x360.jpg 360w, http://www.prozorro.sale/wp-content/uploads/2015/07/sobolev-768x768.jpg 768w, http://www.prozorro.sale/wp-content/uploads/2015/07/sobolev-736x736.jpg 736w, http://www.prozorro.sale/wp-content/uploads/2015/07/sobolev-300x300.jpg 300w, http://www.prozorro.sale/wp-content/uploads/2015/07/sobolev-120x120.jpg 120w, http://www.prozorro.sale/wp-content/uploads/2015/07/sobolev-500x500.jpg 500w, http://www.prozorro.sale/wp-content/uploads/2015/07/sobolev-1000x1000.jpg 1000w, http://www.prozorro.sale/wp-content/uploads/2015/07/sobolev-190x190.jpg 190w, http://www.prozorro.sale/wp-content/uploads/2015/07/sobolev.jpg 1024w"
                                                                                width="72"></a>
                                                                            </div>
                                                                            <div class="desc">
                                                                            <div class="desc-in">
                                                                                <h5 class="team-listing_name color-secondary">
                                                                                    <a href="team-view/sobolev/index.html">
                                                                                    Олексій
                                                                                    Соболев</a></h5>
                                                                                    <div class="team-listing_position color-link">
                                                                                    <span class="team-meta_item position">
                                                                                        Керiвник
                                                                                        проекту</span>
                                                                                    </div>
                                                                                    <div class="team-listing_excerpt small">
                                                                                    <div class="cherry-team_excerpt">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="team-listing_socials colored">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/.team-item-->
                                                                    <div class="team-item item-6 clearfix even col-xs-12 clear-col-xs col-sm-4 col-md-4 col-lg-4"
                                                                    id=
                                                                    "team-1828">
                                                                    <div class="team template-4 center">
                                                                        <div class="team-listing_photo round">
                                                                            <a href="team-view/krykun/index.html">
                                                                                <img alt="Федір Крикун"
                                                                                class="avatar wp-post-image"
                                                                                height="72"
                                                                                sizes="(max-width: 72px) 100vw, 72px"
                                                                                src="/assets/sales/wp-content/uploads/2015/07/krykun-72x72.jpg"
                                                                                srcset="http://www.prozorro.sale/wp-content/uploads/2015/07/krykun-72x72.jpg 72w, http://www.prozorro.sale/wp-content/uploads/2015/07/krykun-360x360.jpg 360w, http://www.prozorro.sale/wp-content/uploads/2015/07/krykun-300x300.jpg 300w, http://www.prozorro.sale/wp-content/uploads/2015/07/krykun-120x120.jpg 120w, http://www.prozorro.sale/wp-content/uploads/2015/07/krykun-190x190.jpg 190w, http://www.prozorro.sale/wp-content/uploads/2015/07/krykun.jpg 386w"
                                                                                width="72"></a>
                                                                            </div>
                                                                            <div class="desc">
                                                                            <div class="desc-in">
                                                                                <h5 class="team-listing_name color-secondary">
                                                                                    <a href="team-view/krykun/index.html">
                                                                                    Федір
                                                                                    Крикун</a></h5>
                                                                                    <div class="team-listing_position color-link">
                                                                                    <span class="team-meta_item position">
                                                                                        Координація
                                                                                        співпраці
                                                                                        зі
                                                                                        ЗМІ</span>
                                                                                    </div>
                                                                                    <div class="team-listing_excerpt small">
                                                                                    <div class="cherry-team_excerpt">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="team-listing_socials colored">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/.team-item-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=
                                                    "cherry-spacer hidden-xs hidden-sm"
                                                    style="height:230px;">
                                                    </div>
                                                    <div class=
                                                    "cherry-spacer visible-sm-block"
                                                    style="height:150px;">
                                                    </div>
                                                    <div class=
                                                    "cherry-spacer visible-xs-block"
                                                    style="height:70px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </div>
    <footer class="site-footer wide" id="footer" role="contentinfo">
        <div id="totop">
            <a href="javascript:void(0)" id="totopLink"><i class=
            "fa fa-chevron-up color-white"></i></a>
        </div>
        <div class="footer-top static-area" id="static-area-footer-top">
            <div class="container">
                <div class="row">
                    <div class=
                    "col-xs-12 col-sm-12 col-md-12 col-lg-12 static-footer-sidebars">
                    <div class='row'>
                            <div class="col-xs-12 col-sm-4">
                                <div class="sidebar-footer-1 widget-area"
                                role="complementary">
                                    <aside class="widget widget_nav_menu"
                                    id="nav_menu-31">
                                        <h5 class="widget-title">Мета та
                                        принципи реформи</h5>
                                        <div class=
                                        "menu-footer-menu-1-container">
                                            <ul class="menu" id=
                                            "menu-footer-menu-1">
                                                <li class=
                                                "menu-item menu-item-type-custom menu-item-object-custom menu-item-4926"
                                                id="menu-item-4926">
                                                    <a href=
                                                    "%D0%BC%D0%B5%D1%82%D0%B0-%D1%82%D0%B0-%D0%BF%D1%80%D0%B8%D0%BD%D1%86%D0%B8%D0%BF%D0%B8-%D1%80%D0%B5%D1%84%D0%BE%D1%80%D0%BC%D0%B8/index.html">
                                                    Цілі реформи</a>
                                                </li>
                                                <li class=
                                                "menu-item menu-item-type-custom menu-item-object-custom menu-item-4927"
                                                id="menu-item-4927">
                                                    <a href=
                                                    "%D0%BC%D0%B5%D1%82%D0%B0-%D1%82%D0%B0-%D0%BF%D1%80%D0%B8%D0%BD%D1%86%D0%B8%D0%BF%D0%B8-%D1%80%D0%B5%D1%84%D0%BE%D1%80%D0%BC%D0%B8/index.html">
                                                    Принципи
                                                    реформування</a>
                                                </li>
                                                <li class=
                                                "menu-item menu-item-type-custom menu-item-object-custom menu-item-4928"
                                                id="menu-item-4928">
                                                    <a href=
                                                    "%D0%BC%D0%B5%D1%82%D0%B0-%D1%82%D0%B0-%D0%BF%D1%80%D0%B8%D0%BD%D1%86%D0%B8%D0%BF%D0%B8-%D1%80%D0%B5%D1%84%D0%BE%D1%80%D0%BC%D0%B8/index.html">
                                                    Загальна інформація</a>
                                                </li>
                                                <li class=
                                                "menu-item menu-item-type-custom menu-item-object-custom menu-item-4929"
                                                id="menu-item-4929">
                                                    <a href=
                                                    "%D0%BC%D0%B5%D1%82%D0%B0-%D1%82%D0%B0-%D0%BF%D1%80%D0%B8%D0%BD%D1%86%D0%B8%D0%BF%D0%B8-%D1%80%D0%B5%D1%84%D0%BE%D1%80%D0%BC%D0%B8/index.html">
                                                    Принципи реформи</a>
                                                </li>
                                                <li class=
                                                "menu-item menu-item-type-custom menu-item-object-custom menu-item-4930"
                                                id="menu-item-4930">
                                                    <a href=
                                                    "%D0%BC%D0%B5%D1%82%D0%B0-%D1%82%D0%B0-%D0%BF%D1%80%D0%B8%D0%BD%D1%86%D0%B8%D0%BF%D0%B8-%D1%80%D0%B5%D1%84%D0%BE%D1%80%D0%BC%D0%B8/index.html">
                                                    Бюджет реформи</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="sidebar-footer-2 widget-area"
                                role="complementary"></div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="sidebar-footer-3 widget-area"
                                role="complementary">
                                    <aside class=
                                    "widget cherry-social-follow-class" id=
                                    "cherry-social-follow-2">
                                        <h5 class="widget-title">Соцiальнi
                                        мережi</h5>
                                        <div class='cherry-follow_wrap' id=
                                        'cherry-follow-items-1'>
                                            <ul class=
                                            'cherry-follow_list clearfix'>
                                                <li class=
                                                "cherry-follow_item facebook-item">
                                                <a class=
                                                "cherry-follow_link"
                                                    href="https://www.facebook.com/hashtag/prozorro%D0%BF%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B8"
                                                    rel="nofollow" target=
                                                    "_blank" title=
                                                    "Facebook"><i class=
                                                    'fa fa-facebook-square'>
                                                    </i><span class=
                                                    "cherry-follow_label">Facebook</span></a>
                                                </li>
                                                <li class=
                                                "cherry-follow_item google-item">
                                                <a class=
                                                "cherry-follow_link"
                                                    href="https://plus.google.com/u/0/111318739148942825035"
                                                    rel="nofollow" target=
                                                    "_blank" title=
                                                    "Google +"><i class=
                                                    'fa fa-google-plus-square'>
                                                    </i><span class=
                                                    "cherry-follow_label">Google
                                                    +</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>
                                    <aside class="widget widget_text" id=
                                    "text-9">
                                        <div class="textwidget">
                                            <img alt="" src=
                                            "/assets/sales/wp-content/uploads/2016/09/footer-logo.png">
                                            <p class="site-info">
                                            PROZORRO.SALE © 2016</p>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom static-area" id=
        "static-area-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class=
                    "col-xs-12 col-sm-12 col-md-12 col-lg-12 static-footer-sidebar">
                    <div class="sidebar-footer widget-area" role=
                    "complementary">
                            <aside class="widget cherry-shortcodes" id=
                            "cherry-shortcodes-2">
                                <div class="textwidget">
                                    <a class="dev-link" href=
                                    "http://www.templatemonster.com/ua/"><img alt=""
                                    src=
                                    "/assets/sales/wp-content/uploads/2016/09/monster-link.png"></a>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="test123"></div>
    </footer>
</div><!--site-wrapper-->
<div id="yith-quick-view-modal">
    <div class="yith-quick-view-overlay"></div>
    <div class="yith-wcqv-wrapper">
        <div class="yith-wcqv-main">
            <div class="yith-wcqv-head">
                <a class="yith-wcqv-close" href="#" id=
                "yith-quick-view-close">X</a>
            </div>
            <div class="woocommerce single-product" id=
            "yith-quick-view-content"></div>
        </div>
    </div>
</div>



@endsection