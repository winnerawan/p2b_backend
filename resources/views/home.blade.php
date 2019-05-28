@extends('template')

@section('dashboard')
    <section class="dashboard">
                <div class="container-fluid py-4 statistic">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>STATISTIK</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5 text-center">
                                            <div class="position-relative p-2 rounded text-white bg-red d-block">
                                                <i class="la la-users la-3x"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 p-0">
                                            <h5 class="text-read">Partisipan</h5>
                                            <b class="text-dark">
                                                {{ $participants->count() }}
                                            </b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5 text-center">
                                            <div class="position-relative p-2 rounded text-white bg-red d-block">
                                                <i class="la la-money la-3x"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 p-0">
                                            <h5 class="text-read">Uang Masuk</h5>
                                            <b class="text-dark">
                                                Rp {{ number_format($payments->count() * 100000) }}
                                            </b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5 text-center">
                                            <div class="position-relative p-2 rounded text-white bg-red d-block">
                                                <i class="la la-mortar-board la-3x"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 p-0">
                                            <h5 class="text-read">Mahasiswa</h5>
                                            <b class="text-dark">
                                                {{ $students->count() }}
                                            </b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5 text-center">
                                            <div class="position-relative p-2 rounded text-white bg-red d-block">
                                                <i class="la la-user la-3x"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 p-0">
                                            <h3 class="text-read">Umum</h3>
                                            <b class="text-dark">
                                                {{ $generals->count() }}
                                            </b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid py-4 revenue">
                    
                    <div class="row">
                        <div class="col-lg-6 space-bottom-mobile">
                            <div class="row">
                                <div class="col-sm-6 col-8">
                                    <h5>Grafik Pendaftar</h5>                            
                                </div>
                                <div class="col-sm-6 col-4 text-right">
                                    <a href="#" class="text-red">
                                        
                                    </a>
                                </div>
                            </div>
                            <div class="card border-0">
                                <div class="card-body">
                                    <canvas id="revenueChart" height="400"></canvas>                                                            
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 space-bottom-mobile">
                            <div class="row">
                                <div class="col-sm-6 col-8">
                                    <h5>Grafik Pembayaran</h5>                            
                                </div>
                                <div class="col-sm-6 col-4 text-right">
                                    <a href="#" class="text-red">
                                        
                                    </a>
                                </div>
                            </div>
                            <div class="card border-0">
                                <div class="card-body">
                                    <canvas id="graph" height="400"></canvas>                                                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
@endsection

@section('extra-js')
<script type="text/javascript">
    var ctx = document.getElementById("graph");
    var myLineChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["PEMBAYARAN TERVERIFIKASI", "PEMBAYARAN BELUM TERVERIFIKASI", "BELUM UPLOAD BUKTI PEMBAYARAN"],
            datasets: [{
                label: 'Revenue Six Month',
                data: [{{ $paid['verified'] }}, {{ $paid['not_verified'] }}, {{ $paid['not_upload'] }}],
                pointRadius: 0,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(57, 106, 252, 0.2)'
                ],
                borderColor: [
                    'rgb(57, 106, 252)'
                ],
                borderWidth: 3,
                pointDot: false
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
<script type="text/javascript">
    var weeks = @json($weekdays);
    var wv = @json($weekday_val);
    //  var wv = wv.replace(/['["\],]+/g, '');
var ctx = document.getElementById("revenueChart");
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [weeks],
        datasets: [{
            label: 'PENDAFTAR',
            data: [wv],
            pointRadius:0,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(57, 106, 252, 0.2)'
            ],
            borderColor: [
                'rgb(57, 106, 252)'
            ],
            borderWidth: 3,
            pointDot: false
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
  });

</script>
@endsection
