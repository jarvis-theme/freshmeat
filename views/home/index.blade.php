<section class="home-feature1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <img src="{{ imgString(about_us()->isi) }}" align="left" />
                <div class="content-feature">
                    <h1><span class="horizontal-line">{{ about_us()->judul }}</span></h1>
                    <p>{{ short_description(about_us()->isi, 360) }}</p>
                    <br>
                    <a href="{{ url('halaman/'.about_us()->slug) }}" class="btn-feature">More Info</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<section class="home-feature2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <img src="{{ imgString(about_us()->isi) }}" align="right" />
                <div class="content-feature">
                    <h1><span class="horizontal-line">Services</span></h1>
                    <p>{{ short_description('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 360) }}</p>
                    <br>
                    <a href="{{ url('produk') }}" class="btn-feature">More Info</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<section class="our-testimoni">
    <div class="container">
        <div class="center">
            <h1><span class="redline">Testimonial</span></h1>
        </div>
        <div id="brand-carousel">
            <div id="brand-slide" class="owl-carousel owl-theme">
                @foreach(list_testimonial() as $testimoni)
                <div id="testi">
                    <p class="quote"><i class="fa fa-quote-left"></i> <i class="fa fa-quote-right"></i></p>
                    <p class="comment">{{ $testimoni->isi }}</p>
                    <p class="testimoni-user">&#8259;{{ $testimoni->nama }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
