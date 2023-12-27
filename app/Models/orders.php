<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $primarykey='id';
    protected $fillable=['theatre_id','movie_id','user_id','image','movie_name','theatre_name','price','time','date'];
}
