@extends('template')
@section('dashboard')

    <div class="container-fluid elements py-4 tabs">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>PEMBAYARAN</h5>
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
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                
                                                <div class="tab-pane fade show active" id="student-icon" role="tabpanel" aria-labelledby="student-tab">
                                                    <div class="col-sm-12">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">No Reg</th>
                                                                <th scope="col">NIM</th>
                                                                <th scope="col">Nama Lengkap</th>
                                                                <th scope="col">BANK</th>
                                                                <th scope="col">NO REF</th>
                                                                <th scope="col">Bukti</th>
                                                                <th scope="col"><i class="la la-ellipsis-h"></i></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($student_payments as $payment)
                                                                    <tr>
                                                                        <th scope="row">{{$payment->id}}</th>
                                                                        <td>{{$payment->no_reg}}</td> 
                                                                        <td>{{$payment->nim}}</td>
                                                                        <td>{{$payment->fullname}}</td> 
                                                                        <td>{{$payment->bank_name}}</td>
                                                                        <td>{{$payment->no_ref}}</td>
                                                                        <td><a href="{{$payment->proof_image}}"><img src="{{ $payment->proof_image }}" width="30px;" height="30px;"/></a></td>
                                                                        <td>
                                                                            {{-- {!! Form::open(['route' => ['payments.show', $payment->id], 'method' => 'GET']) !!}   
                                                                            <button type="submit" class="btn btn-sm btn-outline-primary">
                                                                                <i class="la la-eye"></i>
                                                                            </button>
                                                                            {!! Form::close() !!} --}}
                                                                            {!! Form::open(['route' => ['payments.update', $payment->id], 'method' => 'PUT']) !!}   
                                                                            <button type="submit" class="btn btn-sm btn-outline-primary">
                                                                                <i class="la la-check"></i>
                                                                            </button>
                                                                            {!! Form::close() !!}
                                                                            {!! Form::open(['route' => ['payments.destroy', $payment->id], 'method' => 'DELETE']) !!}   
                                                                            <button class="btn btn-sm btn-secondary btn-danger" type="submit">
                                                                                <i class="la la-trash-o"></i>
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
                                                                <th scope="col">No Reg</th>
                                                                <th scope="col">NIK</th>
                                                                <th scope="col">Nama Lengkap</th>
                                                                <th scope="col">BANK</th>
                                                                <th scope="col">NO REF</th>
                                                                <th scope="col">Bukti</th>
                                                                <th scope="col"><i class="la la-ellipsis-h"></i></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($general_payments as $payment)
                                                                    <tr>
                                                                        <th scope="row">{{$payment->id}}</th>
                                                                        <td>{{$payment->no_reg}}</td>
                                                                        <td>{{$payment->nik}}</td>
                                                                        <td>{{$payment->fullname}}</td>
                                                                        <td>{{$payment->bank_name}}</td>
                                                                        <td>{{$payment->no_ref}}</td>
                                                                        <td><a href="{{ $payment->proof_image }}" value="{{ action('PaymentController@show',['id'=>$payment->id]) }}" class="modalMd" title="Show Data" data-toggle="modal" data-target="#modalMd"><img src="{{$payment->proof_image}}" width="30px;" height="30px;"/></a></td>
                                                                        <td>
                                                                                {{-- {!! Form::open(['route' => ['payments.show', $payment->id], 'method' => 'GET']) !!}   
                                                                                <button type="submit" class="btn btn-sm btn-outline-primary">
                                                                                    <i class="la la-eye"></i>
                                                                                </button> 
                                                                                {!! Form::close() !!} --}}
                                                                                {!! Form::open(['route' => ['payments.update', $payment->id], 'method' => 'PUT']) !!}   
                                                                                <button type="submit" class="btn btn-sm btn-outline-primary">
                                                                                    <i class="la la-check"></i>
                                                                                </button>
                                                                                {!! Form::close() !!}
                                                                                {!! Form::open(['route' => ['payments.destroy', $payment->id], 'method' => 'DELETE']) !!}   
                                                                                <button class="btn btn-sm btn-secondary btn-danger" type="submit">
                                                                                    <i class="la la-trash-o"></i>
                                                                                </button>
                                                                                {!! Form::close() !!}
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
