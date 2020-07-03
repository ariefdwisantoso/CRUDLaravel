<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table      = "pertanyaan";
    protected $primaryKey = "id";
    public    $timestamps = true;
    protected $fillable   = ['id'];

    public function jawaban()
    {
        return $this->hasMany('App\Http\Models\Jawaban', 'pertanyaan_id');
    }
}
