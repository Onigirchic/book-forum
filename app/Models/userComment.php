<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserComment extends Model
{
    use HasFactory;

    protected $table='user_comments';
    protected $primaryKey='id';
    protected $guarded=false;
    protected $fillable = ['loginUser', 'idBook', 'comment'];
    
    public function book()
    {
        return $this->belongsTo(book::class, 'idBook', 'id');
    }
}
