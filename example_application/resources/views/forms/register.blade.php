@extends('master')
@section('title','Register')

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
        height: 65vh;
        padding: 20px;
        background-color: #FFFFFF;
        border-radius: 30px;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    }

    .text-styles{
        /* color: #FFFFFF; */
    }
    .button-submit{
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
    }
</style>

<div class="container-fluid container-login-form">
    <div class="container-layout-flex-row">
        <div class="container-layout-flex-column">
            <div class="card-form">
                <h2 class="text-styles">Register</h2>
                <form action="{{ route('users.store')}}" method="post">
                    @csrf
                    <br>
                    <div class="mb-3">
                      <label for="formregistercontrolinputname" class="form-label text-styles">Name</label>
                      <input type="text" class="form-control" name="name" id="formregistercontrolinputname" placeholder="albert smith">
                    </div>
                    <div class="mb-3">
                        <label for="formlogincontrolinputemail" class="form-label text-styles">Email address</label>
                        <input type="email" class="form-control" name="email" id="formregistercontrolinputemail" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                          <label for="formlogincontrolinputpassword" class="form-label text-styles">Password</label>
                          <input type="password" class="form-control" name="password" id="formregistercontrolinputpassword" placeholder="Type your password">
                        </div>
                    </div>
                    {{-- <div class="mb-3">
                        <div class="mb-3">
                          <label for="formregistercontrolinputpasswordconfirm" class="form-label text-styles">Confirm your Password</label>
                          <input type="password" class="form-control" name="formregistercontrolinputpasswordconfirm" id="formregistercontrolinputpasswordconfirm" placeholder="Type your password again">
                        </div>
                    </div> --}}
                    <div class="conteiner-fluid button-submit">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
