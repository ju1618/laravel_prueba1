<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
  protected $peliculas = [1=> "Toy Story",
                2=> "Buscando a Nemo",
                3 => "Avatar",
                4=> "Star Wars: Episodio V",
                5=> "Up",
                6 => "Mary and Max"];

  public function searchMoviesById ($id){

    $moviefound = 'No se encontro la pelicula';

    foreach ($this->peliculas as $position => $movie) {
      if ($position == $id){
        $moviefound = 'La pelicula es:' . $movie;
      }
    }
  return view('front.movies', compact('$moviefound'));
  }

  public function findMovieByName($name){

    $moviefound = 'No se encontro la pelicula';

    foreach ($this->peliculas as $position => $movie) {
      if ($movie == $name){
        $moviefound = 'La pelicula es:' . $movie;
      }
    }
  return view('front.movies', compact('$moviefound'));
  }
}
