@extends('layouts.master')
@section('content')
<form action="" name="" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<h4>
    <font size="5">Hapus Pertanyaan</font>
</h4><br>
{!! Form::model($pertanyaan, ['class' => 'form', 'files'=>true,]) !!}
<div class="row">
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label >Judul Pertanyaan</label>
            {!! Form::text('judul', null, ['class' => 'form-control',  'onkeyup' => 'this.value = this.value.toUpperCase()', 'readonly']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label >ISI Pertanyaan</label>
            {!! Form::text('isi', null, ['class' => 'form-control', 'readonly']) !!}
        </div>
    </div>
</div>

<button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a></button>
<a href="{{url('/')}}" class="btn btn-lg">Batal</a>

@endsection
