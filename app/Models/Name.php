<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    use HasFactory;
    public $table="names";
    public $fillable=['name','active','created_at','updated_at'];

}
