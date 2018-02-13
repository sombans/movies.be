<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
     public function index(){
        return Movie::all();
    }

     public function show($id){
        return Movie::find($id);
    }

     public function store(){
        $movie = new Movie;

        $movie->name = request('name');
        $movie->director = request('director');
        $movie->imageUrl = request('imageUrl');
        $movie->duration = request('duration');
        $movie->releaseDate = request('releaseDate');
        $movie->genres = request('genres');


        $movie->save();


    }

     public function update(Request $request, $id)
    {
        $movie = Movie::find($id);
        $movie->update($request->all());
        return $movie;

    }

     public function delete($id){
        $movie = Movie::find($id);
        $movie->delete();
    }
}
