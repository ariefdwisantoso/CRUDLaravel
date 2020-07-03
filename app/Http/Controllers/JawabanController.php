<?php

namespace App\Http\Controllers;
use App\Http\Models\Pertanyaan;
use App\Http\Models\Jawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Alert;

class JawabanController extends Controller
{
    public function create(Request $request, $id){
        $pertanyaan = Pertanyaan::find($id);
        return view ('jawaban.create',compact('pertanyaan'));
    }

    public function store(Request $request)
    {
        $this->validate($request, ["isi" => "required" 
                                   ]);
        $jawaban                = new Jawaban();
        $jawaban->isi           = $request->isi;
        $jawaban->pertanyaan_id = $request->pertanyaan_id;
        $jawaban->save();

        return redirect('/')->with('success', 'Berhasil menambah jawaban. Terima Kasih.');
    }

    public function view(Request $request){
        $pertanyaan = Pertanyaan::all();
        $jawaban    = Jawaban::with('pertanyaan')->get();
        return view ('jawaban.view', compact('pertanyaan','jawaban'));
        //dd($pertanyaan, $jawaban);
    }
}
