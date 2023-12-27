<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theatre extends Model
{
    use HasFactory;
    protected $table='theatre';
    protected $primarykey='id';
    protected $fillable=['name','location','quantity','email','password'];

    public function movie()
    {
        return $this->hasMany(movie::class);
    }
    public function usertheatre()
    {
        return $this->hasMany(usertheatre::class);
    }
    
}
