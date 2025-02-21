<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bayarmodel extends Model
{
    protected $table = 'bayar';
    protected $primarykey = 'id';
    protected $villable = ['pembayaran','diskon'];
}
