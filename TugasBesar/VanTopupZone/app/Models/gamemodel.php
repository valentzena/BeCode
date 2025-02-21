<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gamemodel extends Model
{
    protected $table = 'game';
    protected $primarykey = 'id';
    protected $fillable = ['nama','gambar'];
}
