<div id="breadcrumb">
    <div class="container">
        <div class="col-xs-12 col-sm-12">Forget Password</div>
    </div>
</div><br>
<div class="container">
    <div class="inner-column row">
        <div id="center_column" class="col-lg-9 col-xs-12 col-sm-8">
            {{ Form::open(array('url' => 'member/recovery/'.$id.'/'.$code, 'class' => 'form-horizontal')) }}
                <div class="form-group">
                    <label class="col-sm-2">New Password</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Confirma New Password</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            {{ Form::close() }}
            <br>
        </div>
        <div class="col-lg-3 col-xs-12 col-sm-4 pull-left">
            @if(vertical_banner()->count() > 0)
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
            @endif
        </div>
    </div>
</div>