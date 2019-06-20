@extends('template')
@section('dashboard')

    <div class="container-fluid elements py-4 tabs">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>NILAI</h5>
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
                                                    <a class="nav-link active" id="student-tab" data-toggle="tab" href="#student-icon" role="tab" aria-controls="student" aria-selected="true"><i class="la la-mortar-board"></i> Mahasiswa</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="general-tab" data-toggle="tab" href="#general-icon" role="tab" aria-controls="general" aria-selected="false"><i class="la la-user"></i> Umum</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="gradestudent-tab" data-toggle="tab" href="#gradestudent-icon" role="tab" aria-controls="gradestudent" aria-selected="false"><i class="la la-graduation-cap"></i> Input Nilai Mahasiswa</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="gradegeneral-tab" data-toggle="tab" href="#gradegeneral-icon" role="tab" aria-controls="gradegeneral" aria-selected="false"><i class="la la-graduation-cap"></i> Input Nilai Umum</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                
                                                <div class="tab-pane fade show active" id="student-icon" role="tabpanel" aria-labelledby="student-tab">
                                                    <div class="col-sm-12">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Nama</th>
                                                                <th scope="col">NIM</th>
                                                                <th scope="col">Listening</th>
                                                                <th scope="col">Grammar</th>
                                                                <th scope="col">Reading</th>
                                                                <th scope="col">Total</th>
                                                                <th scope="col"><i class="la la-ellipsis-h"></i></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($grade_students as $grade)
                                                                    <tr>
                                                                        <th scope="row">{{$grade->id}}</th>
                                                                        <th scope="row">{{$grade->fullname}}</th>
                                                                        <td>{{$grade->nim}}</td>
                                                                        <td>{{$grade->listening}}</td>
                                                                        <td>{{$grade->grammar}}</td> 
                                                                        <td>{{$grade->reading}}</td>
                                                                        <td>{{$grade->total_score}}</td>
                                                                        <td>
                                                                            {!! Form::open(['route' => ['grades.show', $grade->id], 'method' => 'GET']) !!}   
                                                                            <button type="submit" class="btn btn-sm btn-outline-primary">
                                                                                <i class="la la-eye"></i>
                                                                            </button>
                                                                            {!! Form::close() !!}
                                                                            
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
                                                                        <th scope="col">Nama</th>
                                                                        <th scope="col">NIK</th>
                                                                        <th scope="col">Listening</th>
                                                                        <th scope="col">Grammar</th>
                                                                        <th scope="col">Reading</th>
                                                                        <th scope="col">Total</th>
                                                                        <th scope="col"><i class="la la-ellipsis-h"></i></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($grade_generals as $grade)
                                                                            <tr>
                                                                                <th scope="row">{{$grade->id}}</th>
                                                                                <th scope="row">{{$grade->fullname}}</th>
                                                                                <td>{{$grade->nik}}</td>
                                                                                <td>{{$grade->listening}}</td>
                                                                                <td>{{$grade->grammar}}</td> 
                                                                                <td>{{$grade->reading}}</td>
                                                                                <td>{{$grade->total_score}}</td>
                                                                                <td>
                                                                                    {!! Form::open(['route' => ['grades.show', $grade->id], 'method' => 'GET']) !!}   
                                                                                    <button type="submit" class="btn btn-sm btn-outline-primary">
                                                                                        <i class="la la-eye"></i>
                                                                                    </button>
                                                                                    {!! Form::close() !!}
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="gradestudent-icon" role="tabpanel" aria-labelledby="gradestudent-tab">
                                                    <div class="col-sm-12">
                                                        {!! Form::open(['route' => 'grades.store', 'files' => false, 'method' => 'POST  ']) !!}

                                                        <div class="form-group">
                                                            <label style="margin-top:16px;">Pilih Mahasiswa</label>
                                                            <select class="form-control" name="participant_id">
                                                                @foreach($students as $student)
                                                                <option value="{{$student->participant_id}}">{{ $student->fullname }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                                <label>Listening</label>
                                                                {{ Form::text('listening', '', array('class' => 'form-control')) }}
                                                            </div>
                                                            <div class="form-group">
                                                                    <label>Grammar</label>
                                                                    {{ Form::text('grammar', '', array('class' => 'form-control')) }}
                                                            </div>
                                                            <div class="form-group">
                                                                    <label>Reading</label>
                                                                    {{ Form::text('reading', '', array('class' => 'form-control')) }}
                                                            </div>
                                                            {{-- <div class="form-group">
                                                                    <label>Total Score</label>
                                                                    {{ Form::text('total_score', '', array('class' => 'form-control')) }}
                                                            </div> --}}

                                                            <div class="form-group">
                                                                    <button type="submit" class="btn btn-lg btn-primary">
                                                                        <i class="la la-check">Simpan</i>
                                                                    </button>
                                                                    
                                                            </div>    
                                                            {!! Form::close() !!}
                                                        </div>
                                                </div>

                                                <div class="tab-pane fade" id="gradegeneral-icon" role="tabpanel" aria-labelledby="gradegeneral-tab">
                                                        <div class="col-sm-12">
                                                                {!! Form::open(['route' => 'grades.store', 'files' => false, 'method' => 'POST  ']) !!}
        
                                                                <div class="form-group">
                                                                    <label style="margin-top:16px;">Pilih Peserta Umum</label>
                                                                    <select class="form-control" name="participant_id">
                                                                        @foreach($generals as $general)
                                                                        <option value="{{$general->participant_id}}">{{ $general->fullname }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                        <label>Listening</label>
                                                                        {{ Form::text('listening', '', array('class' => 'form-control')) }}
                                                                    </div>
                                                                    <div class="form-group">
                                                                            <label>Grammar</label>
                                                                            {{ Form::text('grammar', '', array('class' => 'form-control')) }}
                                                                    </div>
                                                                    <div class="form-group">
                                                                            <label>Reading</label>
                                                                            {{ Form::text('reading', '', array('class' => 'form-control')) }}
                                                                    </div>
                                                                    {{-- <div class="form-group">
                                                                            <label>Total Score</label>
                                                                            {{ Form::text('total_score', '', array('class' => 'form-control')) }}
                                                                    </div> --}}
        
                                                                    <div class="form-group">
                                                                            <button type="submit" class="btn btn-lg btn-primary">
                                                                                <i class="la la-check">Simpan</i>
                                                                            </button>
                                                                            
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
<script type="text/javascript">
    $(document).on('ajaxComplete ready', function () {
        $('.modalMd').off('click').on('click', function () {
            $('#modalMdContent').load($(this).attr('href'));
            $('#modalMdTitle').html($(this).attr('title'));
            
            e.preventDefault();
        });
    });
</script>