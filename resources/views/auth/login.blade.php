@extends('landings.layouts.app')

@section('content')
        <div class="kotakputih">
            <div class="isikotakputih">  
                <h1><i class="fa fa-user"></i> Login</h1>
                <hr>
                <div class="container">
                
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>
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
                                            <input name="password" class="form-control" placeholder="******" type="password">
                                        </div> <!-- input-group.// -->
                                    </div> <!-- form-group// -->
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"> Login  </button>
                                    </div> <!-- form-group// -->
                                </form>
                            </div>
                        </div> 
                    </div>
                </div>
        </div>
    </div>
@endsection
