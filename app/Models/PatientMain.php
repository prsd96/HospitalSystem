<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientMain extends Model
{
    use HasFactory;

    protected $fillable = [
        'pfirstname', 'plastname', 'phosp', 'pdoc', 'pcontact', 'admitdate', 'dischargedate', 'pstatus'
    ];
}
