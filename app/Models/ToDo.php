<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class toDo extends Model
{
    use HasFactory;
    protected $table= 'to_dos';
    protected $fillable = ['title', 'description', 'created_at', 'updated_at'];
    protected $guarded = ['id'];
}
