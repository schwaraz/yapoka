<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class list_angket extends Model
{
    use HasFactory;

    protected $fillable = ['pengisidata','status_penyetuju_nomer','note','jumlah_penyetuju','id_penyetuju_sekarang'];
    public $timestamps = false;
}
