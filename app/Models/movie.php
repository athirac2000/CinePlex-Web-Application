<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;
    protected $table='movie';
    protected $primarykey='id';
    protected $fillable=['moviename','theatre_id','genre','image','certificate','length','language','theatrename'];

    public function theatre()
    {
        return $this->belongsTo(theatre::class,'theatre_id');
    }
    public function movielist()
    {
        return $this->hasMany(usertheatre::class);
    }
}
