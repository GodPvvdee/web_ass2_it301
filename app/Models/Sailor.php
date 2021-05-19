<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sailor extends Model
{
    use HasFactory;
    protected $fillable = ['sailor_name','date_of_birth','marital_status','address','height','weight','blood_type','shoe_size','job_status'];
    protected $primaryKey = 'sailor_id';
}
