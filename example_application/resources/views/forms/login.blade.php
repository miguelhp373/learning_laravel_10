@extends('master')
@section('title','Login')

@section('content')

<style>
    .container-login-form,.container-layout-flex-row{
        height: 95vh;
        background-color: #F3F3F3F3;
    }
    .container-layout-flex-row{
        display: flex;
        flex-direction: row;
        justify-content: center;
    }
    .container-layout-flex-column{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .card-form{
        width: 400px;
        height: 60vh;
        padding: 20px;
        background-color: #FFFFFF;
        border-radius: 30px;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    }
    /* .button-submit{
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
    } */
    .text-link-to-register{
        text-align:center;
        padding:10px;
    }
</style>

<div class="container-fluid container-login-form">
    @if ($message_error = Session::get('403'))
        <div class="alert alert-warning p-3" role="alert">
            {{$message_error}}
        </div>
    @endif
    <div class="container-layout-flex-row">
        <div class="container-layout-flex-column">
            <div class="card-form">

                <h2 class="text-styles">Login</h2>
                <form action="{{ route('users.login') }}" method="post">
                    @csrf
                    <br>
                    <div class="mb-3">
                        <label for="formlogincontrolinputemail" class="form-label text-styles">Email address</label>
                        <input type="email" class="form-control" name="email" id="formlogincontrolinputemail" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                          <label for="formlogincontrolinputpassword" class="form-label text-styles">Password</label>
                          <input type="password" class="form-control" name="password" id="formlogincontrolinputpassword" placeholder="Type your password">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary form-control">Submit</button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <span class="text-link-to-register">Don't have an account <a href="{{ route('forms.register') }}">Sign up here!</a></span>
        </div>
    </div>
</div>

@endsection
