<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsFiles extends Model
{
    use HasFactory;
    protected $table="jobsfiles";
    protected $fillable=[
    'id','photo','jobsid','created_at','updated_at'

    ];
}
