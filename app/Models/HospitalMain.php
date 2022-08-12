<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalMain extends Model
{
    use HasFactory;

    protected $fillable = [
        'hname','hlogo','hlocation','hstaffcount','hstatus'
    ];
}
