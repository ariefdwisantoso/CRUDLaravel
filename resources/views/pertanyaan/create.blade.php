@extends('layouts.master')
@section('content')
<form action="/" name="" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<h4>
    <font size="5">Tulis Pertanyaan</font>
</h4><br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label >Judul Pertanyaan</label>
            {!! Form::text('judul', null, ['class' => 'form-control',  'onkeyup' => 'this.value = this.value.toUpperCase()']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label >ISI Pertanyaan</label>
            {!! Form::text('isi', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary btn-lg">Simpan</button>
<a href="{{url('/')}}" class="btn btn-lg">Batal</a>

@endsection
