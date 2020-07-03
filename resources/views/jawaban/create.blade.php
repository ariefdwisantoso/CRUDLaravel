@extends('layouts.master')
@section('content')
<form action="/jawaban/create/{pertanyaan_id}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<h4>
    <font size="5">Tulis Jawaban</font>
</h4><br>
<input type="hidden" name="pertanyaan_id" value="{{$pertanyaan->id}}" >
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
