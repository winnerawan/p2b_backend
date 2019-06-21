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
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-icon" role="tab" aria-controls="home" aria-selected="true"><i class="la la-list"></i> Daftar Pengumuman</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-icon" role="tab" aria-controls="profile" aria-selected="false"><i class="la la-pencil"></i> Input Pengumuman</a>
                                                </li>
                                                
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home-icon" role="tabpanel" aria-labelledby="home-tab">
                                                        <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Judul</th>
                                                                    <th scope="col">Isi</th>
                                                                    <th scope="col">
                                                                        <i class="la la-ellipsis-h"></i>
                                                                    </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($announcements as $i => $announcement)
                                                                        <tr>
                                                                        <th scope="row">{{$i+1}}</th>
                                                                            <td>{{$announcement->title}}</td>
                                                                            <td>{{$announcement->description}}</td>
                                                                            <td>
                                                                                    <a class="btn btn-sm btn-outline-primary" href="{{url('announcements/'.$announcement->id.'/edit')}}">
                                                                                        <i class="la la-edit"></i>
                                                                                    </a>
                                                                                    <a class="btn btn-sm btn-outline-danger" href="{{url('announcements/'.$announcement->id.'/edit')}}">
                                                                                        <i class="la la-trash"></i>
                                                                                    </a>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        
                                                </div>
                                                <div class="tab-pane fade" id="profile-icon" role="tabpanel" aria-labelledby="profile-tab">
                                                    {!! Form::open(['route' => 'announcements.store', 'data-parsley-validate' => '', 'files' => false, 'method' => 'POST  ']) !!}
                                                        <!-- text input -->
                                                        <div style="margin-top:8px; margin-left:16px; margin-right:16px;" class="form-group">
                                                            <input name="title" type="text" class="form-control" placeholder="Judul ...">
                                                        </div>
                                                        <div class="col-sm-12">
                                                                <div style="margin-top:8px;" class="form-group">
                                                                        <textarea id="summernote" name="description"></textarea>
                                                                </div>
                                                        </div>

                                                        <div class="col-sm-2">
                                                            <button type="submit" class="btn btn-primary btn-block"><i class="la la-check"></i> Simpan</button>                                            
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
