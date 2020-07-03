@extends('layouts.master')
@section('content')
@foreach($pertanyaan as $p)
@foreach($p->jawaban as $j)
<div class="items">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"><br/><td></td></h4>
            <div class="template-demo">
                <p align="justify"><font face="arial" size="3">Isi Jawaban : {!! $j->isi !!}
                    </font><br> </p>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2"> <img class="profile-pic" src="https://img.icons8.com/bubbles/100/000000/edit-user.png"> </div>
                <div class="col-sm-10">
                    <div class="profile">
                        <p class="cust-profession" style="font-style:italic"> 
                            <td>Posted on {!! $j->created_at !!}</td>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endforeach
@endsection
