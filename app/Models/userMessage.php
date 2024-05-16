<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMessage extends Model
{
    use HasFactory;

    protected $table='user_messages';
    protected $primaryKey='id';
    protected $guarded=false;
    protected $fillable = ['name', 'email', 'message'];
}
