<div id="breadcrumb">
    <div class="container">
        <div class="col-xs-12 col-sm-12">Member Area</div>
    </div>
</div><br>
<div class="container">
    <div class="inner-column row">
        <div id="center_column" class="col-lg-9 col-xs-12 col-sm-8">
            <h2>Log In</h2>
            <br>
            <form class="form-horizontal" action="{{ url('member/login') }}" method="post">
                <div class="form-group">
                    <label class="col-sm-2">Email</label>
                    <div class="col-sm-4">
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Password</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <small>
                            <a href="{{ url('member/forget-password') }}">Forget Password?</a>
                        </small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="pull-left col-sm-5 col-md-4">
                        <button type="submit" class="mainbtn">Log in</button>
                    </div>
                </div>
            </form>
            <div class="col-xs-12 col-sm-6 register-user">
                <hr><br>
                <p class="mb5">Don't have an account?</p>
                <a href="{{ url('member/create') }}" class="link">Create an account</a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-12 col-sm-4 pull-left">
            <div id="advertising" class="block">
                @foreach(vertical_banner() as $banner)
                <div class="img-block">
                    <a href="{{ url($banner->url) }}">
                        {{ HTML::image(banner_image_url($banner->gambar),'Info Promo',array('class'=>'img-responsive')) }}
                    </a>
                </div>
                @endforeach
            </div>
            <br>
        </div>
    </div>
</div>