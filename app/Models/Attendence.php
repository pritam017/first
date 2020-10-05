<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id', 'attn_date', 'attn_year','attendence','edit_date'
    ];
    public function employee(){
        return $this->belongsTo('App\Models\Employee', 'employee_id');
    }
}
