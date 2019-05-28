@extends('template')
@section('dashboard')
    {{-- <div class="container-fluid py-4 forms">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Category</h3>
                        </div>
                    </div>

            <div class="row">
                        <div class="col-sm-12">
                            <div class="card border-0">
                                <div class="card-body">
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Icon</label><br/>
                                            <input type="file" name="icon">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div> --}}

    <div class="container-fluid elements py-4 tabs">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>PESERTA</h5>
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
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-icon" role="tab" aria-controls="home" aria-selected="true"><i class="la la-navicon"></i> Peserta</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="student-tab" data-toggle="tab" href="#student-icon" role="tab" aria-controls="student" aria-selected="false"><i class="la la-mortar-board"></i> Mahasiswa</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="general-tab" data-toggle="tab" href="#general-icon" role="tab" aria-controls="general" aria-selected="false"><i class="la la-user"></i> Umum</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home-icon" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="col-sm-12">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col"><i class="la la-ellipsis-h"></i></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($participants as $i => $participant)
                                                                    <tr>
                                                                        <th scope="row">{{$i+=1}}</th>
                                                                        <td>{{$participant->email}}</td>
                                                                        <td>
                                                                            <a id="{{ $participant->id }}" class="btn btn-sm btn-outline-primary modalMd" href="#" value="{{ action('ParticipantController@edit',['id'=>$participant->id]) }}" title="" data-toggle="modal" data-target="#modalMd">
                                                                                <i class="la la-edit"></i>
                                                                            </a>
                                                                            <a class="btn btn-sm btn-secondary btn-danger" href="">
                                                                                <i class="la la-trash-o"></i>
                                                                            </a>
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="student-icon" role="tabpanel" aria-labelledby="student-tab">
                                                    <div class="col-sm-12">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">No Reg</th>
                                                                <th scope="col">NIM</th>
                                                                <th scope="col">Nama Lengkap</th>
                                                                <th scope="col">Tgl Lahir</th>
                                                                <th scope="col">Fakultas</th>
                                                                <th scope="col">Prodi</th>
                                                                <th scope="col"><i class="la la-ellipsis-h"></i></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($students as $student)
                                                                    <tr>
                                                                        <th scope="row">{{$student->id}}</th>
                                                                        <td>{{$student->no_reg}}</td>
                                                                        <td>{{$student->nim}}</td>
                                                                        <td>{{$student->fullname}}</td>
                                                                        <td>{{$student->dob}}</td>
                                                                        <td>{{$student->faculty}}</td>
                                                                        <td>{{$student->program_study}}</td>
                                                                        <td>
                                                                            <a class="btn btn-sm btn-outline-primary" href="{{url('students/'.$student->id.'/edit')}}">
                                                                                <i class="la la-edit"></i>
                                                                            </a>
                                                                            {{-- <a class="btn btn-sm btn-secondary btn-danger" href="">
                                                                                <i class="la la-trash-o"></i>
                                                                            </a> --}}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="general-icon" role="tabpanel" aria-labelledby="general-tab">
                                                    <div class="col-sm-12">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">No Reg</th>
                                                                <th scope="col">NIK</th>
                                                                <th scope="col">Nama Lengkap</th>
                                                                <th scope="col">Tgl Lahir</th>
                                                                <th scope="col">Telp</th>
                                                                <th scope="col"><i class="la la-ellipsis-h"></i></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($generals as $general)
                                                                    <tr>
                                                                        <th scope="row">{{$general->id}}</th>
                                                                        <td>{{$general->no_reg}}</td>
                                                                        <td>{{$general->nik}}</td>
                                                                        <td>{{$general->fullname}}</td>
                                                                        <td>{{$general->dob}}</td>
                                                                        <td>{{$general->phone}}</td>
                                                                        <td>
                                                                            <a class="btn btn-sm btn-outline-primary" href="{{url('generals/'.$general->id.'/edit')}}">
                                                                                <i class="la la-edit"></i>
                                                                            </a>
                                                                            {{-- <a class="btn btn-sm btn-secondary btn-danger" href="">
                                                                                <i class="la la-trash-o"></i>
                                                                            </a> --}}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
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


<div class="modal fade" id="modalMd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="modalMdTitle"></h4>
                  </div>
                  <div class="modal-body">
                      
                      <div class="modalError"></div>
                      <div id="modalMdContent"></div>
                  </div>
              </div>
          </div>
        </div>
@endsection

@section('extra-js')
    <script type="text/javascript"> 
    $(document).ready(function(e) {   
    // your code here
    $('.modalMd').off('click').on('click', function () {
        $('#modalMdContent').load($(this).attr('value'));
        $('#modalMdTitle').html($(this).attr('title'));
            
        });
    }); 
    </script>
@endsection
