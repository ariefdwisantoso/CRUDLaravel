<?php

namespace App\Http\Controllers;
use App\Http\Models\Pertanyaan;
use App\Http\Models\Jawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Alert;

class PertanyaanController extends Controller
{
    public function index(Request $request){
        $pertanyaan = Pertanyaan::orderBy('created_at', 'DESC')->paginate(10);
        return view ('index', compact('pertanyaan'));
    }

    public function create(){
        return view ('pertanyaan/create');
    }

    public function store(Request $request)
    {

        $this->validate($request, ["judul" => "required", 
                                   "isi" => "required", 
                                   ]);
        $pertanyaan             = new Pertanyaan();
        $pertanyaan->judul      = $request->judul;
        $pertanyaan->isi        = $request->isi;
        $pertanyaan->save();
        
        return redirect('/')->with('success', 'Berhasil menambah pertanyaan. Terima Kasih.');
    }


}
