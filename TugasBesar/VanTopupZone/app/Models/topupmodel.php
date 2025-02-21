<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topupmodel extends Model
{
    protected $table = 'topup';
    protected $primarykey = 'id';
    protected $villable = ['nominal','diamond'];
}
