<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenreDAO extends DAO
{
    //
    public function getLeGenreById($genreID)
    {
	$genre=DB::table('genre')->where('id_genre','=',$genreID)->first();
        $leGenre=$this->creerObjetMetier($genre);
        
        return $leGenre;
    }
	protected function creerObjetMetier(\stdClass $objet)
    {
        $leGenre = new Genre();
        $leGenre->setIdGenre($objet->id_genre);
        $leGenre->setLibelle($objet->lib_genre);

	
        return $leGenre;
    }
}
