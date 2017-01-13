    <!-- Default css-->
    {{ favicon() }}
    <link rel="stylesheet" href="//cdn2.jarvis-store.com/assets/freshmeat/assets/css/reset.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @if($tema->isiCss=='')  
    {{ generate_theme_css('freshmeat/assets/css/style.css') }} 
    @else   
    {{ generate_theme_css('freshmeat/assets/css/editstyle.css') }} 
    @endif  
    <link rel="stylesheet" href="//cdn2.jarvis-store.com/assets/freshmeat/assets/css/flexslider.css">
    <link rel="stylesheet" href="//cdn2.jarvis-store.com/assets/freshmeat/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="//cdn2.jarvis-store.com/assets/freshmeat/assets/css/owl.theme.css">
    <link rel="stylesheet" href="//cdn2.jarvis-store.com/assets/freshmeat/assets/css/jquery.fancybox.css">
    <!-- Other -->