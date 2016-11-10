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
    
    <div class="site-content wide" id="content" homepage>
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
                                                                <div><h2 class="title-box_title">ProZorro.Продажі — ProZorro.Sale</h2></div>
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
                                    <div class="parallax-bg" data-img-url="/assets/sales/wp-content/uploads/2015/05/Untitled-1.jpg" data-invert="" data-parallax-type="image" data-speed="1.5"></div>
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
                                            "/aim"
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
                                                                            <a href="http://sale.zakupki.com.ua/" target="_blank" class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="zakupki-ua"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="66"
                                                                                        src="/assets/images/platforms/zakupki.png"
                                                                                        width="326">
                                                                                    </figure>
                                                                                </div>
                                                                            </a>
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-1 even">
                                                                        <div class="inner cherry-clearfix">
                                                                            <a href="https://ubiz.ua/" target="_blank" class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="ubiz-2"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="184"
                                                                                        src="/assets/images/platforms/ubiz.png"
                                                                                        width="381">
                                                                                    </figure>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="cherry-xs-clear">
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-2 odd">
                                                                        <div class="inner cherry-clearfix">
                                                                            <a href="https://eauction.uace.com.ua/" target="_blank" class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="logo_final"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="300"
                                                                                        src="/assets/images/platforms/uace.png"
                                                                                        width="475">
                                                                                    </figure>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="cherry-sm-clear cherry-md-clear cherry-lg-clear">
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-3 even">
                                                                        <div class="inner cherry-clearfix">
                                                                            <a href="https://auction.alfabank.ua/" target="_blank" class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="logo-alfa-bank"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="300"
                                                                                        src="/assets/images/platforms/alfabank.png"
                                                                                        width="475">
                                                                                    </figure>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="cherry-xs-clear">
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-4 odd">
                                                                        <div class="inner cherry-clearfix">
                                                                            <a href="http://polonex.in.ua/" target="_blank" class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="polonex"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="300"
                                                                                        src="/assets/images/platforms/polonex.png"
                                                                                        width="475">
                                                                                    </figure>
                                                                                </div>
                                                                            </a>
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-5 even">
                                                                        <div class="inner cherry-clearfix">
                                                                            <a href="http://eauction.open-tender.com.ua/" target="_blank" class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="ot_logo"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="200"
                                                                                        src="/assets/images/platforms/opentender.png"
                                                                                        width="475">
                                                                                    </figure>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="cherry-xs-clear cherry-sm-clear cherry-md-clear cherry-lg-clear">
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-6 odd">
                                                                        <div class="inner cherry-clearfix">
                                                                            <a href="http://www.dto.com.ua/" target="_blank" class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="dto_logo"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="300"
                                                                                        src="/assets/images/platforms/derzhavnitorgy.png"
                                                                                        width="475">
                                                                                    </figure>
                                                                                </div>
                                                                            </a>
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-7 even">
                                                                        <div class="inner cherry-clearfix">
                                                                            <a href="https://ea.newtend.com/" target="_blank" class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="newtend-logo-120x120"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="120"
                                                                                        sizes="(max-width: 120px) 100vw, 120px"
                                                                                        src="/assets/images/platforms/newtend.png"
                                                                                        width="120">
                                                                                    </figure>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="cherry-xs-clear">
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-8 odd">
                                                                        <div class="inner cherry-clearfix">
                                                                            <a href="http://e-auction.ua/" target="_blank" class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="logopng_500px"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="300"
                                                                                        src="/assets/images/platforms/eauction.png"
                                                                                        width="475">
                                                                                    </figure>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="cherry-sm-clear cherry-md-clear cherry-lg-clear">
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-9 even">
                                                                        <div class="inner cherry-clearfix">
                                                                            <a href="https://public-bid.sale/" target="_blank" class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="pb_logo_short_c"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="300"
                                                                                        src="/assets/images/platforms/publicbid.png"
                                                                                        width="475">
                                                                                    </figure>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="cherry-xs-clear">
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-10 odd">
                                                                        <div class="inner cherry-clearfix">
                                                                            <a href="https://smarttender.biz/" target="_blank" class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="smarttender"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="226"
                                                                                        src="/assets/images/platforms/smarttenderbiz.png"
                                                                                        width="475">
                                                                                    </figure>
                                                                                </div>
                                                                            </a>
                                                                        </div><!--/.cherry-posts-item-->
                                                                        <div class="cherry-posts-item col-xs-6 col-sm-4 col-md-4 col-lg-4 clients-item item-11 even">
                                                                        <div class="inner cherry-clearfix">
                                                                            <a href="http://zakupki.prom.ua/" target="_blank" class="clients clients-template-1">
                                                                                <figure class="post-thumbnail">
                                                                                    <img alt="client-1"
                                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                        height="130"
                                                                                        sizes="(max-width: 130px) 100vw, 130px"
                                                                                        src="/assets/images/platforms/zakupkipromua.png"
                                                                                        width="130">
                                                                                    </figure>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="cherry-xs-clear cherry-sm-clear cherry-md-clear cherry-lg-clear">
                                                                        </div><!--/.cherry-posts-item-->
                                                                        {{--
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
                                                                        --}}
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
                                                                            </span><a href="http://dgf.api-docs.openprocurement.org/en/latest/index.html"
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
                                                                            </span><a href="https://github.com/openprocurement/openprocurement.auctions.dgf"
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
                                                                            <a href="/team/homich/">
                                                                            <img alt="Вадим Хомич"
                                                                                class="avatar wp-post-image"
                                                                                height="72"
                                                                                sizes="(max-width: 72px) 100vw, 72px"
                                                                                src="/assets/sales/wp-content/uploads/2015/07/khomych-1-72x72.jpg"
                                                                                width="72"></a>
                                                                            </div>
                                                                            <div class="desc">
                                                                            <div class="desc-in">
                                                                                <h5 class="team-listing_name color-secondary">
                                                                                    <a href="/team/homich/">Вадим
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
                                                                            <a href="/team/coolic/">
                                                                                <img alt="Сергій Кулік"
                                                                                class="avatar wp-post-image"
                                                                                height="72"
                                                                                sizes="(max-width: 72px) 100vw, 72px"
                                                                                src="/assets/sales/wp-content/uploads/2015/07/kulyk-72x72.png"
                                                                                width="72"></a>
                                                                            </div>
                                                                            <div class="desc">
                                                                            <div class="desc-in">
                                                                                <h5 class="team-listing_name color-secondary">
                                                                                    <a href="/team/coolic/">
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
                                                                            <a href="/team/moto/">
                                                                                <img alt="Андрій Мотовиловець"
                                                                                class="avatar wp-post-image"
                                                                                height="72"
                                                                                sizes="(max-width: 72px) 100vw, 72px"
                                                                                src="/assets/sales/wp-content/uploads/2015/07/motovilovets-72x72.jpg"
                                                                                width="72"></a>
                                                                            </div>
                                                                            <div class="desc">
                                                                            <div class="desc-in">
                                                                                <h5 class="team-listing_name color-secondary">
                                                                                    <a href="/team/moto/">
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
                                                                            <a href="/team/rak/">
                                                                                <img alt="Оксана Рак"
                                                                                class="avatar wp-post-image"
                                                                                height="72"
                                                                                sizes="(max-width: 72px) 100vw, 72px"
                                                                                src="/assets/sales/wp-content/uploads/2015/07/rak-72x72.jpg"
                                                                                width="72"></a>
                                                                            </div>
                                                                            <div class="desc">
                                                                            <div class="desc-in">
                                                                                <h5 class="team-listing_name color-secondary">
                                                                                    <a href="/team/rak/">
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
                                                                            <a href="/team/sobolev/">
                                                                                <img alt="Олексій Соболев"
                                                                                class="avatar wp-post-image"
                                                                                height="72"
                                                                                sizes="(max-width: 72px) 100vw, 72px"
                                                                                src="/assets/sales/wp-content/uploads/2015/07/sobolev-72x72.jpg"
                                                                                width="72"></a>
                                                                            </div>
                                                                            <div class="desc">
                                                                            <div class="desc-in">
                                                                                <h5 class="team-listing_name color-secondary">
                                                                                    <a href="/team/sobolev/">
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
                                                                            <a href="/team/krykun/">
                                                                                <img alt="Федір Крикун"
                                                                                class="avatar wp-post-image"
                                                                                height="72"
                                                                                sizes="(max-width: 72px) 100vw, 72px"
                                                                                src="/assets/sales/wp-content/uploads/2015/07/krykun-72x72.jpg"
                                                                                width="72"></a>
                                                                            </div>
                                                                            <div class="desc">
                                                                            <div class="desc-in">
                                                                                <h5 class="team-listing_name color-secondary">
                                                                                    <a href="/team/krykun/">
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
                                                                    <div id="team-1835" class="team-item item-7 clearfix odd col-xs-12 clear-col-xs col-sm-4 clear-col-sm col-md-4 clear-col-md col-lg-4 clear-col-lg"><div class="team template-4 center">
  <div class="team-listing_photo round"><a href="/team/nefedov/"><img width="72" height="72" src="/assets/team/2d55366-nefedov1-72x72.jpg" class="avatar wp-post-image" alt="Максим Нефьодов"></a></div>
  <div class="desc">
    <div class="desc-in">
      <h5 class="team-listing_name color-secondary"><a href="/team/nefedov/">Максим Нефьодов</a></h5>
      <div class="team-listing_position color-link"><span class="team-meta_item position">Заступник Міністра економічного розвитку і торгівлі України</span></div>
      <div class="team-listing_excerpt small"><div class="cherry-team_excerpt"></div></div>
      <div class="team-listing_socials colored"></div>
    </div>
  </div>
</div></div>
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
    
    @include('partials/footer')
    
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