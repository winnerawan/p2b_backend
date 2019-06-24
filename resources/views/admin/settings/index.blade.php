@extends('template')
@section('dashboard')
    
    <div class="container-fluid elements py-4 tabs">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>SETTINGS</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        
                                        <div class="col-sm-12">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                {{-- <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-icon" role="tab" aria-controls="home" aria-selected="true"><i class="la la-info"></i> Term of Service</a>
                                                </li> --}}
                                                {{-- <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-icon" role="tab" aria-controls="profile" aria-selected="false"><i class="la la-cab"></i> Pickup & Delivery Cost</a>
                                                </li> --}}
                                                
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home-icon" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="col-sm-12">
                                                        {!! Form::model($setting, ['route' => ['settings.update', 1], 'method' => 'PUT', 'files' => true]) !!}      
                                                        {{-- {!! Form::open(['route' => ['settings.update', 1], 'data-parsley-validate' => '', 'files' => true, 'method' => 'PUT  ']) !!} --}}

                                                        <div style="margin-top:8px;" class="form-group">
                                                            <label>Tanggal Tes</label><br/>
                                                            {{ Form::text('test_date', null, array('id' => 'datepicker', 'class' => 'form-control', 'maxlength' => '255')) }}                                              
                                                        </div>
                                                        <div style="margin-top:8px;" class="form-group">
                                                            <label>Biaya Pendaftaran</label><br/>
                                                            {{ Form::text('registration_fee', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}                                              
                                                        </div>
                                                        <div style="margin-top:8px;" class="form-group">
                                                            <label>Pesan Verifikasi Pembayaran Sukses</label><br/>
                                                            {{ Form::text('message_payment_success', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}                                              
                                                        </div>
                                                        <div style="margin-top:8px;" class="form-group">
                                                            <label>Pesan Verifikasi Pembayaran Gagal</label><br/>
                                                            {{ Form::text('message_payment_failed', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}                                              
                                                        </div>
                                                        <div style="margin-top:8px;" class="form-group">
                                                            <label>Pesan Nilai Keluar</label><br/>
                                                            {{ Form::text('message_grade_out', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}                                              
                                                        </div>

                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Simpan</button>
                                                        </div>
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
@section('extra-js')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script>
    $(function() {
        $("#datepicker").datepicker();
    });
    </script>
    {{-- <script>
    $('#summernote').summernote({
        height: 150,   //set editable area's height
        theme: 'paper',
        airMode: false
    });
    </script> --}}
@endsection
