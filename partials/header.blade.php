<div class="section" id="header">
    <header>
        <div id="top-head">
            <div class="container nopadding">
                <div class="top-links fr">
                    <ul>
                    @if( !is_login() )
                        <li><a href="{{ url('member') }}"><i class="fa fa-user-circle-o"></i> Log in</a></li>
                    @else
                        <li><a href="{{ url('member') }}"><i class="fa fa-user-circle-o"></i> {{ shortName(user()->nama, 50) }}</a></li>
                        <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
                    @endif
                        <li><a href="{{ url('checkout') }}"><i class="fa fa-lock"></i> Checkout</a></li>
                        <li class="shopping-cart" id="shoppingcartplace">
                            <a href="{{ url('checkout') }}">{{ shopping_cart() }}</a>
                        </li>
                    </ul>
                </div>
                <div class="clr"></div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div id="logo" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <a href="{{ url('home') }}">
                        {{ HTML::image(logo_image_url(), Theme::place('title')) }} 
                    </a>
                </div>
                <nav id="menu" class="navbar navbar-default col-xs-12 col-sm-12 col-md-8 col-lg-8" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand mobile-only" href="#">MENU</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            @foreach(main_menu()->link as $key=>$link)
                            <li><a href="{{ menu_url($link) }}">{{ $link->nama }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
                <div class="clr"></div>
            </div>
        </div>
    </header>
</div>