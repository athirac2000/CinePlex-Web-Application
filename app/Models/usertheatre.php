<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usertheatre extends Model
{
    use HasFactory;
    protected $table='usertheatre';
    protected $primarykey='id';
    protected $fillable=['moviename','image','theatre_id','time','seats','date','price'];

   // usertheatre.php
   public function movie()
    {
        return $this->belongsTo('App\Models\movie', 'moviename', 'id');
    }
    public function theatre()
    {
        return $this->belongsTo('App\Models\theatre', 'theatre_id', 'id');
    }


}
