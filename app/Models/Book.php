<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $table='books';
    protected $primaryKey='id';
    protected $guarded=false;

    protected $fillable = [
        'name',
        'author',
        'genre',
        'description',
        'imageName',
        'imagePath',
    ];  

    public function getPostDate()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    public function comments()
    {
        return $this->hasMany(UserComment::class, 'idBook', 'id');
    }   
}
