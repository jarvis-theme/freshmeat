<div id="breadcrumb">
    <div class="container">
        <div class="col-xs-12 col-sm-12">Forget Password</div>
    </div>
</div>
<br>
<div class="container">
    <div class="inner-column row">
        <div class="col-lg-6 col-xs-12 col-sm-5">
            <h1>Forget Password</h1><hr><br>
            <form class="form-horizontal" action="{{ url('member/forgetpassword') }}" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email" name="recoveryEmail" required>
                    <span class="input-group-btn">
                        <button class="btn btn-danger" type="submit">Reset Password</button>
                    </span>
                </div>
            </form>
            <br><br>
        </div>
        <div class="col-lg-5 col-md-offset-1">
            <h2>New Member</h2><hr><br>
            <p>Don't have an account yet?</p>
            <a href="{{ url('member/create') }}" class="mainbtn">Register</a>
        </div>
    </div>
</div>