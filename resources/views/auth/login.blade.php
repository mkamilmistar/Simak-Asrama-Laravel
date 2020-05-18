@extends('landings.layouts.app')

@section('content')
    <div class="row">
        <div class="card col-12" style="margin-top: -10%;">
            <div class="card-body">
                <h1><i class="fa fa-user"></i> Login</h1>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-12 col-md-8">
                        <div class="card">
                            <div class="card-header text-center"
                                 style="background-color: #FFDE59">{{ __('Login') }}</div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            </div>
                                            <input name="email" class="form-control" placeholder="email" type="email">
                                        </div> <!-- input-group.// -->
                                    </div> <!-- form-group// -->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                            </div>
                                            <input name="password" class="form-control" placeholder="******"
                                                   type="password">
                                        </div> <!-- input-group.// -->
                                    </div> <!-- form-group// -->
                                    <div class="form-group">
                                        <button type="submit" class="btn text-white" style="background-color: #08B4DA">
                                            Login
                                        </button>
                                    </div> <!-- form-group// -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
