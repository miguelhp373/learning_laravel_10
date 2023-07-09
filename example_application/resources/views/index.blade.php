@extends('master')
@section('title','Home')


@section('content')

<style>
    .image-cover-home{
        width: 100%;
        height: 100vh;
    }

    .home-default-center{
        position: relative;
        text-align: center;
        color: white;
    }

    .text-caption-image{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .button-on-bottom{
        position: absolute;
        top: 80%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .button-home-signin, .button-home-register{
        border: none !important;
        width: 150px !important;

        border-radius: 30px !important;
        transition: 0.2s !important;
    }

    .row-buttons{
        display: flex;
        flex-direction: row;
        justify-content: center;
    }
    .container-button{
        padding: 15px;
    }
</style>

<div class="home-default-center">
    <div class="image-cover">
        <img src="{{ asset('assets/home/showroom_image2.jpg') }}" class="image-cover-home"  style="object-fit: cover" alt="...">
    </div>
    <h1 class="text-caption-image"> Welcome to MSoftCompany & IT</h1>
    <div class="button-on-bottom">
        <div class="row-buttons">
            <div class="container-button">
                <a href="{{ route('users.login') }}" class="btn btn-primary button-home-signin">Login</a>
            </div>
            <div class="container-button">
                <a href="{{ route('users.register') }}" class="btn btn-primary button-home-register">Register</a>
            </div>
        </div>
    </div>
</div>


@endsection
