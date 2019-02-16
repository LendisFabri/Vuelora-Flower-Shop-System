<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Http\Resources\Kategori as KategoriResourceCollection;

class KategoriController extends Controller
{
    public function random($count){
    	$kriteria = Kategori::select('*')
    		->inRandomOrder()
    		->limit($count)
    		->get()
    	return new KategoriResourceCollection($kriteria);
    }
}
