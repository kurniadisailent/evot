<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calon extends Model
{
    public $timestamps = false;
    protected $table = 'tbl_calon';
    protected $primaryKey = 'id_caloprotected ';
    protected $fillable = [
        'nama_ketua','nama_wakil','kelas_ketua','kelas_wakil','foto','visi','misi','jumlah_suara'
    ];
}
