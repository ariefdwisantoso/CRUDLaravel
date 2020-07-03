@extends('layouts.master')
@section('content')
<p>
    <a href="{{url('/pertanyaan/create')}}" class="btn btn-primary" title="Tambah" rel="tooltip"><i class="fa fa-plus"></i> Tambah Pertanyaan</a>
</p>
@foreach($pertanyaan as $key => $t)
<div class="items">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"><br/><td></td></h4>
            <div class="template-demo">
                <p align="justify"><font face="arial" size="3">Judul Pertanyaan : {!! $t->judul !!}<br>Isi Pertanyaan : {!! $t->isi !!}
                    </font><br> </p>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2"> <img class="profile-pic" src="https://img.icons8.com/bubbles/100/000000/edit-user.png"> </div>
                <div class="col-sm-10">
                    <div class="profile">
                        <p class="cust-profession" style="font-style:italic"> 
                            <td>Posted on {!! $t->created_at !!}</td>
                            <a href="{{url('/jawaban/create',$t->id)}}" class="btn btn-primary" title="Balas" rel="tooltip"><i class="fa fa-reply" aria-hidden="true"></i> Balas</a>
                            <a href="{{url('/jawaban/view',$t->id)}}" class="btn btn-primary" title="Balas" rel="tooltip"><i class="fa fa-eye" aria-hidden="true"></i> View Jawaban</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
