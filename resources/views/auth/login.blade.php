@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form  action="" method="post">
                       @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="" id="" class="form-control bg-light" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="" id="" class="form-control bg-light" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('forget Password') }}
                                    </a>
                                @endif
                                <br>
                                <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-info" style="">
                                    {{ __('Login') }} 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-header border-0">
                    <img src="http://localhost/tweet/public/img/twitter.png" class="" height="70" style="display: block; margin: auto;" >
                    <br>
                        <h5 class="text-secondary text-center">See What's Happening in <br>The world right Now</h5>
                        <br>
                        <a href="http://twitter.com/account/accses?/flow=signup">
                            <h6 class="font-weight-bold">Join twitter Today</h6>
                        </a>
                        @if (Route::has('register'))
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                            <div class="row justify-content-center">
                                <button class="btn btn-info col-md-12">
                                    {{ __('Sign Up') }}
                                </button>
                            </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
