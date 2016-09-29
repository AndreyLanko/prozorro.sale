<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, maximum-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}" />
    <title>{{env('HTML_TITLE', '')}}Prozorro</title>
    
    
    <!--[if lt IE 9]>
        <script src="/assets/js/legacy/html5shiv.min.js"></script>
        <script src="/assets/js/legacy/respond.min.js"></script>
    <![endif]-->
    <link rel='shortcut icon' type='image/x-icon' href='/assets/images/favicon.ico' />
    
    <link href='http://fonts.googleapis.com' rel='dns-prefetch'>
    <link href='/assets/sales/wp-content/themes/monstroid/assets/css/first-ver=1.1.3.css' id='monstroid-first-screen-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/plugins/cherry-blog-layouts/public/assets/css/style-ver=1.0.5.css'id='cherry-blog-style-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/plugins/cherry-portfolio/public/assets/css/style-ver=1.0.4.5.css'id='cherry-portfolio-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/plugins/cherry-simple-slider/public/assets/css/slider-pro-ver=1.0.4.css'id='slider-pro-style-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/plugins/cherry-simple-slider/public/assets/css/style-ver=1.0.4.css'id='cherry-slider-style-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/plugins/cherry-social/public/assets/fonts/flaticon.min-ver=1.0.4.css'id='cherry-social-flaticon-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/plugins/cherry-social/public/assets/css/public-ver=1.0.4.css'id='cherry-social-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/plugins/cherry-testimonials/public/assets/css/style-ver=1.1.2.css'id='cherry-testimonials-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/plugins/contact-form-7/includes/css/styles-ver=4.4.2.css' id='contact-form-7-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/plugins/woocommerce/assets/css/woocommerce-layout-ver=2.6.2.css'id='woocommerce-layout-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen-ver=2.6.2.css'id='woocommerce-smallscreen-css' media='only screen and (max-width: 768px)'rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/plugins/woocommerce/assets/css/woocommerce-ver=2.6.2.css' id='woocommerce-general-css' media='all' rel='stylesheet' type='text/css'>
    
    <link href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css?ver=4.4.0'id='font-awesome-css' media='all' rel='stylesheet' type='text/css'>
    
    <link href='/assets/sales/wp-content/plugins/cherry-mega-menu/public/assets/css/style-ver=1.0.4.css'id='' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/plugins/cherry-shortcodes/assets/css/swiper-ver=1.0.7.5.css'id='swiper-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/themes/cherryframework4/lib/assets/css/magnific-popup-ver=1.0.0.css'id='magnific-popup-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/plugins/cherry-shortcodes/assets/css/shortcodes-ver=1.0.7.5.css'id='cherry-shortcodes-all-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/plugins/cherry-charts/assets/public/css/cherry-charts-ver=1.1.0.css'id='cherry-charts-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/plugins/yith-woocommerce-compare/assets/css/colorbox-ver=4.6.1.css'id='jquery-colorbox-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/plugins/yith-woocommerce-quick-view/assets/css/yith-quick-view-ver=4.6.1.css'id='yith-quick-view-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox-ver=1.2.0.css'id='jquery-selectBox-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/plugins/yith-woocommerce-wishlist/assets/css/style-ver=2.0.16.css'id='yith-wcwl-main-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/themes/monstroid/assets/css/grid-base-ver=1.1.3.css'id='monstroid-grid-base-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/themes/monstroid/assets/css/grid-responsive-ver=1.1.3.css' id='monstroid-grid-responsive-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/themes/cherryframework4/lib/assets/css/slick-ver=1.5.0.css' id='slick-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/themes/monstroid/assets/css/main-ver=1.1.3.css' id='monstroid-main-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/themes/monstroid/assets/css/main-responsive-ver=1.1.3.css' id='monstroid-main-responsive-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/themes/cherryframework4/lib/assets/css/add-ons-ver=4.0.5.4.css'id='cherryframework4-add-ons-css' media='all' rel='stylesheet' type='text/css'>
    <link href='/assets/sales/wp-content/themes/monstroid/style-ver=1.1.3.css' id='monstroid-style-css' media='all' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="/assets/sales/fonts.css">
    <link rel="stylesheet" href="/assets/sales/sales.css">
    
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="stylesheet" href="/assets/css/site.css">
        
    @yield('head')
