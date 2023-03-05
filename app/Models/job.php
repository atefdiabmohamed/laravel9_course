<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class job extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table="jobs";
    protected $fillable=[
    'id','name','active','created_at','updated_at'

    ];


}
