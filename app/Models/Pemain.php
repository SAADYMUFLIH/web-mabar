<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_at'];
    protected $table = 'pemains';

    protected function relationkegame(){
        return $this->belongsToMany(Game::class);
    }

}
