<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Pemain;
use App\Models\PemainGames;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\New_;


class DashboardController extends Controller
{
    public function Dashboard(){
        $data = PemainGames::with('pemain','game')->get();
        return view('dashboard.Dashboard',[
            'data' => $data
        ]);
    }

    public function Gamepemain(){
        $gp = Game::all();
        
        $us = Pemain::all();
        return view('dashboard.Gamepemain', compact('gp', 'us'));
    }

    public function Gamespem( Request $request){
        // $akew = PemainGames::create($request->all());
        $akew = new PemainGames();
        $akew->game_id = $request->game_id;
        $akew->pemain_id = $request->pemain_id;

        $akew->save();

        return view('dashboard.Dashboard');
    }

    public function jumlahpemain( Request $request )
    {
        $data['Dashboard'] = DB::table('pemain_game')
        ->select([
            'games.nama_game',
            'pemains.id',
            DB::raw('COUNT(*) as jumlah')
            
        ]) 
        ->join('games','games.id','=','pemain_game.game_id')
        ->join('pemains','pemains.id','=','pemain_game.pemains_id')
        ->groupBy(['games.nama_game','pemains.name'])
        ->get();
        return view('Dashboard',$data);
    }
}
