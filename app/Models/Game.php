<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    
        protected $guarded = [];
        protected $dates = ['created_at'];
        protected $table = 'games';
        
        protected function relationkepemain(){
            return $this->belongsToMany(Pemain::class);
        }
    
}
