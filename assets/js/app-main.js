var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
    baseUrl: '/',
    waitSeconds : 60,
    urlArgs: "v=001",
    shim: {
        'jq_ui' : {
            deps : ['jquery'],
        },
        'bootstrap' : {
            deps : ['jquery'],
        },
        'flexslider' : {
            deps : ['jquery'],
        },
        'fancybox' : {
            deps : ['jquery'],
        },
        "noty" : {
            deps : ['jquery'],
        },
    },

    paths: {
        // LIBRARY
        jquery          : '//cdn2.jarvis-store.com/assets/freshmeat/assets/js/lib/jquery.min',
        bootstrap       : '//cdn2.jarvis-store.com/assets/freshmeat/assets/js/lib/bootstrap.min',
        fancybox        : '//cdn2.jarvis-store.com/assets/freshmeat/assets/js/lib/jquery.fancybox.pack',
        flexslider      : '//cdn2.jarvis-store.com/assets/freshmeat/assets/js/lib/jquery.flexslider-min',
        modernizr       : '//cdn2.jarvis-store.com/assets/freshmeat/assets/js/lib/modernizr.custom.28468',
        owl_carousel    : '//cdn2.jarvis-store.com/assets/freshmeat/assets/js/lib/owl.carousel.min',

        // MAIN LIBRARY
        router          : '//cdn2.jarvis-store.com/js/router',
        jq_ui           : '//cdn2.jarvis-store.com/js/jquery-ui',
        noty            : '//cdn2.jarvis-store.com/js/jquery.noty',
        cart            : '//cdn2.jarvis-store.com/js/shop_cart',

        // CONTROLLER
        home            : dirTema+'/assets/js/pages/home',
        main            : dirTema+'/assets/js/pages/default',
        produk          : dirTema+'/assets/js/pages/produk',
    }
});
require([
    'router',
    'main',
    'cart'
], function(router,main,cart)
{
    // HOME
    router.define('/','home@run');
    router.define('home', 'home@run');

    // PRODUK
    router.define('produk/*', 'produk@run');
    
    router.run();
    main.run();
    cart.run();
});