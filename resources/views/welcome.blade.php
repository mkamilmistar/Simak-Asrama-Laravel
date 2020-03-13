@extends('layouts.app')

@section('content')
    <!-- Animated -->
    <div class="animated fadeIn">
        <!--  Traffic  -->
        <div class="row">
            <div class="col-lg-12">
                <h4 class="box-title-2">Dashboard </h4>
                <div class="card">
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
                                <!-- <canvas id="TrafficChart"></canvas>   -->
                                <div id="traffic-chart" class="traffic-chart"></div>
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