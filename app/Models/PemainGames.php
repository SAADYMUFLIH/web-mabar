<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemainGames extends Model
{
    use HasFactory;

    protected $table = 'pemain_game';
    protected $guarded = [];
    # Disable Timestamp "Lumi"
    public $timestamps = false;

    public function pemain()
    {
        return $this->belongsTo(Pemain::class);
    }
    
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
