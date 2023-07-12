<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang_model extends Model
{
    use HasFactory;
    protected $table ="ruang";
    protected $primaryKey ="id";

    public function tampil_ruang(){
        $query = \DB::table('ruang')->get();
        return $query;
    }
}
