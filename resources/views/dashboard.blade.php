@extends('layouts.app')

@section('content')
<div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Dashboard</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">Table</a></li>
                                        <li class="active">Data table</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>  
    <div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="dekorjudul">
                        <div class="judul">
                            <!-- isi dengan judul kalau ada -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="samping">
                            <a class="fa fa-paperclip"></a>
                            <div class="jarak">
                                <h4 class="box-title-3">Pengumuman/peringatan </h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card-body">
                                
                                <div id="traffic-chart" class="traffic-chart">
                                    Pusing
                                </div>
                            </div>
                        </div>
                    
                        </div>
                    </div> <!-- /.row -->
                    <div class="card-body"></div>
                </div>
            </div><!-- /# column -->
        </div>
        <!--  /Traffic -->
        
    </div>
    <!-- ./animated -->
    <!-- ./content -->
    <div class="clearfix">
        
    </div>
@endsection