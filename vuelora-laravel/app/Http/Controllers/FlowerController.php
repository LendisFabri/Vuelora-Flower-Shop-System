<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flower;
use App\Http\Resources\Flowers as FlowerResourceCollection;

class FlowerController extends Controller
{
    $criteria = Flower::select('*')
    	->orderBy('views', 'DESC')
    	->limit($count)
    	->get();
    return new FlowerResourceCollection($criteria);
}
