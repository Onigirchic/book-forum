<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    protected $table='follows';
    protected $primaryKey='id';
    protected $guarded=false;
    protected $fillable = ['idUser', 'idBook'];

    public function book()
    {
        return $this->belongsTo(Book::class, 'idBook');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }

}
