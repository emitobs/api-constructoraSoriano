<?php

namespace App\Http\Controllers;

use App\Models\Proyect;
use Illuminate\Http\Request;

class ProyectController extends Controller
{
    public function getProyects(){
        return Proyect::where('disabled',0)->get();
    }
}
