<div id="breadcrumb">
    <div class="container">
        Sign Up
    </div>
</div>
<div class="container" id="main-layout">
    <div class="inner-column row">
        <div class="col-lg-3 col-xs-12 col-sm-4 pull-right">
            <div id="advertising" class="block">
                @foreach(vertical_banner() as $banner)
                <div class="img-block">
                    <a href="{{url($banner->url)}}">
                        {{ HTML::image(banner_image_url($banner->gambar),'Info Promo',array('class'=>'img-responsive')) }}
                    </a>
                </div>
                @endforeach
            </div>
            <br>
        </div>
        <div class="col-lg-7 col-xs-12 col-sm-8">
            {{ Form::open(array('url'=>'member','method'=>'post','class'=>'form-horizontal')) }}
                <br>
                <div class="form-group">
                    <label class="col-lg-2">Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="nama" value="{{Input::old('nama')}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2">Email</label>
                    <div class="col-lg-10">
                        <input type="email" class="form-control" name="email" value='{{Input::old("email")}}' required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2">Password</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2">Confirm Password</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2">Country</label>
                    <div class="col-lg-10">
                        {{ Form::select('negara', array('' => '-- Choose Country --') + $negara, Input::old('negara'), array('required', "id"=>"negara", "data-rel"=>"chosen", "class"=>"form-control")) }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2">Province</label>
                    <div class="col-lg-10">
                        {{ Form::select('provinsi', array('' => '-- Choose Province --') + $provinsi, Input::old("provinsi"), array('required', "id"=>"provinsi", "data-rel"=>"chosen", "class"=>"form-control")) }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="dropdown" class="col-lg-2">City</label>
                    <div class="col-lg-10">
                        {{ Form::select('kota', array('' => '-- Choose City --') + $kota, Input::old("kota"), array('required', "id"=>"kota", "data-rel"=>"chosen", "class"=>"form-control")) }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2">Address</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" rows="3" name="alamat" required>{{ Input::old("alamat") }}</textarea>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-lg-2">Postal Code</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="kodepos" value="{{ Input::old('kodepos') }}" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2">Telephone</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="telp" value="{{ Input::old('telp') }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputpho1" class="col-lg-2">Captcha</label>
                    <div class="col-lg-10 form-inline">
                        {{ HTML::image(Captcha::img(), 'Captcha image') }}
                        {{ Form::text('captcha','',array('class'=>'form-control','placeholder'=>'Enter Code')) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <div class="checkbox">
                            <label>
                                <input name="readme" value="1" type="checkbox" checked> I agree to the <a href="{{url('service')}}" target="_blank" ><b>Terms of Use and Privacy Statement</b></a>.
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="mainbtn">Register</button>
                        <button type="reset" class="greybtn">Reset</button>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>