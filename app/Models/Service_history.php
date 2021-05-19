<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_history extends Model
{
    use HasFactory;
    protected $primaryKey = 'sequence_number';
    protected $fillable = ['sailor_id', 'rank_id', 'vessel_id', 'sign_on_date', 'sign_on_port', 'sign_off_date', 'sign_off_port', 'contract_perion', 'contact_end_date'];

}
