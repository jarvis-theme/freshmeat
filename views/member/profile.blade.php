<div class="top-list container">
    <h2 class="title"><i class="fa fa-user"></i> &nbsp;Update Profile</h2>
    <div class="clr"></div>
    <hr>
</div>

<div class="container">
    <div class="inner-column row">
        <div id="left_sidebar" class="col-md-3">
            <div id="advertising" class="block">
                <div class="title"><h2>My Account</h2></div>
                <ul class="nav">
                    <li><a href="{{ url('member') }}">Order History</a></li>
                    <li><a href="{{ url('member/profile/edit') }}">Update Profile</a></li>
                </ul>
            </div>
        </div>
        <div id="center_column" class="col-md-9">
            {{ Form::open(array('url'=>'member/update','method'=>'put','class'=>'form-horizontal')) }}
                <div class="form-group">
                    <label class="col-md-2 control-label">Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="nama" value="{{ $user->nama }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Email</label>
                    <div class="col-md-4">
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Telephone</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="telp" value="{{ $user->telp }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Country</label>
                    <div class="col-md-4">
                        {{ Form::select('negara', array('' => '-- Choose Country --') + $negara, ($user ? $user->negara :(Input::old("negara")? Input::old("negara") :"")), array('required'=>'', 'id'=>'negara', 'class'=>'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Province</label>
                    <div class="col-md-4">
                        {{ Form::select('provinsi', array('' => '-- Choose Province --') + $provinsi, ($user ? $user->provinsi :(Input::old("provinsi")? Input::old("provinsi") :"")),array('required'=>'','id'=>'provinsi', 'class'=>'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">City</label>
                    <div class="col-md-4">
                        {{ Form::select('kota', array('' => '-- Choose City --') + $kota, ($user ? $user->kota :(Input::old("kota")? Input::old("kota") :"")), array('required'=>'','id'=>'kota', 'class'=>'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Address</label>
                    <div class="col-md-4">
                       <textarea class="form-control" rows="3" name="alamat" required>{{ $user->alamat }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Postal Code</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="kodepos" value="{{ $user->kodepos }}" required>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-md-2 control-label">Old Password</label>
                    <div class="col-md-4">
                        <input type="password" class="form-control" name="oldpassword">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">New Password</label>
                    <div class="col-md-4">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Confirm New Password</label>
                    <div class="col-md-4">
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>
                <hr />
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <button type="submit" class="mainbtn">Save</button>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>