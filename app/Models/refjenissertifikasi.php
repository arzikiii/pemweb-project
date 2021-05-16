<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refjenissertifikasi extends Model
{
    protected $table = 'ref_jenis_sertifikasi';
    protected $fillable = ['nama', 'status_jenis_sertifikasi', 'created_by', 'edited_by', 'is_aktif'];
    use HasFactory;
}
