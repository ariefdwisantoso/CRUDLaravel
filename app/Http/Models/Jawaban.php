<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table      = "jawaban";
    protected $primaryKey = "id";
    public    $timestamps = true;
    protected $fillable   = ['id'];

    public function pertanyaan()
    {
        return $this->belongsTo('App\Http\Models\Pertanyaan', 'id');
    }
}
