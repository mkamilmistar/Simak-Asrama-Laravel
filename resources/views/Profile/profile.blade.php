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
            <h3 class="title" style= "padding : 15px">{{$user->nama}}'s Profile</h3>
        </div>
        <div class="contact--info inner ">
            <div class="row justify-content-center">
                <img src="{{$user->getAvatar()}}" class="img-circle" style="width:150px;height:200px;object-fit: cover;border-radius:8px" alt="Avatar">
            </div>
           
            <div class="profile-stat">
                <div class="row justify-content-center">
                    <div class="row justify-content-center">
                        
                    </div>
                </div>
                <div class="row justify-content-center">
                   
                    <a href="#" class="main-btn">Tes</a>
                  
                </div>
                <br>
            </div>
         
            <!-- Contact Info -->
            <div id="main" class="col-md-12">
                <div class="col-12 col-lg-12">
                    <h4>Data Diri</h4>
                    
                    <style type="text/css">
                    .h-divider{
                    margin-top:10px;
                    margin-bottom:10px;
                    height:1px;
                    width:100%;
                    border-top:3px solid #057650 ;
                    }
                    </style>

                    <div class="h-divider"></div>

                    <dl class="row">
                        <dt class="col-sm-3">Nama Lengkap</dt>
                        <dd class="col-sm-9">{{$user->nama}}</dd>

                        <dt class="col-sm-3">Username</dt>
                        <dd class="col-sm-9">{{$user->username}}</dd>

                        <dt class="col-sm-3">Jenis Kelamin</dt>
                        <dd class="col-sm-9">{{$user->jenis_kelamin}}</dd>

                        <dt class="col-sm-3">Tempat Kelahiran</dt>
                        <dd class="col-sm-9">{{$user->tempat_lahir}}</dd>                     

                        <dt class="col-sm-3 text-truncate">Tanggal Kelahiran</dt>
                        <dd class="col-sm-9">{{$user->tanggal_lahir}}</dd>
                        
                    </div>
                </div>        
        </div>   
        <div id="main" class="col-md-12">
                <div class="col-12 col-lg-12">
                    <h4>Data Orang Tua</h4>
                    <div class="h-divider"></div>
                    <dl class="row">
                        <dt class="col-sm-3">Nama Orang tua</dt>
                        <dt class="col-sm-9">Hubungan</dt>

                        <dd class="col-sm-3">Arianto</dd>
                        <dd class="col-sm-9">Ayah</dd>
                        
                        <dd class="col-sm-3">Mayang</dd>
                        <dd class="col-sm-9">Ibu</dd>
                        </dl>
                </div>
        </div>
                        
        </dl>
                    <div class="row justify-content-center">
                        <a href="/profile/{{$user -> id}}/edit" class="btn btn-warning">Edit</a>
                    </div>
                
            
    
                <!-- END PROFILE HEADER -->
            </div>
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