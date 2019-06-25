@extends('template')

@section('dashboard')

    <div class="container-fluid elements py-4 tabs">
                <div class="row">
                    <div class="col-sm-12">
                        <h5>PENGUMUMAN</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="row">
                                    
                                    <div class="col-sm-12">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                           
                                            
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home-icon" role="tabpanel" aria-labelledby="home-tab">
                                             {!! Form::model($announcement, ['route' => ['announcements.update', $announcement->id], 'method' => 'PUT']) !!}      

                                                <div class="col-sm-12">
                                                    <div style="margin-top:8px;" class="form-group">
                                                        {{ Form::text('title', null, array('class' => 'form-control', 'required' => '')) }}                                              
                                                    </div>
                                                    <div style="margin-top:8px;" class="form-group">
                                                        {{ Form::textarea('description', null, array('id' => 'summernote', 'class' => 'form-control', 'required' => '')) }}                                              
                                                    </div>
                                                    <div class="col-sm-2">
                                                            <button type="submit" class="btn btn-primary btn-block"><i class="la la-check"></i> Simpan</button>                                            
                                                        </div>
                                                </div>
                                            {!! Form::close() !!}    
                                            </div>
                                            <div class="tab-pane fade" id="profile-icon" role="tabpanel" aria-labelledby="profile-tab">
                                                <form role="form">
                                                    <!-- text input -->
                                                    <div style="margin-top:8px;" class="form-group">
                                                        <label>Price/KM</label>
                                                        <input type="number" class="form-control" placeholder="Enter ...">
                                                    </div>
                                                    
                                                </form>
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
    
</section>
@endsection    
@section('extra-js')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script>
    $('#summernote').summernote({
        height: 150,   //set editable area's height
        theme: 'paper',
        airMode: false
    });
    </script>
@endsection