</head>
<body  class="home page page-id-357 page-template-default woocommerce-product-lightbox-enabled no-padding cherry-responsive cherry-no-sidebar"dir="ltr">
    @if (env('GA_CODE'))
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
            ga('create', '{{env('GA_CODE')}}', 'auto');
            ga('send', 'pageview');
        </script>
    @endif

    @if (env('GTA_CODE'))
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id={{env('GTA_CODE')}}" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','{{env('GTA_CODE')}}');</script>
    @endif

    <div class="wrapper-main">
        
        @yield('html_header')
		
        @yield('content')

        @include('forms/feedback')
    </div>

    
    @yield('html_footer')
    
    <script src="/assets/js/app.js"></script>
    @if (env('YAMETRIC_CODE'))
        <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter{{env('YAMETRIC_CODE')}} = new Ya.Metrika({ id:{{env('YAMETRIC_CODE')}}, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/{{env('YAMETRIC_CODE')}}" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    @endif
    
    
    
   <!--  ----for sale--- -->
     
    <script src='/assets/sales/wp-includes/js/jquery/jquery.js?ver=1.12.4' type='text/javascript'></script>
    <script src='/assets/sales/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1' type='text/javascript'></script>

    <script type='text/javascript'>
        /* <![CDATA[ */
        var wp_load_style = {"0":"monstroid-first-screen.css","1":"cherry-blog-style.css","2":"cherry-portfolio.css","3":"slider-pro-style.css","4":"cherry-slider-style.css","5":"cherry-social.css","6":"cherry-testimonials.css","7":"contact-form-7.css","8":"woocommerce-layout.css","9":"woocommerce-smallscreen.css","10":"woocommerce-general.css","11":"font-awesome.css","12":"swiper.css","13":"magnific-popup.css","14":"cherry-shortcodes-all.css","15":"cherry-charts.css","16":"jquery-colorbox.css","17":"yith-quick-view.css","19":"jquery-selectBox.css","20":"yith-wcwl-main.css","22":"monstroid-grid-base.css","23":"monstroid-grid-responsive.css","24":"slick.css","26":"monstroid-main.css","27":"monstroid-main-responsive.css","28":"cherryframework4-add-ons.css","29":"monstroid-style.css","30":"cherry-google-fonts.css","31":"cherry-mega-menu.css","32":"cherry-grid.css","33":"cherry-rank.css","34":"cherry-services.css","35":"cherry-team.css","36":"mpce-theme.css","39":"monstroid-mpce.css"};
        var wp_load_script = {"0":"cherry-api.js","1":"comment-reply.js","2":"magnific-popup.js","3":"cherry-script.js","4":"contact-form-7.js","5":"wc-add-to-cart.js","6":"woocommerce.js","7":"wc-cart-fragments.js","8":"yith-woocompare-main.js","9":"jquery-colorbox.js","10":"yith-wcqv-frontend.js","13":"jquery-selectBox.js","14":"jquery-yith-wcwl.js","15":"cherry-stick-up.js","16":"cherry-mega-menu.js","17":"equalheights.js","18":"monstroid-script.js"};
        var cherry_ajax = "017a971728";
        /* ]]> */
    </script> 
    <script src='/assets/sales/wp-content/themes/cherryframework4/lib/assets/js/cherry-api.min.js?ver=4.0.5.4'type='text/javascript'></script> 
    <script src='/assets/sales/wp-includes/js/comment-reply.min.js?ver=4.6.1' type='text/javascript'></script> 
    <script src='/assets/sales/wp-content/themes/cherryframework4/lib/assets/js/jquery.magnific-popup.min.js?ver=1.0.0'type='text/javascript'></script> 
    <script type='text/javascript'>
        /* <![CDATA[ */
        var cherry_data = {"use_lightbox":"1"};
        var sticky_data = {"selector":"#static-area-header-top","args":{"correctionSelector":"#wpadminbar","listenSelector":".listenSelector","pseudo":true,"active":true}};
        /* ]]> */
    </script> 
    <script src='/assets/sales/wp-content/themes/cherryframework4/lib/assets/js/script.min.js?ver=4.0.5.4'type='text/javascript'></script> 
    <script src='/assets/sales/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'type='text/javascript'></script> 
    <script type='text/javascript'>
        /* <![CDATA[ */
        var _wpcf7 = {"loaderUrl":"http:\/\/www.prozorro.sale\/wp-content\/themes\/monstroid\/assets\/images\/loading-spin.svg","recaptchaEmpty":"Please verify that you are not a robot.","sending":"Sending ..."};
        /* ]]> */
    </script> 
    <script src='/assets/sales/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.4.2' type='text/javascript'></script> 
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View Cart","cart_url":"http:\/\/www.prozorro.sale\/cart__trashed\/","is_cart":"","cart_redirect_after_add":"no"};
        /* ]]> */
    </script> 
    <script src='/assets/sales/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=2.6.2'type='text/javascript'></script> 
    <script src='/assets/sales/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'type='text/javascript'></script> 
    <script type='text/javascript'>
        /* <![CDATA[ */
        var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
        /* ]]> */
    </script> 
    <script src='/assets/sales/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=2.6.2'type='text/javascript'></script> 
    <script src='/assets/sales/wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min.js?ver=1.4.1'type='text/javascript'></script> 
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
        /* ]]> */
    </script> 
    <script src='/assets/sales/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=2.6.2'type='text/javascript'></script> 
    <script type='text/javascript'>
        /* <![CDATA[ */
        var yith_woocompare = {"ajaxurl":"\/?wc-ajax=%%endpoint%%","actionadd":"yith-woocompare-add-product","actionremove":"yith-woocompare-remove-product","actionview":"yith-woocompare-view-table","added_label":"Added","table_title":"Product Comparison","auto_open":"no","loader":"http:\/\/www.prozorro.sale\/wp-content\/plugins\/yith-woocommerce-compare\/assets\/images\/loader.gif","button_text":"Compare"};
        /* ]]> */
    </script> 
    <script src='/assets/sales/wp-content/plugins/yith-woocommerce-compare/assets/js/woocompare.js?ver=2.0.9'type='text/javascript'></script> 
    <script src='/assets/sales/wp-content/plugins/yith-woocommerce-compare/assets/js/jquery.colorbox-min.js?ver=1.4.21'type='text/javascript'></script> 
    <script type='text/javascript'>
        /* <![CDATA[ */
        var yith_qv = {"ajaxurl":"http:\/\/www.prozorro.sale\/wp-admin\/admin-ajax.php","is2_2":"","loader":"http:\/\/www.prozorro.sale\/wp-content\/plugins\/yith-woocommerce-quick-view\/assets\/image\/qv-loader.gif"};
        /* ]]> */
    </script> 
    <script src='/assets/sales/wp-content/plugins/yith-woocommerce-quick-view/assets/js/frontend.min.js?ver=1.1.2'type='text/javascript'></script> 
    <script src='/assets/sales/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js?ver=1.2.0'type='text/javascript'></script> 
    <script type='text/javascript'>
        /* <![CDATA[ */
        var yith_wcwl_l10n = {"ajax_url":"\/wp-admin\/admin-ajax.php","redirect_to_cart":"no","multi_wishlist":"","hide_add_button":"1","is_user_logged_in":"","ajax_loader_url":"http:\/\/www.prozorro.sale\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader.gif","remove_from_wishlist_after_add_to_cart":"yes","labels":{"cookie_disabled":"We are sorry, but this feature is available only if cookies are enabled on your browser.","added_to_cart_message":"<div class=\"woocommerce-message\">Product correctly added to cart<\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","move_to_another_wishlist_action":"move_to_another_wishlsit","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem"}};
        /* ]]> */
    </script> 
    <script src='/assets/sales/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.js?ver=2.0.16'type='text/javascript'></script> 
    <script src='/assets/sales/wp-content/themes/cherryframework4/lib/assets/js/jquery.cherry.stickup.min.js?ver=1.0.0'type='text/javascript'></script> 
    <script src='/assets/sales/wp-includes/js/hoverIntent.min.js?ver=1.8.1' type='text/javascript'></script> 
    <script type='text/javascript'>
        /* <![CDATA[ */
        var cherry_mega_menu_data = {"duration":"300"};
        /* ]]> */
    </script> 
    <script src='/assets/sales/wp-content/plugins/cherry-mega-menu/public/assets/js/min/script.min.js?ver=1.0.4'type='text/javascript'></script> 
    <script src='/assets/sales/wp-content/themes/monstroid/assets/js/jquery.equalheights.js?ver=1.1.3'type='text/javascript'></script> 
    <script src='/assets/sales/wp-content/themes/monstroid/assets/js/min/theme-script.min.js?ver=1.1.3'type='text/javascript'></script> 
    <script src='/assets/sales/wp-includes/js/wp-embed.min.js?ver=4.6.1' type='text/javascript'></script> 
    <script src='/assets/sales/wp-content/plugins/cherry-shortcodes/assets/js/shotcodes/init.min.js?ver=1.0.7.5'type='text/javascript'></script> 
    <script src='/assets/sales/wp-content/themes/monstroid/assets/js/min/tmpl-posts-scripts.min.js?ver=1.1.3'type='text/javascript'></script> 
    <script src='/assets/sales/wp-content/themes/monstroid/assets/js/min/tmpl-banner-scripts.min.js?ver=1.1.3'type='text/javascript'></script> 
    <script src='/assets/sales/wp-content/themes/monstroid/assets/js/min/tmpl-team-scripts.min.js?ver=1.1.3'type='text/javascript'></script> 
    <script type='text/javascript'>
        /* <![CDATA[ */
        var anchor_scroll_speed = ["300"];
        var anchor_scroll_speed = ["300"];
        var anchor_scroll_speed = ["300"];
        var anchor_scroll_speed = ["300"];
        var anchor_scroll_speed = ["300"];
        /* ]]> */
    </script> 
    <script src='/assets/sales/wp-content/plugins/cherry-shortcodes/assets/js/shotcodes/page-anchor.min.js?ver=1.0.7.5'type='text/javascript'></script> 
    <script src='/assets/sales/wp-content/plugins/cherry-shortcodes/assets/js/shotcodes/device.min.js?ver=1.0.7.5'type='text/javascript'></script> 
    <script src='/assets/sales/wp-content/plugins/cherry-shortcodes/assets/js/shotcodes/parallax.min.js?ver=1.0.7.5'type='text/javascript'></script> 
    <script src='/assets/sales/wp-includes/js/underscore.min.js?ver=1.8.3' type='text/javascript'></script> 
        <script type='text/javascript'>
        /* <![CDATA[ */
        var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
        /* ]]> */
    </script> 
    <script src='/assets/sales/wp-includes/js/wp-util.min.js?ver=4.6.1' type='text/javascript'></script> 
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_add_to_cart_variation_params = {"i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_make_a_selection_text":"Please select some product options before adding this product to your cart.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."};
        /* ]]> */
    </script> 
    <script src='/assets/sales/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=2.6.2'type='text/javascript'></script><!-- Localized --> 
</body>
</html>