<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorMain extends Model
{
    use HasFactory;

    protected $fillable = [
        'dfirstname', 'dlastname', 'dhosp', 'dspecial,', 'dcontact', 'dstatus'
    ];
}
