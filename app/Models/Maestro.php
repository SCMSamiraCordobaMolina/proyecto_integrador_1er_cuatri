<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'dni'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
