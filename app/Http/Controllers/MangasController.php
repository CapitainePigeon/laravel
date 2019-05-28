<?php

namespace App\Http\Controllers;

use App\MangaDAO;
use Illuminate\Http\Request;

class MangasController extends Controller
{
    //
    public function getMangas(){
        $manga = new MangaDAO();
        $lesmangas = $manga->getLesMangas();
	
        return view('manga',compact('lesmangas'));
    }
}
