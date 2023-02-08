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
     return view('dashboard.Dashboard');
}
}