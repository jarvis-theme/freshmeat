<div class="container">
    <div class="inner-column row">
        <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
            @if(vertical_banner()->count() > 0)
            <div id="advertising" class="block">
                @foreach(vertical_banner() as $banner)
                <div class="img-block">
                    <a href="{{url($banner->url)}}">
                        {{HTML::image(banner_image_url($banner->gambar),'Info Promo',array('class'=>'img-responsive'))}} 
                    </a>
                </div>
                @endforeach
            </div>
            @endif
        </div>
        <div id="center_column" class="col-lg-9 col-xs-12 col-sm-8">
            <div class="contact-us">
                <h1 class="title">Order Confirmation</h1>
                <div class="contact-desc">
                    {{Form::open(array('url'=>'konfirmasiorder','method'=>'post'))}}
                        <p class="form-group">
                            <input class="form-control" placeholder="Order Code" type="text" name="kodeorder" required>
                        </p>
                        <button class="mainbtn">Submit</button>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>