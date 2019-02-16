<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bunga;
use App\Http\Resources\Bunga as BungaResourceCollection;

class BungaController extends Controller
{
    $kriteria = Bunga::select('*')
    	->orderBy('views', 'DESC')
    	->limit($count)
    	->get();
    return new BungaResourceCollection($kriteria);
}
