@extends('layouts.auth')

@section('content')
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">
        <form role="form" action="{{ url('/login') }}" method="post">
            {{csrf_field()}}
            <h1>登录</h1>
            <div>
            <input type="text" class="form-control" placeholder="email" name="email" required="" />
            </div>
            <div>
            <input type="password" class="form-control" placeholder="password" name="password" required="" />
            <div class="row">
                <div class="col-md-8">
                <input type="text" class = "form-control" placeholder="captcha" name="captcha" required="" />
                </div>
                <div class="col-md-4">
                <image src="{{captcha_src()}}" style="cursor:pointer;" onclick="this.src='{{captcha_src()}}'+Math.random()"/>
                </div>
            </div>
            @if ($errors->has('captcha'))
                <div class="col-md-12">                
                <p class='text-danger text-left'><strong>{{$errors->first('captcha')}}</strong></p>
                </div>
            @endif
            <div>
            <button class="btn btn-primary submit" type="submit">Log in</button>
            <a class="reset_pass" href="{{ url('/password/reset') }}">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
            <p class="change_link">New to site?
                <a href="{{url('/register')}}" class="to_register"> Create Account </a>
            </p>

            <div class="clearfix"></div>
            <br />

            <div>
                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
            </div>
            </div>
        </form>
        </section>
    </div>

    <div id="register" class="animate form registration_form">
        <section class="login_content">
        <form>
            <h1>Create Account</h1>
            <div>
            <input type="text" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
            <input type="email" class="form-control" placeholder="Email" required="" />
            </div>
            <div>
            <input type="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
            <a class="btn btn-default submit" href="index.html">Submit</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
            <p class="change_link">Already a member ?
                <a href="#signin" class="to_register"> Log in </a>
            </p>

            <div class="clearfix"></div>
            <br />

            <div>
                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
            </div>
            </div>
        </form>
        </section>
    </div>
    </div>
</div>
@endsection