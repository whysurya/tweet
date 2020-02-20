@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
        <!-- kiri -->
        </div>
        <div class="col-md-6">
            <div class="card border-0 ">
                    <div class="d-flex card-header border-0">
                        <div class="mr-auto">
                            <h6 class="text-muted">Tweet</h6>
                        </div>
                        <div>                    
                            <svg height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h48v48h-48z" fill="none"/><path d="M24 16c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 4c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 12c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            div.
                                <div class="d-flex">
                                    <img src="{{asset('img/kocheng.jpg')}}" width="50" height="50" class="rounded-circle" alt="">
                                    <h6 class="text-dark">Why
                                        <h6 class="text-muted">@ayy</h6>
                                    </h6>
                                    <div>
                                        <p class="text-primary">@dev,
                                            <p class="text-muted">
                                                Lorem ipsum sit amet,consecteture adipiscing elit, se do .
                                            </p>
                                        </p>
                                    </div>
                                </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
