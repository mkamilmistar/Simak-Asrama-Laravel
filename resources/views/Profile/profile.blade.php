@extends('layouts.app')

@section('content')
    <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Biodata Siswa</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="/catatan-yaumiyah">Data Siswa</a></li>
                                        <li class="active">Data Siswa</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>    
    @include('layouts.allert')
    <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Siswa</strong>
                                <!-- Button trigger modal -->
                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Tambah Data Siswa
                                </button> -->
                            </div>
                            <div class="card-body">
                                <!-- Data Siswa -->
                                
                                <br>
                                <!-- DATA AMALAN -->
                                <div class="container">
    <!-- Row -->
                                <!-- Section header -->
                                <div class="page-content content">
                                    <div class="section-header text-center">
                                        <h2 class="title">{{$user->nama}}'s Profile</h2>
                                        Profile
                                    </div>
                                    <div class="contact--info inner ">
                                        <div class="row justify-content-center">
                                            <img src="{{$user->getAvatar()}}" class="img-circle" style="width:300px;height:300px;object-fit: cover;border-radius:8px" alt="Avatar">
                                        </div>
                                    
                                        <div class="profile-stat">
                                            <div class="row justify-content-center">
                                                
                                
                                            </div>
                                            <div class="row justify-content-center">
                                            
                                                <a href="#" class="main-btn">Tes</a>
                                            
                                            </div>
                                            <br>
                                        </div>
                                    
                                        <!-- Contact Info -->
                                        <div id="main" class="col-md-12">
                                            <div class="col-12 col-lg-12">
                                                <h4>Basic Info</h4>
                                                <div class="textprofile">
                                                    <a href="/catatan-kebaikan-siswa/{{$user->id}}">Lihat Catatan Kebaikan & Keburukan</a>
                                    
                                                </div>
                                                <ul class="contact-list">
                                                
                                                    <li>
                                                        <h6><i class="fa fa-user" aria-hidden="true"></i>Nama : {{$user->nama}}</h6>                          
                                                    </li>
                                                    <li>
                                                        <h6><i class="fa fa-user" aria-hidden="true"></i>Username : {{$user->username}}</h6>                          
                                                    </li>
                                                    <li>
                                                        <h6><i class="fa fa-user" aria-hidden="true"></i>Nama : {{$user->email}}</h6>                          
                                                    </li>
                                                    <li>
                                                        <h6><i class="fa fa-user" aria-hidden="true"></i>Nama : {{$user->role}}</h6>                          
                                                    </li>
                                                
                                                    
                                                </ul>
                                                <div class="row justify-content-center">
                                                    <a href="/profile/{{$user -> id}}/edit" class="btn btn-warning">Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- END PROFILE HEADER -->
                                </div>
</div>
                                <!-- END OF DATA SISWA -->
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    <!-- ./animated -->
    <!-- ./content -->
    <div class="clearfix">
        
    </div>



@endsection